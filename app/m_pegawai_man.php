<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_pegawai_man extends Model
{
  protected $table = 'm_pegawai_man';
  protected $primaryKey = 'c_id';
  protected $fillable = [ 'c_id',
                          'c_code',
                          'c_nik',
                          'c_nama',
                          'c_hari_kerja',
                          'c_ktp',
                          'c_ktp_alamat',
                          'c_alamat',
                          'c_lahir',
                          'c_pendidikan',
                          'c_email',
                          'c_hp',
                          'c_agama',
                          'c_nikah',
                          'c_pasangan',
                          'c_anak',
                          'c_bank',
                          'c_rekening',
                          'c_sertification',
                          'c_sertif_tahun',
                          'c_sertif_tempat',
                          'c_tahun_masuk',
                          'c_jabatan_id',
                        ];

  public $incrementing = false;
  public $remember_token = false;
  //public $timestamps = false;
  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';
}
