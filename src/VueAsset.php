<?php

namespace codexten\yii\web\assets\vue;

use yii\web\AssetBundle;
use yii\web\View;

class VueAsset extends AssetBundle
{
    public $sourcePath = '@npm/vue/dist';
    public $js = [
        YII_ENV_DEV ? 'vue.js' : 'vue.min.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}
