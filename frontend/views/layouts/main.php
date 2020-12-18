<?php

/* @var $this \yii\web\View */

/* @var $content string */

use common\helpers\LanguageHelper;
use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

$lang = Yii::$app->session->get('lang');
if ($lang == '') $lang = 'uz';
$link = 'link_' . $lang;
$title = 'title_' . $lang;
$text = 'text_' . $lang;
$name = 'name_' . $lang;
$descr = 'descr_' . $lang;
$link = 'link_' . $lang;
$material = 'material_' . $lang;
AppAsset::register($this);
$categories = \common\models\Categories::find()->all();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="/images/logoo.png">
    <link rel="shortcut icon" type="image/x-icon" href="/images/logoo.png">


    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody()
?>
<body class="defult-home">

<header id="rs-header" class="rs-header">
    <!-- Toolbar Start -->
    <div class="toolbar-area hidden-md">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="toolbar-contact">
                        <ul>
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:info@yourwebsite.com">behruztoxirov909515499@gmail.com</a>
                            </li>

                            <li><i class="fa fa-phone"></i><a href="tel:+123456789">+99890 951-54-99</a></li>

                            <li><i class="fa fa-location-arrow"></i>
                                <p>Location H-11,R-20/2,USA</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="toolbar-sl-share">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Toolbar End -->

    <!-- Header Menu Start -->
    <div class="menu-area rs-defult-header menu-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo-area">
                        <a href="<?= \yii\helpers\Url::to(['site/index']) ?>"><img src="/images/logo.png"
                                                                                   alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="main-menu">
                        <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                        <nav class="rs-menu">
                            <ul class="nav-menu">
                                <!-- Home -->
                                <li class="rs-mega-menu current-menu-item menu-item-has-children"><a class="active"
                                                                                                     href="<?= \yii\helpers\Url::to(['site/index']) ?>"><?= Yii::t('app', 'Bosh sahifa') ?></a>
                                </li>
                                <li class="menu-item-has-children"><a
                                            href="<?= \yii\helpers\Url::to(['categories/index']) ?>"><?= Yii::t('app', 'Kategoriyalar') ?>
                                        <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <?php foreach ($categories as $category): ?>
                                            <li><a href="<?= \yii\helpers\Url::to(['categories/view','id'=>$category->id]) ?>"><?= LanguageHelper::get($category, 'title') ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <li class="rs-mega-menu current-menu-item menu-item-has-children"><a class=""
                                                                                                     href="<?= \yii\helpers\Url::to(['products/index']) ?>"><?= Yii::t('app', 'Mahsulotlar') ?></a>
                                </li>
                                <li class="rs-mega-menu current-menu-item menu-item-has-children"><a class=""
                                                                                                     href="<?= \yii\helpers\Url::to(['services/index']) ?>"><?= Yii::t('app', 'Xizmatlar') ?></a>
                                </li>
                                <li class="rs-mega-menu current-menu-item menu-item-has-children"><a class=""
                                                                                                     href="<?= \yii\helpers\Url::to(['news/index']) ?>"><?= Yii::t('app', 'Yangiliklar') ?></a>
                                </li>
                                <li class="rs-mega-menu current-menu-item menu-item-has-children"><a class=""
                                                                                                     href="<?= \yii\helpers\Url::to(['feedback/create']) ?>"><?= Yii::t('app', 'Bog`lanish') ?></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="appointment-cart hidden-md">
                        <ul class="cart">
                            <li class="search"><i class="fa fa-search"></i></li>
                            <li><a id="nav-expander" class="nav-expander"><i class="fa fa-bars fa-lg white"></i></a>
                            </li>
                        </ul>
                        <div class="search-bar">
                            <input type="search" placeholder="Search...">
                            <button type="button"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Menu End -->

    <!-- Canvas Menu start -->
    <nav class="right_menu_togle">
        <div class="close-btn"><span id="nav-close" class="text-center"><i class="fa fa-close"></i></span></div>
        <div class="canvas-logo">
            <a href="index.html"><img src="/images/white-logo.png" alt="logo"></a>
        </div>
        <ul class="sidebarnav_menu list-unstyled main-menu">
            <!--Home Menu Start-->
            <li><a href="<?= \yii\helpers\Url::to(['site/index']) ?>"><?= Yii::t('app', 'Bosh sahifa') ?></a></li>
            <!--Home Menu End-->

            <!--About Menu Start-->
            <li><a href="<?= \yii\helpers\Url::to(['site/about']) ?>"><?= Yii::t('app', 'Biz haqimizda') ?></a></li>
            <!--About Menu End-->

            <!--Services Menu Start-->
            <li><a href="<?= \yii\helpers\Url::to(['services/index']) ?>"><?= Yii::t('app', 'Services') ?></a></li>
            <!--Services Menu End-->

            <!--Blog Menu Star-->
            <li><a href="<?= \yii\helpers\Url::to(['news/index']) ?>"><?= Yii::t('app', 'Yangiliklar') ?></a></li>

            <li><a href="<?= \yii\helpers\Url::to(['feedback/create']) ?>"><?= Yii::t('app', 'Bog`lanish') ?></a></li>

        </ul>
        <div class="canvas-contact">
            <h5 class="canvas-contact-title"><?= Yii::t('app', 'Bog`lanish') ?></h5>
            <ul class="contact">
                <li><i class="fa fa-globe"></i>Buxoro viloyat Gijduvon tuman 21 ASR ko'chasi</li>
                <li><i class="fa fa-phone"></i>+99891 951-54-99</li>
                <li><i class="fa fa-envelope"></i><a
                            href="mailto:info@yourcompany.com">behruztoxirov909515499@gmail.com</a></li>
                <li><i class="fa fa-clock-o"></i>09:00 AM - 21:30 PM</li>
            </ul>
            <ul class="social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
    </nav>
    <!-- Canvas Menu end -->
