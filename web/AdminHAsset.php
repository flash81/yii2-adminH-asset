<?php
namespace flash20\admin\web;

use yii\base\Exception;
use yii\web\AssetBundle as BaseAdminLteAsset;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class AdminHAsset extends BaseAdminLteAsset
{
    public $sourcePath = '@vendor/flash20/yii2-adminH-asset/web/static';
    public $css = [
        'css/bootstrap.min14ed.css',
        'css/font-awesome.min93e3.css',
        'css/animate.min.css',
        'css/style.min862f.css',
        'css/site.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/plugins/metisMenu/jquery.metisMenu.js',
        'js/plugins/slimscroll/jquery.slimscroll.min.js',
        'js/plugins/layer/layer.min.js',
        'js/hplus.min.js',
        'js/contabs.min.js',
        'js/plugins/pace/pace.min.js',
        'js/common.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}
