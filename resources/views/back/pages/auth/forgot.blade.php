@extends('back.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Forgot password')
@section('content')

<div class="page page-center" style="font-family: Arimo, sans-serif;">
      <div class="container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark"><img src="./back/static/logo.svg" height="36" alt=""></a>
        </div>
          @livewire('author-forgot-form')
        <div class="text-center text-muted mt-3">
          Oubliez ça, <a href="{{ route ('author.login') }}">renvoyez moi</a> sur la page de connexion.
        </div>
      </div>
    </div>

@endsection
