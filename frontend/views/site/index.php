<?php

/* @var $this yii\web\View */
/* @var $categories \common\models\Categories */
/* @var $portfolio \common\models\Portfolio */
/* @var $members \common\models\Members */
/* @var $skill \common\models\Skill */
/* @var $abouts \common\models\About */
/* @var $services \common\models\Services */
/* @var $news \common\models\News */
/* @var $lovozimi \common\models\Members */
/* @var $sliders \common\models\Sliders */

/* @var $slayd \common\models\Sliders */


use common\helpers\LanguageHelper;

$this->title = 'Web Corp.uz';

$lang = Yii::$app->session->get('lang');
if ($lang == '') $lang = 'ru';

$title = 'title_' . $lang;
$text = 'text_' . $lang;
$name = 'name_' . $lang;
$descr = 'descr_' . $lang;
$link = 'link_' . $lang;
$material = 'material_' . $lang;

?>

<div class="main-content">
    <!-- Slider Start -->
    <div id="rs-slider" class="rs-slider rs-slider-one">
        <div class="bend niceties">
            <div id="nivoSlider" class="slides">
                <?php foreach ($sliders as $slider): ?>
                    <img src="/uploads/sliders/<?= $slider->photo ?>" alt="" title="#slide-<?= $slider->id ?>"/>
                <?php endforeach; ?>
            </div>
            <?php foreach ($sliders as $slider): ?>
                <div id="slide-<?= $slider->id ?>" class="slider-direction">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container">
                                <div class="slider-des">
                                    <h1 class="sl-title"><?= LanguageHelper::get($slider, 'title') ?></h1>
                                    <div class="sl-desc margin-0">
                                        <?= LanguageHelper::get($slider, 'description') ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Slider End -->

    <section id="rs-team" class="rs-defult-team defult-style sec-spacer">

        <div class="container">
            <div class="sec-title">
                <h3>Our Expert Advisor</h3>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
                 data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="true"
                 data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true"
                 data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="true"
                 data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true"
                 data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true"
                 data-md-device-dots="false">
                <!--team item start -->
                <div class="team-item">
                    <div class="team-overlay">
                        <div class="team-img">
                            <img src="images/team/1.jpg" alt="team Image"/>
                        </div>
                        <div class="team-content">
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-info">
                        <a href="team-details.html"><h4 class="title">A.Rashid</h4></a>
                        <span class="post">Founder & CEO</span>
                    </div>
                </div>
                <!--team item end -->

                <!--team item start -->
                <div class="team-item">
                    <div class="team-overlay">
                        <div class="team-img">
                            <img src="images/team/2.jpg" alt="team Image"/>
                        </div>
                        <div class="team-content">
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-info">
                        <a href="team-details.html"><h4 class="title">Mahabub Alam</h4></a>
                        <span class="post">Founder & ceo</span>
                    </div>
                </div>
                <!--team item end -->

                <!--team item start -->
                <div class="team-item">
                    <div class="team-overlay">
                        <div class="team-img">
                            <img src="images/team/3.jpg" alt="team Image"/>
                        </div>
                        <div class="team-content">
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-info">
                        <a href="team-details.html"><h4 class="title">Stive Austin</h4></a>
                        <span class="post">Senior Web Developer</span>
                    </div>
                </div>
                <!--team item end -->

                <!--team item start -->
                <div class="team-item">
                    <div class="team-overlay">
                        <div class="team-img">
                            <img src="images/team/4.jpg" alt="team Image"/>
                        </div>
                        <div class="team-content">
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-info">
                        <a href="team-details.html"><h4 class="title">Peter Parker</h4></a>
                        <span class="post">Manager</span>
                    </div>
                </div>
                <!--team item end -->

                <!--team item start -->
                <div class="team-item">
                    <div class="team-overlay">
                        <div class="team-img">
                            <img src="images/team/5.jpg" alt="team Image"/>
                        </div>
                        <div class="team-content">
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-info">
                        <a href="team-details.html"><h4 class="title">Justin Bieber</h4></a>
                        <span class="post">Manager</span>
                    </div>
                </div>
                <!--team item end -->
            </div>
        </div>
    </section>
    <!-- HOW WE WORK Start -->
    <div class="how-we-work defult-style pt-100 pb-100">
        <div class="container">
            <div class="work-sec-gallery">
                <h3><?= Yii::t('app', 'Xizmatlar') ?></h3>
                   <div class="row">
                    <?php foreach($services as $service):?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-sm-30">
                        <div class="work-column">
                            <div class="common-box">
                                <a href="<?= \yii\helpers\Url::to(['services/view' , 'id' => $service->id]) ?>"> <img src="/uploads/services/<?=$service->photo?>" alt=""></a>
                            </div>
                            <div class="work-gallery-caption">
                                <h4><a href="<?= \yii\helpers\Url::to(['services/view' , 'id' => $service->id]) ?>"><?= LanguageHelper::get($service, 'title') ?></a></h4>
                                <p>
                                    <?= \yii\helpers\StringHelper::truncate(LanguageHelper::get($service, 'description'), 150, '...'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
     <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
    <!-- HOW WE WORK END -->

    <!-- Services Start -->
    <section id="rs-services" class="rs-services-3 rs-service-style1 sec-color pt-100 pb-70">
        <div class="container">
            <div class="row rs-vertical-middle">
                <div class="col-lg-4 col-md-12 mb-md-50">
                    <div class="service-title">
                        <h3><?= Yii::t('app', '25 yillik tarjiba') ?>
                        </h3>
                        <p><?= Yii::t('app', 'bizda eng so`nggi turdagi maishiy texnika vositalari sotiladi va ularga xizmat ko`rsatiladi') ?></p>
                        <a href="<?= \yii\helpers\Url::to(['services/index']) ?>" class="readon"><?= Yii::t('app', 'Xizmatlar') ?></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <!-- 1st -->
                        <div class="col-md-6 col-sm-12">
                            <div class="common">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="icon-part">
                                            <i data-icon="&#xe001;" class="icon-part"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="text">
                                            <a href="#"><h4><?= Yii::t('app', 'Muzlatkichlar') ?></h4></a>
                                            <p><?= Yii::t('app', 'har xil turdagi Chet el muzlatkichlariga tez va sifattli xizmat ko`rsatish ') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="common">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="icon-part">
                                            <i data-icon="&#xe026;" class="icon-part"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="text">
                                            <a href="#"><h4><?= Yii::t('app', 'Mahsulotlar') ?></h4></a>
                                            <p><?= Yii::t('app', 'Faqat bizda sizning xoxishingizga mos mahsulotlar') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 2nd -->
                        <div class="col-md-6 col-sm-12">
                            <div class="common">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="icon-part">
                                            <i data-icon="%" class="icon-part"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="text">
                                            <a href="#"><h4><?= Yii::t('app', 'Qidiruv') ?></h4></a>
                                            <p><?= Yii::t('app', 'Faqat bizda xoxlagan mahsulotingizni topishingiz mumkin') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="common">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="icon-part">
                                            <i data-icon="/" class="icon-part"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="text">
                                            <a href="#"><h4><?= Yii::t('app', 'Yetkazib berish') ?></h4></a>
                                            <p><?= Yii::t('app', 'Xontaxtadan uygacha yetkazib berish xizmatlari faqat bizda') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 4th -->

        </div>
    </section>
    <!-- Services End -->

    <!-- Portfolio Start -->
    <section id="rs-portfolio2" class="rs-portfolio2 defutl-style sec-spacer">
        <div class="container">
            <div class="sec-title">
                <h3>Our Latest Project</h3>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="20"
                         data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false"
                         data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true"
                         data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="true"
                         data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true"
                         data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true"
                         data-md-device-dots="false">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="images/portfolio/home1.jpg" alt="Portfolio Image"/>
                            </div>
                            <div class="portfolio-content">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <h4 class="p-title"><a href="portfolio-details.html">International Growth
                                                Fund</a></h4>
                                        <a href="portfolio-details.html" class="project-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="images/portfolio/home2.jpg" alt="Portfolio Image"/>
                            </div>
                            <div class="portfolio-content">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <h4 class="p-title"><a href="portfolio-details.html">Marketing Plan</a></h4>
                                        <a href="portfolio-details.html" class="project-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="images/portfolio/home3.jpg" alt="Portfolio Image"/>
                            </div>
                            <div class="portfolio-content">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <h4 class="p-title"><a href="portfolio-details.html">Speaker Block</a></h4>
                                        <a href="portfolio-details.html" class="project-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <img src="images/portfolio/home4.jpg" alt="Portfolio Image"/>
                            </div>
                            <div class="portfolio-content">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <h4 class="p-title"><a href="portfolio-details.html">Financial Planning</a></h4>
                                        <a href="portfolio-details.html" class="project-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio End -->
    <section id="rs-team" class="rs-defult-team defult-style sec-spacer">

    <div class="counter-top-area defult-style" style="margin: 100px 0px;">
        <div class="container">
            <div class="row rs-count">
                <!-- COUNTER-LIST START -->
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration=".3s" data-wow-delay="300ms">
                    <div class="rs-counter-list">
                        <i data-icon="W" class="icon"></i>
                        <h3 class="rs-counter">100</h3>
                        <h4><?= Yii::t('app', 'Bizning hamkorlar') ?></h4>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->

                <!-- COUNTER-LIST START -->
                <div class="col-md-3 col-sm-6  wow fadeInUp" data-wow-duration=".7s" data-wow-delay="300ms">
                    <div class="rs-counter-list">
                        <i data-icon="C" class="icon"></i>
                        <h3 class="rs-counter">5</h3>
                        <h4><?= Yii::t('app', 'Bizning yutuqlar') ?> </h4>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->

                <!-- COUNTER-LIST START -->
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration=".9s" data-wow-delay="300ms">
                    <div class="rs-counter-list">
                        <i data-icon="P" class="icon"></i>
                        <h3 class="rs-counter">54</h3>
                        <h4><?= Yii::t('app', 'Bizning filiallar') ?></h4>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->

                <!-- COUNTER-LIST START -->
                <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="300ms">
                    <div class="rs-counter-list">
                        <i data-icon="&#xe001;" class="icon"></i>
                        <h3 class="rs-counter">1000</h3>
                        <h4 class="last"><?= Yii::t('app', 'Bizning mahsuotar') ?></h4>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->
            </div>
        </div>
    </div>
        </section>
            <!-- Expertise Area satar -->
    <div class="why-choose-us defult-style sec-color pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-md-50">
                    <div class="video-section-area">
                        <div class="image-here">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/yKg0RHyt6QU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<!--                            <div class="video-icon-here">-->
<!--                                <a class="popup-videos animated pulse"-->
<!--                                   href="https://youtu.be/HSzE-9EjzCs" title="Video Icon">-->
<!--                                    <span></span>-->
<!--                                </a>-->
<!--                            </div>-->
                        </div>
                        <div class="overly-border"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 services-responsibiity">
                    <div class="service-res-inner">
                        <div class="sec-title">
                            <h3><?= Yii::t('app', 'Nima uchun biz') ?></h3>
                        </div>
                        <div class="services-item">
                            <div class="service-mid-icon">
                                <a href="#"><span class="service-mid-icon-container"><i data-icon="a" class="icon"></i></span></a>
                            </div>
                            <div class="services-desc">
                                <h3 class="services-title"><a href="#"><?= Yii::t('app', 'Mahsulotlar') ?></a></h3>
                                <p><?= Yii::t('app', 'Bizda eng so`nggi turdagi chet el mahsulotlari') ?></p>
                            </div>
                        </div>
                        <div class="services-item">
                            <div class="service-mid-icon">
                                <a href="#"><span class="service-mid-icon-container"><i data-icon="6" class="icon"></i></span></a>
                            </div>
                            <div class="services-desc">
                                <h3 class="services-title"><a href="#"><?= Yii::t('app', 'Bizning xizmatlar') ?></a></h3>
                                <p><?= Yii::t('app', 'Har xil turdagi maishiy texnika vositalariga xizmat ko`rsatish') ?></p>
                            </div>
                        </div>
                        <div class="services-item margin-0">
                            <div class="service-mid-icon">
                                <a href="#"><span class="service-mid-icon-container"><i data-icon="&#xe023;"
                                                                                        class="icon"></i></span></a>
                            </div>
                            <div class="services-desc">
                                <h3 class="services-title"><a href="#"><?= Yii::t('app', 'Yetkazib berish xizmati') ?></a></h3>
                                <p><?= Yii::t('app', 'Xoxlagan hududingizga yetkazib berish xizmatlari bor bizda') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise Area end -->

    <!-- Team Start -->
    <!-- Team end -->

    <!-- Blog Start -->
    <section id="rs-blog" class="rs-blog sec-spacer">
        <div class="container">
            <div class="sec-title">
                <h3><?= Yii::t('app', 'So`nggi yangiliklar') ?></h3>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
                 data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="true"
                 data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true"
                 data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="true"
                 data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true"
                 data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true"
                 data-md-device-dots="false">
                <?php foreach ($news as $n): ?>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="/uploads/news/<?=$n->photo?>" alt="Blog Image" style="width: 100%; height: 300px !important;">
                            <div class="blog-img-content">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <a class="blog-link" href="#" title="Blog Link">
                                            <i class="fa fa-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-wrapper">
                            <div class="blog-meta">
                                <ul>
                                    <li><i class="fa fa-calendar"></i><span><?= date('F d, Y', $n->date) ?></span></li>
                                </ul>
                            </div>
                            <div class="blog-desc">
                                <a href="<?= \yii\helpers\Url::to(['news/index', 'id' => $n->id]) ?>"><?= LanguageHelper::get($n, 'title') ?></a>
                                <p><?= \yii\helpers\StringHelper::truncate(LanguageHelper::get($n, 'description'), 150, '...'); ?></p>
                            </div>
                            <a href="<?= \yii\helpers\Url::to(['news/index', 'id' => $n->id]) ?>" class="readon">Read More</a>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Blog End -->

    <!-- Partner Start -->
    <div id="rs-defult-partner" class="rs-defult-partner sec-color pt-100 pb-100">
        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true"
                 data-autoplay-timeout="8000" data-smart-speed="2000" data-dots="false" data-nav="true"
                 data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="true"
                 data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="true"
                 data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="true"
                 data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="true"
                 data-md-device-dots="false">
                <div class="partner-item">
                    <a href="#"><img src="images/partner/1.png" alt="Partner Image"></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="images/partner/2.png" alt="Partner Image"></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="images/partner/3.png" alt="Partner Image"></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="images/partner/4.png" alt="Partner Image"></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="images/partner/5.png" alt="Partner Image"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner End -->
</div>
