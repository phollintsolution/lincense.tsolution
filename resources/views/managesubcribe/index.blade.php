@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right">
               
               @can('managesubcribe-create')
                <a class="btn btn-success" href="{{ route('managesubcribe.create') }}"> Create New Manage Sub</a>
                @endcan
                
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
	   
	    <tr>
	        <td>1</td>
	        <td>ssssss</td>
	        <td>ssss</td>
	        <td>dddd</td>   
	    </tr>
	   
    </table>

    

@endsection