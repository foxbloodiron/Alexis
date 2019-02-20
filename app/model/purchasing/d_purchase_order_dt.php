<?php

namespace Apodt\model\purchasing;

use Illuminate\Database\Eloquent\Model;

use Apodt\Lib\format;


use DB;

use Auth;

use Session;

class d_purchase_order_dt extends Model
{  
    protected $table = 'd_purchase_order_dt';
    const CREATED_AT = 'podtdt_insert';
    const UPDATED_AT = 'podtdt_update';
    
}
	
	