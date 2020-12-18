<?php

/* @var $this yii\web\View */

use common\helpers\LanguageHelper;

/* @var $news \common\models\News */
/* @var $new \common\models\News */


?>


<section class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs sec-color">
        <div class="breadcrumbs-image">
            <img src="/images/library.jpeg" alt="Breadcrumbs Image">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title">Project Standard</h1>
                        <ul class="breadcrumbs-subtitle">
                            <li><a href="<?= yii\helpers\Url::to(['site/index']) ?>"><i class="fa fa-home"></i>  Home</a></li>
                            <li>Project Standard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rs-project-style" class="rs-project-style pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 mb-md-30">
                    <div class="project-desc">
                        <h3><?= LanguageHelper::get($new, 'title') ?></h3>
                        <p><?= LanguageHelper::get($new, 'description') ?></p>
                             </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="project-img">
                        <img src="/uploads/news/<?=$new->photo?>" alt="Project Image">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>