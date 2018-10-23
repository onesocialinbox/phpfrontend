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
class BootAdminAsset extends AssetBundle
{
    /*public $basePath = '@webroot';
    public $baseUrl = '@web';*/
    public $sourcePath = __DIR__ . '/../themes/bootadmin';
    public $css = [
        'css/fontawesome-all.min.css',
        'css/bootadmin.min.css',
        'css/datatables.min.css'
    ];
    public $js = [
        'js/bootstrap.bundle.min.js',
        'js/bootadmin.min.js'
    ];

    public $depends = [
        'app\assets\AppAsset',
    ];

    /*public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];*/
}
