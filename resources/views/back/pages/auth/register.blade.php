@extends('back.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Register')
@section('content')
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
<div class="page page-center">
      <div class="container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark"><img src="./back/static/logo.svg" height="36" alt=""></a>
        </div>
        @livewire('author-register-form')
        <div class="text-center text-muted mt-3">
          Déjà un compte ? <a href="{{ route ('author.login') }}" tabindex="-1">Connectez vous !</a>
        </div>
      </div>
    </div>

@endsection
