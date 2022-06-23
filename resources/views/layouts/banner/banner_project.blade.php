<div class="container"
    <?php if ($color) { ?>
     style="background: url('/images/wave-<?php echo $color ?>.png') center/cover no-repeat;">
    <?php } ?><!-- dinamyc wave background -->

    <section class="sec-1">
        <div class="left fadeRight2">
            <div class="content">
                <img src="{{ asset('images/container-left.png') }}" alt="learninglab">
            </div>
        </div>
        <div class="right fadeLeft2">
            <div class="content">
                <h2 class="color-white">LearningLab</h2>
                <span class="color-white">Innovez, Créez, Réalisez</span>
                <p class="color-white">Le LearningLab est un espace dédié au travail collaboratif et à l’innovation pédagogique. Situé à l’entrée de l’IUT de Chambéry, il accueille les étudiants souhaitant mener à bien un projet tout en bénéficiant d’un espace de travail moderne et d’un accompagnement personnalisé.</p>
            </div>
        </div>
    </section>

    <!-- white wave -->
    <div class="wave">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
             preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                  class="shape-fill">
            </path>
        </svg>
    </div>
</div>