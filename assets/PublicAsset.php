<?php

namespace app\assets;

use yii\web\AssetBundle;


class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700",
    "https://fonts.googleapis.com/css?family=Josefin+Sans",
    "https://fonts.googleapis.com/css?family=Nothing+You+Could+Do",

    "public/css/open-iconic-bootstrap.min.css",
    "public/css/animate.css",

    "public/css/owl.carousel.min.css",
    "public/css/owl.theme.default.min.css",
    "public/css/magnific-popup.css",

    "public/css/aos.css",

    "public/css/ionicons.min.css",

    "public/css/bootstrap-datepicker.css",
    "public/css/jquery.timepicker.css",


    "public/css/flaticon.css",
    "public/css/icomoon.css",
    "public/css/style.css",
    ];
    public $js = [
    "public/js/jquery.min.js",
    "public/js/jquery-migrate-3.0.1.min.js",
    "public/js/popper.min.js",
    "public/js/bootstrap.min.js",
    "public/js/jquery.easing.1.3.js",
    "public/js/jquery.waypoints.min.js",
    "public/js/jquery.stellar.min.js",
    "public/js/owl.carousel.min.js",
    "public/js/jquery.magnific-popup.min.js",
    "public/js/aos.js",
    "public/js/jquery.animateNumber.min.js",
    "public/js/bootstrap-datepicker.js",
    "public/js/jquery.timepicker.min.js",
    "public/js/scrollax.min.js",
    "https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false",
    "public/js/google-map.js",
    "public/js/main.js",
    ];
    public $depends = [

    ];
}