</header>
<?= Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
<?= Alert::widget() ?>
<?= $content ?>

<footer id="rs-footer" class="rs-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 mb-md-30">
                    <div class="about-widget">
                        <a href="<?= \yii\helpers\Url::to(['site/index']) ?>">
                            <img src="images/logo-2.png" alt="Footer Logo">
                        </a>
                        <ul class="footer-address">
                            <li><i class="fa fa-map-marker"></i><a href="#">Hepta pro, New Yourk, NY 254</a></li>
                            <li><i class="fa fa-phone"></i><a href="#">123-456-789</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="#">info@yourdmain.com </a></li>
                            <li><i class="fa fa-clock-o"></i>
                                <p class="mb-0">Opening Hours: 8.30 AM – 7.00 PM</p></li>
                        </ul>
                        <ul class="social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-md-30">
                    <h5 class="footer-title"><?= Yii::t('app', 'So`nggi postlar') ?></h5>
                    <div class="recent-post-widget">
                        <div class="post-item mb-30">
                            <div class="post-image">
                                <img src="images/blog/1.jpg" alt="post image">
                            </div>
                            <div class="post-desc">
                                <a href="#">Business Needs Customers</a>
                                <span><i class="fa fa-calendar"></i> August 7, 2018 </span>
                            </div>
                        </div>

                        <div class="post-item mb-30">
                            <div class="post-image">
                                <img src="images/blog/2.jpg" alt="post image">
                            </div>
                            <div class="post-desc">
                                <a href="#"> Business Structured </a>
                                <span><i class="fa fa-calendar"></i> August 7, 2018 </span>
                            </div>
                        </div>

                        <div class="post-item">
                            <div class="post-image">
                                <img src="images/blog/3.jpg" alt="post image">
                            </div>
                            <div class="post-desc">
                                <a href="#"> Small Business Trends </a>
                                <span><i class="fa fa-calendar"></i> August 7, 2018 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h5 class="footer-title"><?= Yii::t('app', 'Yangiliklar') ?></h5>
                    <!-- Newsletter Start -->
                    <div class="news-info">
                        <p class="news-note white-color">We create WordPress Theme for more than three years. Our team
                            goal to make beautiful theme without bug and optimize.</p>
                    </div>
                    <form class="news-form footer-form">
                        <input type="text" class="form-input" placeholder="Enter Your Email">
                        <button type="submit" class="form-button">
                            <i class="fa fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="ft-bottom-right">
                <div class="footer-bottom-share">
                    <ul>
                        <li class="rs-mega-menu current-menu-item menu-item-has-children"><a class=""
                                                                                             href="<?= \yii\helpers\Url::to(['site/index']) ?>"><?= Yii::t('app', 'Bosh sahifa') ?></a>
                        </li>
                        <li class="rs-mega-menu current-menu-item menu-item-has-children"><a class=""
                                                                                             href="<?= \yii\helpers\Url::to(['products/index']) ?>"><?= Yii::t('app', 'Mahsulotlar') ?></a>
                        </li>
                        <li class="rs-mega-menu current-menu-item menu-item-has-children"><a class=""
                                                                                             href="<?= \yii\helpers\Url::to(['services/index']) ?>"><?= Yii::t('app', 'Xizmatlar') ?></a>
                        </li>
                        <li class="rs-mega-menu current-menu-item menu-item-has-children"><a class=""
                                                                                             href="<?= \yii\helpers\Url::to(['news/index']) ?>"><?= Yii::t('app', 'Yangiliklar') ?></a>
                        </li>
                        <li class="rs-mega-menu current-menu-item menu-item-has-children"><a class=""
                                                                                             href="<?= \yii\helpers\Url::to(['feedback/create']) ?>"><?= Yii::t('app', 'Bog`lanish') ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2018 All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
<div id="scrollUp">
    <i class="fa fa-angle-up"></i>
</div>

</body>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
