
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
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/style.css">
    @stack('stylesheets')
    @livewireStyles
    <link href="./back/dist/css/demo.min.css" rel="stylesheet"/>
  </head>
  <body  class=" border-top-wide border-primary d-flex flex-column" style="font-family: Arimo, sans-serif;">
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
 @yield('content')
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./back/dist/js/tabler.min.js"></script>
    @stack('scripts')
    @livewireScripts
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
