<body>
@include('layouts/.header')
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<?php $color = "yellow" ?>
@include('layouts/banner/.banner_connexion')



@extends('layouts/.footer')
</body>
