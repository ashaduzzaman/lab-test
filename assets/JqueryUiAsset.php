<?php
namespace app\assets;

use yii\web\AssetBundle;

class JqueryUiAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-ui';
    public $css = [
        'themes/smoothness/jquery-ui.css',
    ];
    public $js = [
        'jquery-ui.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}