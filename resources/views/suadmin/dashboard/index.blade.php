@extends('suadmin.layout')

@section('title') Dashboard @stop

@section('link') 
@stop

@section('script_files')   
<!-- Custom Theme Scripts -->
<script src="{{ URL::asset('superadmin/build/js/custom.min.js')}}"></script>   
@stop

@section('content')
<!-- Main content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-users"></i></div>
                <div class="count">179</div>
                <h3>Total Admin Users</h3>               
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-link"></i></div>
                <div class="count">100</div>
                <h3>Total Affliates</h3>               
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-group"></i></div>
                <div class="count">21079</div>
                <h3>Total Students</h3>              
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-list"></i></div>
                <div class="count">2179</div>
                <h3>Total Shedules</h3>               
            </div>
        </div>
    </div>
    <!-- /top tiles -->        
</div>
<!-- /.content -->
@stop