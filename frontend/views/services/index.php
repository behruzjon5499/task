<?php

/* @var $this yii\web\View */

use common\helpers\LanguageHelper;

/* @var $services \common\models\Services */

?>


<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs sec-color">
        <div class="breadcrumbs-image">
            <img src="/img/12.jpg" alt="Breadcrumbs Image" style="width: 100%; height: 200px;">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title"><?= Yii::t('app', 'Xizmatlar') ?></h1>
                        <ul class="breadcrumbs-subtitle">
                            <li><a href="<?= \yii\helpers\Url::to(['site/index']) ?>"><i class="fa fa-home"></i> <?= Yii::t('app', 'Bosh sahifa') ?></a></li>
                            <li><?= Yii::t('app', 'Xizmatlar') ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- HOW WE WORK Start -->
    <div id="how-we-work" class="how-we-work defult-style sec-spacer">
        <div class="container">
            <div class="sec-title extra-none">
                <h3><?= Yii::t('app', 'Bizda har xil turdagi maishiy texnikalarga xizmat ko`rsatish') ?></h3>
                <p class="width-70"><?= Yii::t('app', 'Bizda har xil turdagi maishiy texnikalarga xizmat ko`rsatish') ?></p>
            </div>
            <div class="work-sec-gallery">
                <div class="row">
                    <?php foreach ($services as $service): ?>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="work-column">
                                <div class="common-box">
                                    <a href="<?= \yii\helpers\Url::to(['services/view' , 'id' => $service->id]) ?>"><img src="/uploads/services/<?= $service->photo?>" alt="Work Section Image"></a>
                                </div>
                                <div class="work-gallery-caption">
                                    <h4><a href="<?= \yii\helpers\Url::to(['services/view' , 'id' => $service->id]) ?>"><?= LanguageHelper::get($service, 'title') ?></a></h4>
                                    <p><?= \yii\helpers\StringHelper::truncate(LanguageHelper::get($service, 'description'), 150, '...'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>