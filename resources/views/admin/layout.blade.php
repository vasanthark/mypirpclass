<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MypirpClass | Super Admin </title>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('superadmin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ URL::asset('superadmin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ URL::asset('superadmin/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{ URL::asset('superadmin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="{{ URL::asset('superadmin/build/css/custom.min.css')}}" rel="stylesheet">
     @yield('link')
    <style>
            @yield('styles')
    </style>        
   
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
       
        <!-- left sidebar -->
       @include('admin.partials.leftsidebar')         
          
       <!-- header -->
        @include('admin.partials.header')
     
        <!-- page content -->
         @yield('content')        
        <!-- /page content -->

      </div>
    </div>

   <script src="{{ URL::asset('superadmin/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ URL::asset('superadmin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    
    @yield('script_files')
    
    @yield('scripts')
  </body>
</html>
