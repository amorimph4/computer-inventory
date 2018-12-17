@extends('admin.layout.page')

@section('content')
	
    {{$Controller ?? ''}}
    <div class="row">
    	<h3 style="float: left;">{{ $title  }} </h3>
    	
 	</div>
 	
    	<div class="clearfix"></div>
	    
	        <div class="panel-body">
	            {{ $slot }}
	        </div>
    
	    {{$include ?? ''}}
	    {{$edit ?? ''}}
	    {{$confirm ?? ''}}
	    {{$delete ?? ''}}
    {{$EndController ?? ''}}


@endsection