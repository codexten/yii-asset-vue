<?php

namespace codexten\yii\web\assets\vue;

use yii\web\AssetBundle;
use yii\web\View;

class VueAsset extends AssetBundle
{
    public $sourcePath = '@npm/vue/dist';
//    public $js = [
//        'vue.esm.browser.min.js',
//    ];
    public $js = [
        'https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}
