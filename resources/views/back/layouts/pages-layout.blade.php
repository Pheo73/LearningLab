
<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta5
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('pageTitle')</title>
    <!-- CSS files -->
    <base href="/">
    <link href="./back/dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="./back/dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="./back/dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="./back/dist/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('back/dist/libs/ijabo/ijabo.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back/dist/libs/ijaboCropTool/ijaboCropTool.min.css') }}">
    @stack('stylesheets')
    @livewireStyles
    <link href="./back/dist/css/demo.min.css" rel="stylesheet"/>
    <link rel="icon" type="image/png" href="{{ asset('images/favicons.png') }}" />
  </head>
  <body >
    <div class="wrapper">
      @include('back.layouts.inc.header')
      <div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
            @yield('pageHeader')
        </div>
        <div class="page-body">
          <div class="container-xl">
            @yield('content')
          </div>
        </div>
        @include('back.layouts.inc.footer')
      </div>
    </div>

    <!-- Libs JS -->
    <script src="{{ asset('back/dist/libs/jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('back/dist/libs/ijabo/ijabo.min.js')}}"></script>
    <script src="{{ asset('back/dist/libs/ijaboCropTool/ijaboCropTool.min.js')}}"></script>
    <script src="./back/dist/libs/apexcharts/dist/apexcharts.min.js"></script>
    <!-- Tabler Core -->
    <script src="./back/dist/js/tabler.min.js"></script>
    @stack('scripts')
    @livewireScripts
    <script>
    window.addEventListener('showToastr',function(event){
      toastr.remove();
      if(event.detail.type=='info'){
        toastr.info(event.details.message);
      }else if(event.detail.type=='success'){
        toastr.success(event.details.message);
      }else if(event.detail.type=='error'){
        toastr.error(event.details.message);
      }else if(event.detail.type=='warning'){
        toastr.warning(event.details.message);
      }else{
        return false;
      }
    });
    </script>
    <script src="./back/dist/js/demo.min.js"></script>
    <script type="text/javascript">
    function action() {
     var my_pass = document.getElementById("pass");
     if (my_pass.type === "password") {
       my_pass.type = "text";
     } else {
       my_pass.type = "password";
     }
    }
    </script>

  </body>
</html>
