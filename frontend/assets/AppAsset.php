<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/css/bootstrap.min.css',
        '/css/font-awesome.min.css',
        '/css/animate.css',
        '/css/owl.carousel.css',
        '/css/slick.css',
        '/css/off-canvas.css',
        '/fonts/linea-fonts.css',
        '/inc/custom-slider/css/nivo-slider.css',
        '/inc/custom-slider/css/preview.css',
        '/css/magnific-popup.css',
        '/css/rsmenu-main.css',
        '/css/rsmenu-transitions.css',
        '/style.css',
        '/css/responsive.css',
    ];
    public $js = [
        '/js/modernizr-2.8.3.min.js',
        '/js/jquery.min.js',
        '/js/bootstrap.min.js',
        '/js/rsmenu-main.js',
        '/js/jquery.nav.js',
        '/js/owl.carousel.min.js',
        '/js/slick.min.js',
        '/js/isotope.pkgd.min.js',
        '/js/imagesloaded.pkgd.min.js',
        '/js/wow.min.js',
        '/js/skill.bars.jquery.js',
        '/js/jquery.counterup.min.js',
        '/js/waypoints.min.js',
        '/js/jquery.mb.YTPlayer.min.js',
        '/js/jquery.magnific-popup.min.js',
        '/inc/custom-slider/js/jquery.nivo.slider.js',
        '/js/plugins.js',
        '/js/contact.form.js',
        '/js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
