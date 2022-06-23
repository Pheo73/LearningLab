@include('layouts/.header')
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<?php $color = "blue" ?>
@include('layouts/banner/.banner_boxes')

<div class="boxes">
<div id="overlay"></div>
    <div class="sec-2">
                <div class="left">
                    <div class="content">
                        <h2 class="color-black">RÉSERVEZ VOTRE BOXE !</h2>
                        <p class="color-black">Venez travailler dans un espace moderne tout en profitant des équipements mis à votre disposition.</p>
                        <button class="btn-blue showAlert color-white" onclick="openForm()">Réserver</button>
                    </div>
                </div>

                <div class="right">
                  <div class="booking-popup">
                    <div class="form-popup" id="popupForm">
                      <form action="" method="post" class="form-container" action="{{route('boxes.save')}}">
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
                        <input type="text" id="firstname" placeholder="Prénom" name="firstname" required />

                        <label for="email">
                          <strong>E-mail</strong>
                        </label>
                        <input type="text" id="email" placeholder="Email" name="email" required />

                        <label for="text">
                          <strong>Projet</strong>
                        </label>
                        <textarea type="text" id="message" placeholder="Décrivez votre projet en quelques lignes..." name="message" required ></textarea>

                        <label for="date" >
                          <strong>Date</strong>
                        </label>
                        <input type="date" id="date" placeholder="jj/mm/aa" name="date" style="margin-bottom:22px;" required />

                        <button type="submit" name="send" value="Send" class="btn">Réserver</button>
                      </form>
                    </div>
                  </div>
                    <img src="{{ asset('images/boxes_booked.png') }}" alt="">
                </div>

    </div>
</div>

@include('layouts/slider/.slider_boxes')

@extends('layouts/.footer')
