<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Role;
use Illuminate\Support\Facades\Input;

class AController extends Controller
{
    public function AController(request $request){
        $email  = $request->email;
        $current_date  = $request->current_date;
        
        $tracking_product_kpi = DB::select("select * from tsolution_clients where email = '$email' 
        	AND expired_date >= '$current_date' ");
     	 return $tracking_product_kpi;
    }

}

