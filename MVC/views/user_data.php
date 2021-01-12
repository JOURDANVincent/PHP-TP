<!-- Résumé de formulaire -->


<div class="container">
    <div class="row justify-content-center align-items-center">

        <div class="col-12 col-lg-6 pt-3 bgData mt-3">
            <div class="col-12">

                <h1 class="text-center mt-3 mb-5 glitch">Validation du formulaire</h1>

                <h2 class="pl-3">Identité</h2>
                <div class="pl-3"><<?= $firstName.' '.$lastName ?></div>
                <div class="pl-3"><?= 'né le '.$birthday.' en '.$birthCountry ?></div>
                <div class="pl-3"><?= 'nationalité '.$nationality ?></div>
                <hr>

                <h2>Adresse</h2>
                <div class="pl-3"><?= $streetNumber.' '.$streetType.' '.$streetName ?></div>
                <div class="pl-3"><?= $postalCode.' '.$city ?></div>
                <hr>

                <h2>Contact</h2>
                <div class="pl-3"><?= $mail ?></div>
                <div class="pl-3"><?= $phone ?></div>
                <hr>

                <h2>Diplôme</h2>
                <div class="pl-3"><?= $diplome ?></div>
                <hr>

                <h2>Pôle emploi</h2>
                <div class="pl-3"><?= $poleNumber ?></div>
                <hr>

                <h2>Divers</h2>
                <div class="pl-3"><?= $poleNumber ?></div>
                <hr>

                <h2>Liens vers site web / projet</h2>
                <div class="pl-3"><?= $urlLink ?></div>
                <hr>

                <h2>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</h2>
                <div class="pl-3"><?= $whichHero ?></div>
                <div class="pl-3"><?= $whyThisHero ?></div>
                <hr>

                <h2>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</h2>
                <div class="pl-3"><?= $hackExperience ?></div>
                <hr>

                <h2>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</h2>
                <div class="pl-3"><?= $informatique ?></div> 

            </div>
        </div>

        <!------------------------------------------ submit ------------------------------------------------>
        <form class="d-flex flex-row justify-content-center text-center my-5">
            <!-- <input class="btn bg4 px-5 mx-2" type="button" name="back" value="retour"> -->
            <a href="index.php" class="btn bg4 px-5 mx-2">retour</a>
            <input id="sendFormToMail" type="button" class="btn bg3 px-5 mx-2" value="envoyer">
            <!-- <a href="index.php?sendForm='envoi en cours..'" id="sendFormToMail" class="btn bg3 px-5 mx-2">envoyer</a> -->
        </form>

    </div>
</div>


