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
        $customer_id  = $request->customer_id;
        $name  = $request->name;
        $tracking_product_kpi = DB::select("select * from users where email = '$customer_id' AND name = '$name'");

     	 return $tracking_product_kpi;


    }

}

