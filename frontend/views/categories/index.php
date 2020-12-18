<?php

/* @var $this yii\web\View */

use common\helpers\LanguageHelper;

/* @var $categories \common\models\Categories */

?>


<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs sec-color">
        <div class="breadcrumbs-image">
            <img src="/img/12.jpg" alt="Breadcrumbs Image" style="width: 100%; height: 200px;">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title"><?= Yii::t('app', 'Kategoriyalar') ?></h1>
                        <ul class="breadcrumbs-subtitle">
                            <li><a href="<?= \yii\helpers\Url::to(['site/index']) ?>"><i class="fa fa-home"></i> <?= Yii::t('app', 'Bosh sahifa') ?></a></li>
                            <li><?= Yii::t('app', 'Kategoriyalar') ?></li>
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
                <h3><?= Yii::t('app', '')?></h3>
            </div>
            <div class="work-sec-gallery">
                <div class="row">
                    <?php foreach ($categories as $category): ?>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="work-column">
                                <div class="common-box">
                                    <a href="<?= \yii\helpers\Url::to(['categories/view' , 'id' => $category->id]) ?>"><img src="/uploads/categories/<?= $category->photo?>" style="height: 250px;" alt="Work Section Image"></a>
                                </div>
                                <div class="work-gallery-caption">
                                    <h4><a href="<?= \yii\helpers\Url::to(['categories/view' , 'id' => $category->id]) ?>"><?= LanguageHelper::get($category, 'title') ?></a></h4>
                                    <p><?= \yii\helpers\StringHelper::truncate(LanguageHelper::get($category, 'description'), 150, '...'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>