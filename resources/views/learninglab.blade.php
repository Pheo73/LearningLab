@include('layouts/.header')
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

<?php $color = "green" ?>

@include('layouts/banner/.banner_learninglab')

<div class="learninglab">
    <section class="sec-2">
        <h2>ÉQUIPE ENCADRANTE</h2>

        <div class="cards-container">
            <div class="card-learninglab">
                <div class="card-header">
                    <img src="{{ asset('images/Ellipse-2.png') }}" alt="">
                    <span class="color-white">Nom</span>
                    <p class="color-white">Métier</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <img src="{{ asset('images/icon-linkedin.svg') }}" alt="icon linkedin">
                        <p class="color-black">@Linkdin</p>
                    </div>
                    <div class="row">
                        <img src="{{ asset('images/icon-mail.svg') }}" alt="icon mail">
                        <p class="color-black">@mail</p>
                    </div>
                </div>
            </div>
            <div class="card-learninglab">
                <div class="card-header">
                    <img src="{{ asset('images/Ellipse-2.png') }}" alt="">
                    <span class="color-white">Nom</span>
                    <p class="color-white">Métier</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <img src="{{ asset('images/icon-linkedin.svg') }}" alt="icon linkedin">
                        <p class="color-black">@Linkdin</p>
                    </div>
                    <div class="row">
                        <img src="{{ asset('images/icon-mail.svg') }}" alt="icon mail">
                        <p class="color-black">@mail</p>
                    </div>
                </div>
            </div>
            <div class="card-learninglab">
                <div class="card-header">
                    <img src="{{ asset('images/Ellipse-2.png') }}" alt="">
                    <span class="color-white">Nom</span>
                    <p class="color-white">Métier</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <img src="{{ asset('images/icon-linkedin.svg') }}" alt="icon linkedin">
                        <p class="color-black">@Linkdin</p>
                    </div>
                    <div class="row">
                        <img src="{{ asset('images/icon-mail.svg') }}" alt="icon mail">
                        <p class="color-black">@mail</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('layouts/slider/.slider_learninglab')
@extends('layouts/.footer')
