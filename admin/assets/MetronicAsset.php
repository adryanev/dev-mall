<?php


namespace admin\assets;

use yii\bootstrap4\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

class MetronicAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendors/base/vendors.bundle.css',
        'demo/demo7/base/style.bundle.css'

    ];

    public $js = [
        'vendors/base/vendors.bundle.js',
        'demo/demo7/base/scripts.bundle.js',
        'js/yii_override.js',
        'app/js/dashboard.js',
    ];

    public $depends = [
//        YiiAsset::class,
//       BootstrapAsset::class,


    ];
}