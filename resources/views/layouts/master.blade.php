<!doctype html>
<html lang="en">
   
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="icon" href={{asset('images/favicon.png')}}>
      <title>Agro - ADRMS</title>
      <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
      <!-- CSS FILES START -->
      <link href={{asset('css/custom.css')}} rel="stylesheet">
      <link href={{asset('css/color.css')}} rel="stylesheet">
      <link href={{asset('css/responsive.css')}} rel="stylesheet">
      <link href={{asset('css/owl.carousel.min.css')}} rel="stylesheet">
      <link href={{asset('css/bootstrap.min.css')}} rel="stylesheet">
      <link href={{asset('css/prettyPhoto.css')}} rel="stylesheet">
      <link href={{asset('css/all.min.css')}} rel="stylesheet">
      <link href={{asset('css/font_awesome_all.css')}} rel="stylesheet">
      <link href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" rel="stylesheet">

      <!-- CSS FILES End -->
   </head>
   <!-- @extends('layouts.app') -->
      <content>
      @yield('content')
      </content>
      <script src={{asset('js/jquery-3.3.1.min.js')}}></script> 
      <script src={{asset('js/jquery-migrate-1.4.1.min.js')}}></script> 
      <script src={{asset('js/popper.min.js')}}></script> 
      <script src={{asset('js/bootstrap.min.js')}}></script> 
      <script src={{asset('js/owl.carousel.min.js')}}></script> 
      <script src={{asset('js/jquery.prettyPhoto.js')}}></script> 
      <script src={{asset('js/isotope.min.js')}}></script> 
      <script src={{asset('js/custom.js')}}></script>
      <script src={{asset('js/font_awesome_all.js')}}></script>
      <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
