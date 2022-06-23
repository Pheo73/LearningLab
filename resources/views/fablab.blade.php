@include('layouts/.header')
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<?php $color = "yellow" ?>
@include('layouts/banner/.banner_fablab')

<div class="fablab">
<div id="overlay"></div>
    <div class="sec-2">
        <h2>MATÉRIEL</h2>
        <div class="grid">
                    <div class="materiel fadeIn">
                        <img src="{{ asset('images/3Dprinter.png') }}" alt="">
                        <p>Imprimante 3D</p>
                    </div>
                    <div class="materiel fadeIn">
                        <img src="{{ asset('images/3Dprinter.png') }}" alt="">
                        <p>Imprimante 3D</p>
                    </div>
                    <div class="materiel fadeIn">
                        <img src="{{ asset('images/3Dprinter.png') }}" alt="">
                        <p>Imprimante 3D</p>
                    </div>
                    <div class="materiel fadeIn">
                        <img src="{{ asset('images/3Dprinter.png') }}" alt="">
                        <p>Imprimante 3D</p>
                    </div>
                    <div class="materiel fadeIn">
                        <img src="{{ asset('images/3Dprinter.png') }}" alt="">
                        <p>Imprimante 3D</p>
                    </div>
                    <div class="materiel fadeIn">
                        <img src="{{ asset('images/3Dprinter.png') }}" alt="">
                        <p>Imprimante 3D</p>
                    </div>
                    <div class="materiel fadeIn">
                        <img src="{{ asset('images/3Dprinter.png') }}" alt="">
                        <p>Imprimante 3D</p>
                    </div>
                    <div class="materiel fadeIn">
                        <img src="{{ asset('images/3Dprinter.png') }}" alt="">
                        <p>Imprimante 3D</p>
                    </div>
        </div>
    </div>

    <div class="sec-3">
        <div class="left">
            <div class="content">
                <h2 class="color-white">RÉSERVEZ VOTRE FABLAB !</h2>
                <p class="color-white">Vous avez besoin du matériel proposé par le FabLab ? Vous n’avez qu’à réserver !</p>
                <button class="btn-border-white showAlert color-white" onclick="openForm()">Réserver</button>
            </div>
        </div>

        <div class="right">
          <div class="booking-popup">
            <div class="form-popup" id="popupForm">
              <form class="form-container" method="post" action="{{ route('fablab.save')}}">
                @csrf
                <button type="button" class="btn cancel" onclick="closeForm()" style="background-color: white;color: black;width: 5%;padding: 0;float: right;">X</button>
                <h2>Réservation</h2>

                <label for="name">
                  <strong>Nom</strong>
                </label>
                <input type="text" id="nom" placeholder="Nom" name="name" required />

                <label for="firstname">
                  <strong>Prénom</strong>
                </label>
                <input type="text" id="firstname" placeholder="Prénom" name="firstname"  required />

                <label for="email">
                  <strong>E-mail</strong>
                </label>
                <input type="text" id="email" placeholder="Email" name="email"  required />

                <label for="text">
                  <strong>Projet</strong>
                </label>
                <textarea type="text" id="message" placeholder="Décrivez votre projet en quelques lignes..." name="message" required ></textarea>

                <label for="date" >
                  <strong>Date</strong>
                </label>
                <input type="date" id="date" placeholder="jj/mm/aa" name="date" style="margin-bottom:22px;" required >


                <button type="submit" name="send" value="Send" class="btn">Réserver</button>
              </form>
            </div>
          </div>
            <img src="{{ asset('images/fablab_booked.png') }}" alt="">
        </div>
    </div>
</div>



@include('layouts/slider/.slider_fablab')
@extends('layouts/.footer')
