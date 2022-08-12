<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/frontend-files';
    public $css = [
        "img/favicon.ico",
        "https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900",
        "https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800",
        "https://fonts.googleapis.com/css?family=Dosis:300,600,700",
        "css/plugins.css",
        "css/style.css",
        ];
    public $js = [
        "js/popper.min.js",
        "js/bootstrap.min.js",
        "js/scrollIt.min.js",
        "js/jquery.hover3d.min.js",
        "js/jquery.waypoints.min.js",
        "js/jquery.counterup.min.js",
        "js/circle-progress.min.js",
        "js/owl.carousel.min.js",
        "js/jquery.magnific-popup.min.js",
        "js/jquery.stellar.min.js",
        "js/isotope.pkgd.min.js",
        "js/YouTubePopUp.jquery.js",
        "js/particles.min.js",
        "js/app.js",
        "js/validator.js",
        "js/scripts.js",

    ];
  public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
