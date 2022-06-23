<div class="container-slider"
    <?php if ($color) { ?>
     style="background: url('/images/slider-wave-<?php echo $color ?>.png') center/cover no-repeat;">
    <?php } ?><!-- dinamyc wave background -->


    <h2>PROJET RÉCENT</h2>
    <div id="main">

        <div id="slider">


                    <div class="card front card-slider">
                        <div class="header">
                            <img src="{{ asset('images/learningLab__img-1.png') }}">
                        </div>
                        <div class="body">
                            <span>Titre Projet</span>
                            <p>Startup Framework works fine on devices supporting Retina Desplay. Feel the clarity!</p>
                        </div>
                    </div>


                    <div class="card left card-slider">
                        <div class="header">
                            <img src="{{ asset('images/learningLab__img-1.png') }}">
                        </div>
                        <div class="body">
                            <span>Projet</span>
                            <p>Startup Framework works fine on devices supporting Retina Desplay. Feel the clarity!</p>
                        </div>
                    </div>



                    <div class="card right card-slider">
                        <div class="header">
                            <img src="{{ asset('images/learningLab__img-1.png') }}">
                        </div>
                        <div class="body">
                            <span>Projet</span>
                            <p>Startup Framework works fine on devices supporting Retina Desplay. Feel the clarity!</p>
                        </div>
                    </div>

        </div>
        <div class="btn-container">
            <span id="next">Suivant</span>
            <span id="prev">Précédent</span>
        </div>
    </div>
</div>

