<?php

/* @var $abouts \common\models\About */

use common\helpers\LanguageHelper;

?>

<section id="about" style="margin-top: 50px;">
    <div class="container">

        <header class="section-header">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat.</p>
        </header>

        <div class="row about-cols">
            <?php foreach ($abouts as $about): ?>

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-col">
                        <div class="img">
                            <img src="/uploads/about/<?= $about->photo ?>" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-list-outline"></i></div>
                        </div>

                        <h2 class="title"><a href="#" ><?= LanguageHelper::get($about, 'title') ?></a></h2>

                        <p>
                            <?= LanguageHelper::get($about, 'description') ?>
                        </p>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>

    </div>
</section>