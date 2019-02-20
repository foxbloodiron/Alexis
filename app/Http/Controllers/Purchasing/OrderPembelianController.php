<?php

namespace App\Http\Controllers\Purchasing;

use App\Http\Controllers\Controller;
// use App\Http\Controllers\PurchaseController;
use Illuminate\Http\Request;
use App\model\purchasing\d_purchase_order;
use App\model\purchasing\d_purchase_order_dt;
use App\model\master\m_item;
use App\model\master\m_supplier;
use DB;
use Response;

class OrderPembelianController extends Controller
{
     public function tambah_orderpembelian_tanparencana()
    {
        return view('purchasing/orderpembelian/tambah_orderpembelian_tanparencana');
    }    

    public function orderpembelian()
    {
      $amount_waiting = d_purchase_order::where('po_status' , 'WT')->count('po_id');
      $amount_disetujui = d_purchase_order::where('po_status' , 'AP')->count('po_id');

      $res = [
        'amount_waiting' => $amount_waiting,
        'amount_disetujui' => $amount_disetujui
      ];
    	return view('purchasing/orderpembelian/orderpembelian', $res);
    }
    public function tambah_orderpembelian()
    {
      return view('purchasing/orderpembelian/tambah_orderpembelian');
    }

    public function preview_orderpembelian($id)
    {
      $d_purchase_order = d_purchase_order::leftJoin('m_supplier', 'po_supplier', '=', 's_id')->leftJoin('users', 'po_officer', '=', 'id');
      $d_purchase_order = $d_purchase_order->where('po_id', $id)->get();
      $d_purchase_order_dt = d_purchase_order_dt::leftJoin('m_item', 'podt_item', '=', 'i_id')->leftJoin('m_satuan', 'podt_satuan', '=', 's_id');
      $d_purchase_order_dt = $d_purchase_order_dt->where('podt_purchase_order', $id)->select('podt_item', 'podt_prev_price', 'podt_satuan', 'podt_qty', 's_id', 's_name', 'i_id', 'i_code', 'i_name', DB::raw("IFNULL((SELECT s_qty FROM d_stock WHERE s_item = m_item.i_id), 0) AS stock"))->get();

      $res = [
        "purchase_order" => $d_purchase_order,
        "purchase_order_dt" => $d_purchase_order_dt
      ];


    	return response()->json($res);
    }



    public function find_m_item(Request $req) {
      $m_item = new m_item();
      // die('dsa');
      $res = $m_item->find_data($req);
      return response()->json($res);
    }

    public function find_m_supplier(Request $req) {
      $m_supplier = new m_supplier();
      $res = $m_supplier->find_data($req);

      return response()->json($res);
    }

    function find_d_purchase_order_dt($id) {

      $d_purchase_order_dt = d_purchase_order_dt::leftJoin('m_item', 'podt_item', '=', 'i_id')->leftJoin('m_satuan', 'i_sat1', '=', 's_id');  
      $d_purchase_order_dt = $d_purchase_order_dt->where('podt_purchase_order', $id)->select('s_id', 's_name', 'podt_item','podt_qty','podt_price','podt_satuan','i_id','i_code','i_name', DB::raw('IFNULL((SELECT s_qty FROM d_stock WHERE s_item = m_item.i_id), 0) AS s_qty'), DB::raw('IFNULL((SELECT s_qty FROM d_stock WHERE s_item = m_item.i_id), 0) AS s_qty'))->get();

       $res = array('d_purchase_order_dt' => $d_purchase_order_dt);
       return response()->json($res);
    }
   
