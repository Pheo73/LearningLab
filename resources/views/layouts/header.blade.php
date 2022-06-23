<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearningLab</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/circular-revealer@0.0.8/dist/index.iife.js" defer></script>
    <link rel="icon" type="image/png" href="{{ asset('images/favicons.png') }}" />
</head>
<body class="bg-gray-700">
    <header>
        <div class="logo">
            <a href="{{ route ('home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="logo learning lab"/>
            </a>
        </div>

        <div>
            <button class="header__button nav-btn-js" type="button"></button>
            <nav class="header__nav nav-js" data-active="false" style="text-decoration:none;">
                <ul class="header__menu">
                    <ul id="menu-menu-header" class="header__menu">
                        <li id="menu-item-173" class="header__menu-item"><a href="{{ route ('home') }}" aria-current="page">Accueil</a></li>
                        <li id="menu-item-177" class="header__menu-item"><a href="{{ route ('learninglab') }}">LearningLab</a></li>
                        <li id="menu-item-176" class="header__menu-item"><a href="{{ route ('fablab') }}">FabLab</a></li>
                        <li id="menu-item-174" class="header__menu-item"><a href="{{ route ('boxes') }}">Boxes</a></li>
                        <li id="menu-item-178" class="header__menu-item"><a href="{{ route ('project') }}">Project</a></li>
                        <li id="menu-item-178" class="header__menu-item"><a href="{{ route ('author.login') }}">Mon espace</a></li>
                    </ul>
                </ul>
            </nav>
        </div>
    </header>
    <script>
// header
document.addEventListener("DOMContentLoaded", () => {
    const revealerNav = window.revealer({
        revealElementSelector: ".nav-js",
        options: {
            anchorSelector: ".nav-btn-js",
        },
    });

    const actionBtn = document.querySelector(".nav-btn-js");
    actionBtn.addEventListener("click", () => {
        if (!revealerNav.isRevealed()) {
            revealerNav.reveal();
            actionBtn.setAttribute("data-open", true);
        } else {
            revealerNav.hide();
            actionBtn.setAttribute("data-open", false);
        }
    });
});


const btn = document.querySelector('.name');

function  showAlert() {
    btn.onclick = alert('Cette fonctionnalité est à venir !');
};

function action() {
 var my_pass = document.getElementById("pass");
 if (my_pass.type === "password") {
   my_pass.type = "text";
 } else {
   my_pass.type = "password";
 }
}

function action2() {
 var my_pass2 = document.getElementById("pass2");
 if (my_pass2.type === "password") {
   my_pass2.type = "text";
 } else {
   my_pass2.type = "password";
 }
}

function openForm() {
document.getElementById("popupForm").style.display = "block";
document.getElementById("overlay").style.display = "block";
}
function closeForm() {
document.getElementById("popupForm").style.display = "none";
document.getElementById("overlay").style.display = "none";

}
    </script>
