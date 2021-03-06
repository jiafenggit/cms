<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'static/css/style.css',
        'static/plugins/toastr/toastr.min.css',
    ];
    public $js = [
        'static/js/jquery.min.js',
        'static/js/jquery.js',
        'static/plugins/toastr/toastr.min.js',
    ];
    public $depends = [
        //'feehi\assets\YiiAsset',
        //'feehi\assets\BootstrapAsset',
    ];
}
