<?php


namespace admin\assets;


use yii\web\AssetBundle;

class YiiAsset extends AssetBundle
{
    public $sourcePath = '@yii/assets';
    public $js = [
        'yii.js',
    ];

    public $depends = [
      MetronicAsset::class
    ];
}