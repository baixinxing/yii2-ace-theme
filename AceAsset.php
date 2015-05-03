<?php

namespace baixinxing\ace;

use yii\web\AssetBundle;

class AceAsset extends AssetBundle {

    public $sourcePath = '@baixinxing/ace/assets';
    
    public $css = [
        'css/bootstrap.min.css',
        'css/ace.min.css',
        'font-awesome/4.2.0/css/font-awesome.min.css',
    ];
    public $js = [
        'js/ace.min.js',
         'js/ace-elements.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];

}
