<!-- Alert User -->
@if(Session::has('success'))
<div class="alert alert-success" style="text-align: center;font-family: 'Arimo';color: white;background-color: tomato;height: auto;padding: 5px;">
  {{Session::get('success')}}
</div>
@endif
@include('layouts/.header')

<div class="homepage">
  <div id="overlay"></div>

    <section class="sec-1">

            <h1 class="color-white fadeUp1">LEARNINGLAB</h1>
            <span class="color-white fadeUp2">Au service de vos idées à l'Université Savoie Mont Blanc</span>

        <div class="wave">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                 preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                      class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <section class="sec-2">
        <h2>PRÉSENTATION DU LIEU</h2>

        <div class="cards-container">
            <div class="card-home fadeIn">
                <div class="card-header">
                    <img src="{{ asset('images/learningLab__img.png') }}" alt="">
                </div>
                <div class="card-body">
                    <div class="title">
                        <span class="color-black">LearningLab</span>
                    </div>
                    <p class="color-black">Le LearningLab est un espace dédié au travail collaboratif et à l’innovation pédagogique.</p>
                    <button class="btn-white"><a href="{{ route ('learninglab') }}" class="color-black">En savoir plus</a></button>
                </div>
            </div>
            <div class="card-home fadeIn">
                <div class="card-header">
                    <img src="{{ asset('images/lesBox__img.png') }}" alt="">
                </div>
                <div class="card-body">
                    <div class="title">
                        <span class="color-black">Les Boxes</span>
                    </div>
                    <p class="color-black">Venez travailler dans un espace moderne tout en profitant des équipements mis à votre disposition.</p>
                    <button class="btn-white"><a href="{{ route ('boxes') }}" class="color-black">En savoir plus</a></button>
                </div>
            </div>
            <div class="card-home fadeIn">
                <div class="card-header">
                    <img src="{{ asset('images/fabLab__img.png') }}" alt="">
                </div>
                <div class="card-body">
                    <div class="title">
                        <span class="color-black">Fablab</span>
                    </div>
                    <p class="color-black">Le FabLab met à votre disposition tout l’équipement dont votre projet a besoin pour prendre forme.</p>
                    <button class="btn-white"><a href="{{ route ('fablab') }}" class="color-black">En savoir plus</a></button>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-3">

        <div class="left">
            <div class="content">
                <h2 class="color-white">PROJETS</h2>
                <span class="color-white">Découvrez nos projets</span>
                <p class="color-white">Vous ne savez pas quoi faire de votre temps libre et vous aimeriez mener à bien un projet ? Venez découvrir nos projets et trouvez l'inspiration !</p>
                <button class="btn-green"><a href="{{ route ('project') }}" class="color-white">Allez-y</a></button>
            </div>
        </div>
        <div class="right">
          <div class="booking-popup">
            <div class="form-popup" id="popupForm">
              <form class="form-container" method="post" action="{{ route('home.save')}}">
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

                <button type="submit" name="send"  value="Send" class="btn">Réserver</button>
              </form>
            </div>
          </div>
            <div class="content">
                <h2 class="color-black">Réservation</h2>
                <span class="color-black">Réservez votre lieu !</span>
                <p class="color-black">Vous voulez profiter d’un espace de travail moderne ? Le LearningLab met à votre disposition tout ce dont votre projet à besoin ! </p>
                <button class="btn-green color-white showAlert" onclick="openForm()">Je réserve</button>
            </div>
        </div>
    </section>
</div>
@extends('layouts/.footer')
