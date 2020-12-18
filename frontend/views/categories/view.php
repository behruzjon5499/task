<?php

/* @var $this yii\web\View */

use common\helpers\LanguageHelper;

/* @var $categories \common\models\Services */
/* @var $products \common\models\Services */


?>

<section class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs sec-color">
        <div class="breadcrumbs-image">
            <img src="/images/client.jpg" alt="Breadcrumbs Image">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title"><?= Yii::t('app', 'Kategoriyalar') ?></h1>
                        <ul class="breadcrumbs-subtitle">
                            <li><a href="<?= \yii\helpers\Url::to(['site/index']) ?>"><i class="fa fa-home"></i>  <?= Yii::t('app', 'Bosh sahifa') ?></a></li>
                            <li><?= Yii::t('app', 'Kategoriyalar') ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="rs-project-style" class="rs-project-style pt-100 pb-100">
        <div class="container">
            <div id="how-we-work" class="how-we-work defult-style sec-spacer">
                <div class="container">
                    <div class="sec-title extra-none">
                        <h3><?= Yii::t('app', '')?></h3>
                    </div>
                    <div class="work-sec-gallery">
                        <div class="row">
                            <?php foreach ($products as $product): ?>
                                <div class="col-lg-4 col-md-6 mb-30">
                                    <div class="work-column">
                                        <div class="common-box">
                                            <a href="<?= \yii\helpers\Url::to(['products/view' , 'id' => $product->id]) ?>"><img src="/uploads/products/<?= $product->photo?>" style="height: 250px;" alt="Work Section Image"></a>
                                        </div>
                                        <div class="work-gallery-caption">
                                            <h4><a href="<?= \yii\helpers\Url::to(['products/view' , 'id' => $product->id]) ?>"><?= LanguageHelper::get($product, 'title') ?></a></h4>
                                            <p><?= \yii\helpers\StringHelper::truncate(LanguageHelper::get($product, 'description'), 150, '...'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-style-wrap">
                <h3 class="p-style-title"><?= Yii::t('app', 'Boshqa kategoriyalar') ?></h3>
                <div class="row">
                    <?php foreach($categories as $c):?>
                        <div class="col-md-4 col-sm-12 mb-sm-30">
                            <div class="item-grid">
                                <div class="image-icon">
                                    <img src="/uploads/services/<?=$c->photo?>" style="width: 100%; height: 250px;" alt="Project Image">
                                    <a class="image-popup" href="/uploads/categories/<?=$c->photo?>"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</section>