    function find_d_purchase_order(Request $req) {

       $data = array();
       $rows = d_purchase_order::leftJoin('m_supplier', 'po_supplier', '=', 's_id')->leftJoin('users', 'po_officer', '=', 'id')->orderBy('po_tanggal', 'DESC');

       // Filter berdasarkan tanggal dan keyword
       $po_status = $req->po_status;
       $po_status = $po_status != null ? $po_status : '';
       $keyword = $req->keyword;
       $keyword = $keyword != null ? $keyword : '';
       $tgl_awal = $req->tgl_awal;
       $tgl_awal = $tgl_awal != null ? $tgl_awal : '';
       $tgl_akhir = $req->tgl_akhir;
       $tgl_akhir = $tgl_akhir != null ? $tgl_akhir : '';
       if($tgl_awal != '' && $tgl_akhir != '') {
        $tgl_awal = preg_replace('/(\d+)[-\/](\d+)[-\/](\d+)/', '$3-$2-$1', $tgl_awal);
        $tgl_akhir = preg_replace('/(\d+)[-\/](\d+)[-\/](\d+)/', '$3-$2-$1', $tgl_akhir);
        $rows = $rows->whereBetween('po_tanggal', array($tgl_awal, $tgl_akhir));
       }

       if($keyword != '') {
        $rows = $rows->where('po_code', 'LIKE', DB::raw("'%$keyword%'"));

       }
       if($po_status != '') {
        $rows = $rows->where('po_status', $po_status);
       }

       $rows = $rows->select('po_id','po_status', 'po_officer', 'po_code', 'po_supplier','po_status_po', 's_name', 'name', DB::raw("DATE_FORMAT(po_tanggal_approve, '%d-%m-%Y') AS po_tanggal_approve_label"), DB::raw("DATE_FORMAT(po_tanggal, '%d-%m-%Y') AS po_tanggal_label"), DB::raw("CASE po_status WHEN 'WT' THEN 'Waiting' WHEN 'AP' THEN 'Disetujui' WHEN 'NAP' THEN 'Tidak Disetujui' END AS po_status_label"), DB::raw("CASE po_status_po WHEN 'NA' THEN 'Belum Aktif' WHEN 'A' THEN 'PO Aktif' WHEN 'NAP' THEN 'Tidak Disetujui' END AS po_status_po_label"))->get();
       

       $res = array('data' => $rows);
       return response()->json($res);
    }

    function delete_d_purchase_order($po_id) {
      
      if($po_id != '') {
        
        DB::beginTransaction();
        try {
          $d_purchase_order = d_purchase_order::where('po_id', $po_id);
          $d_purchase_order->delete();
          $d_purchase_order_dt = d_purchase_order_dt::where('podt_purchase_order', $po_id)->delete();

          DB::commit();
          $res = array('status' => 'sukses' );
        }
        catch(\Exception $e) {
          DB::rollback();
          
          $res = array('status' => 'Error. ' . $e);
        }
      }
      else {
        $res = array('status' => 'ID Kosong');
      }

      return response()->json($res);
    }

