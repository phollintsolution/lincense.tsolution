<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Spatie\Permission\Models\Permission;

class ManageSubcribeController extends Controller
{
   function __construct()
    {
         $this->middleware('permission:managesubcribe-list');
         $this->middleware('permission:managesubcribe-create', ['only' => ['create','store']]);
         $this->middleware('permission:managesubcribe-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:managesubcribe-delete', ['only' => ['destroy']]);
    }

    function index()
    {
    	return view("managesubcribe.index");
    }
    function create()
    {
    	return view("managesubcribe.create");
    }
}

