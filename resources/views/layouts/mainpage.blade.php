<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta id="token" name="token" value="{{ csrf_token() }}">



  <title>@yield('title')</title>

      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

      <link href="{{URL::to('css/bootstrap.min.css')}}" rel="stylesheet">

      <!-- Custom CSS -->
      <link href="{{URL::to('css/heroic-features.css')}}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
  <link href="{{URL::to('css/mainpage.css')}}" rel="stylesheet">





@yield('styles')
  </head>
  <body>






<div id="riv-vue">

@include('part/indexheader')

      @yield('content')









</div>

    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.3/vue-resource.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.3/socket.io.min.js" charset="utf-8"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>


   <script type="text/javascript">
     var socket = io('http://localhost:3000');
   </script>
   <script type="text/javascript" src="/js/riv.js"></script>








@yield('scripts')

<script src="https://use.fontawesome.com/9a4143e1c6.js"></script>
<script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>

<script src="{{URL::to('js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{URL::to('js/bootstrap.min.js')}}"></script>





  </body>
</html>
