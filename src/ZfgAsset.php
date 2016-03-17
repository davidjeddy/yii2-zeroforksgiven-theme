<?php

namespace davidjeddy\zfg;

use yii\web\AssetBundle;

/**
 *
 * @author David Eddy <me@davidjeddy.com>
 * @since 0.0.5
 */
class ZfgAsset extends AssetBundle
{
    public $basePath = '@webroot/themes/zfg/assets/';
    public $baseUrl = '@web/themes/zfg/assets/';

    public $css = [
        'css/zfg.css',
    ];

    public $js = [
        'js/zfg.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'common\assets\Html5shiv',
    ];
}
