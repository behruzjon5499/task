<?php

/* @var $this yii\web\View */
/* @var $model Feedback */

$this->title = Yii::t('app', 'Create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contacts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

use common\models\Feedback;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success">
        <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>

<div class="main-content">
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs sec-color">
            <div class="breadcrumbs-image">
                <img src="/images/contact.jpg" alt="Breadcrumbs Image">
                <div class="breadcrumbs-inner">
                    <div class="container">
                        <div class="breadcrumbs-text">
                            <h1 class="breadcrumbs-title"><?= Yii::t('app', 'Contacts') ?></h1>
                            <ul class="breadcrumbs-subtitle">
                                <li><a href="<?= Url::to(['site/index']) ?>"><i class="fa fa-home"></i> <?= Yii::t('app', 'Home') ?></a></li>
                                <li><?= Yii::t('app', 'Contacts') ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Contact Start -->
        <section id="rs-contact" class="rs-contact contact-section gray-color pb-100">
            <!-- About Icon Start -->
            <div id="rs-about-icon" class="rs-about-icon pt-100 pb-80">
                <div class="container">
                    <div class="icon-section">
                        <div class="single-icon">
                            <div class="icon-part">
                                <a href="#"><i class="fa fa-phone"></i></a>
                            </div>
                            <div class="icon-text">
                                <h3 class="icon-title">Call Us</h3>
                                <a class="icon-info" href="tel:+(+088)589-8745">+99890 951-54-99</a>
                            </div>
                        </div>
                        <div class="single-icon">
                            <div class="icon-part">
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                            <div class="icon-text">
                                <h3 class="icon-title">Mail Us</h3>
                                <a class="icon-info" href="mailto:support@rstheme.com">behruztoxirov909515499@gmail.com</a>
                            </div>
                        </div>
                        <div class="single-icon">
                            <div class="icon-part">
                                <a href="#"><i class="fa fa-fax"></i></a>
                            </div>
                            <div class="icon-text">
                                <h3 class="icon-title">Fax</h3>
                                <p>+3301-341-0476</p>
                            </div>
                        </div>
                        <div class="single-icon margin-0">
                            <div class="icon-part">
                                <a href="#"><i class="fa fa-map-marker"></i></a>
                            </div>
                            <div class="icon-text after-none">
                                <h3 class="icon-title">Address</h3>
                                <p>Buxoro viloyat gijduvon tuman 21 ASR shoh ko'chasi </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Icon End -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-form">
                            <div id="form-messages"></div>
                            <?php $form = ActiveForm::begin([
                                'id' => 'feedback-form',
//                            'options' => ['class' => 'form-horizontal'],
                            ]); ?>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-field">
                                        <?= $form->field($model, 'full_name')->textInput(['maxlength' => 255, 'class' => '', 'style' => 'widht:10px;', 'heidht:200px !important;', 'placeholder' => Yii::t('app', 'Full Name')])->label(false); ?>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="form-field">
                                        <?= $form->field($model, 'phone_email')->textInput(['maxlength' => 255, 'class' => '', 'style' => 'widht:10px;', 'heidht:200px !important;', 'placeholder' => Yii::t('app', 'Phone or Email')])->label(false); ?>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-field">
                                        <?= $form->field($model, 'massage')->textarea(['rows' => 8, 'class' => '', 'placeholder' => Yii::t('app', 'Message')])->label(false); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'readon']) ?>
                            </div>

                            <?php ActiveForm::end() ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
