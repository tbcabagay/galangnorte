<?php

namespace app\assets;

use yii\web\AssetBundle;

class CreativeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/creative.min.css',
    ];
    public $js = [
        'js/creative.min.js',
    ];
    public $depends = [
        'app\assets\AppAsset',
    ];
}