   function insert_d_purchase_order(Request $request){
      $po_tanggal = $request->po_tanggal;
      $po_tanggal = $po_tanggal != null ? $po_tanggal : '';
      $po_tanggal = preg_replace('/([0-9]+)([\/-])([0-9]+)([\/-])([0-9]+)/', '$5-$3-$1', $po_tanggal);

      $po_purchase_plan = $request->po_purchase_plan;
      $po_purchase_plan = $po_purchase_plan != null ? $po_purchase_plan : '';
      $po_officer = $request->po_officer;
      $po_officer = $po_officer != null ? $po_officer : '';
      $po_supplier = $request->po_supplier;
      $po_supplier = $po_supplier != null ? $po_supplier : '';
      $po_cabang = 1;
      DB::beginTransaction();
      try {

        $init = d_purchase_order::select(DB::raw('IFNULL(MAX(po_id), 0) + 1 AS po_id'))->first();
        $po_id = $init->po_id;
        // membuat kode purchase order
        $firstdate = date('Y-m-01', strtotime($po_tanggal));
        $enddate = date('Y-m-31', strtotime($po_tanggal));
        $init2nd = d_purchase_order::select( DB::raw('IFNULL(COUNT(po_id) + 1, 1) AS order_number') )->whereBetween('po_tanggal', [$firstdate, $enddate])->first();
        $order_number = $init2nd->order_number; 
        $po_code = DB::raw("(SELECT CONCAT('PO/', DATE_FORMAT('$po_tanggal', '%m%y'), '/', LPAD($order_number, 4, '0')))");
        $grand_total = 0;
        
        $d_purchase_order_dt = new d_purchase_order_dt();

        $podt_item = $request->podt_item;
        $podt_item = $podt_item != null ? $podt_item : array();
        if( count($podt_item) > 0 ) {
            $podt_qty = $request->podt_qty;
            $podt_qty = $podt_qty != null ? $podt_qty : array();
            $podt_qty = $request->podt_qty;
            $podt_qty = $podt_qty != null ? $podt_qty : array();
            $podt_prev_price = $request->podt_prev_price;
            $podt_prev_price = $podt_prev_price != null ? $podt_prev_price : array();
            $podt_satuan = $request->podt_satuan;
            $podt_satuan = $podt_satuan != null ? $podt_satuan : array();

            $units = [];
            for($x = 0; $x < count($podt_item);$x++) {
                $prev_price = $podt_prev_price[$x];
                $prev_price = preg_replace('/\D/', '', $prev_price);
                $unit = [
                  'podt_detailid' => $x + 1,
                  'podt_purchase_order' => $po_id,
                  'podt_item' => $podt_item[$x],
                  'podt_qty' => $podt_qty[$x],
                  'podt_prev_price' => $prev_price,
                  'podt_satuan' => $podt_satuan[$x]
                ];
                array_push($units, $unit);
            }

            d_purchase_order_dt::insert($units);            
        }

        d_purchase_order::insert([
          'po_code' => $po_code,
          'po_officer' => $po_officer,
          'po_id' => $po_id,
          'po_purchase_plan' => $po_purchase_plan,
          'po_method' => $po_method,
          'po_tanggal' => $po_tanggal,
          'po_supplier' => $po_supplier,
          'po_status' => 'WT'
        ]);

        d_purchase_plan::where('pp_id', $po_purchase_plan)->update([
          'pp_status_po' => 'A'
        ]);

        DB::commit();
        $status = 'sukses';
      }
      catch(\Exception $e) {
        DB::rollback();
        $status = 'gagal. ' . $e;
      }
      $res = array( 'status' => $status);

      return response()->json($res);
    }
    
    function update_d_purchase_order(Request $request){
      $po_id = $request->po_id;
      $po_id = $po_id != null ? $po_id : '';  

      if($po_id != '') {
        DB::beginTransaction();
        try {

          $podt_item = $request->podt_item;
          $podt_item = $podt_item != null ? $podt_item : array();
          if( count($podt_item) > 0 ) {

              $podt_qty = $request->podt_qty;
              $podt_qty = $podt_qty != null ? $podt_qty : array();
              // $podt_satuan = $request->podt_satuan;
              // $podt_satuan = $podt_satuan != null ? $podt_satuan : array();
              // $podt_prev_price = $request->podt_prev_price;
              // $podt_prev_price = $podt_prev_price != null ? $podt_prev_price : array();

              $units = array();
              for($x = 0; $x < count($podt_item);$x++) {
                  d_purchase_order_dt::where([
                    ['podt_purchase_order', '=', $po_id],
                    ['podt_item', '=', $podt_item[$x]]
                  ])
                  ->update([
                      'podt_qty' => $podt_qty[$x]
                  ]);
              }
          }
          d_purchase_order_dt::insert($units);

          DB::commit();
          return response()->json(['status' => 'sukses']);
        }
        catch(\Exception $e) {
          DB::rollback();
          return response()->json(['status' => 'Gagal. ' . $e]);
        }  
      }
      else {
        echo 'ID Kosong';
        return false;
      }
      

      return response()->json($res);
    }

    function approve_d_purchase_order(Request $request){
      $po_id = $request->po_id;
      $po_id = $po_id != null ? $po_id : '';  

      if($po_id != '') {
        DB::beginTransaction();
        try {

          $po_status = $request->po_status;
          $po_status = $po_status != null ? $po_status : '';
         
          d_purchase_order::where('po_id', $po_id)->update([
            'po_status' => $po_status,
            'po_tanggal_approve' => date('Y-m-d')
          ]);

          DB::commit();
          return response()->json(['status' => 'sukses']);
        }
        catch(\Exception $e) {
          DB::rollback();
          return response()->json(['status' => 'Gagal. ' . $e]);
        }  
      }
      else {
        $res= [
          'status' => 'gagal.',
          'message' => 'ID Kosong'
        ];
      }
      

      return response()->json($res);
    }
}
