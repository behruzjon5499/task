<?php

/* @var $this yii\web\View */

use common\helpers\LanguageHelper;

/* @var $services \common\models\Services */
/* @var $service \common\models\Services */


?>

<section class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs sec-color">
        <div class="breadcrumbs-image">
            <img src="/images/client.jpg" alt="Breadcrumbs Image">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title"><?= Yii::t('app', 'Xizmatlar') ?></h1>
                        <ul class="breadcrumbs-subtitle">
                            <li><a href="<?= \yii\helpers\Url::to(['site/index']) ?>"><i class="fa fa-home"></i>  <?= Yii::t('app', 'Bosh sahifa') ?></a></li>
                            <li><?= Yii::t('app', 'Xizmatlar') ?></li>
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
                        <h3><?= LanguageHelper::get($service, 'title') ?></h3>
                        <p><?= LanguageHelper::get($service, 'description') ?></p>
                   </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="project-img">
                        <img src="/uploads/services/<?=$service->photo?>" alt="Project Image">
                    </div>
                </div>
            </div>

            <div class="p-style-wrap">
                <h3 class="p-style-title"><?= Yii::t('app', 'Boshqa xizmatlar') ?></h3>
                <div class="row">
                    <?php foreach($services as $s):?>
                    <div class="col-md-4 col-sm-12 mb-sm-30">
                        <div class="item-grid">
                            <div class="image-icon">
                                <img src="/uploads/services/<?=$s->photo?>" alt="Project Image">
                                <a class="image-popup" href="/uploads/services/<?=$s->photo?>"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
               <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</section>
