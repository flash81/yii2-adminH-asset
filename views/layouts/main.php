<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use dmstr\widgets\Alert;
use yii\widgets\Breadcrumbs;

flash20\web\AdminHAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="keywords" content="Y+,后台管理,Yii2 RBAC,H+后台主题,后台bootstrap框架,会员中心,后台HTML,响应式后台">
    <meta name="description" content="Y+是Yii2 + Bootstrap搭建的后台管理系统，集成用户中心模块和RBAC权限管理模块。模板使用H+基于Bootstrap3最新版本开发的扁平化主题。">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <link rel="shortcut icon" href="favicon.ico">
    <?php $this->head() ?>
</head>
<body class="fixed-sidebar full-height-layout gray-bg">
<?php $this->beginBody() ?>
<?php if((Yii::$app->controller->module->defaultRoute!="site") ||(Yii::$app->controller->module->defaultRoute=="site" && Yii::$app->controller->module->requestedRoute!=""
        && Yii::$app->controller->module->requestedRoute!="site/login")):?>
    <nav class="breadcrumb fix_top hidden-sm hidden-xs" style="height: 45px;">

        <div class="pull-right">
            <a class="btn btn-primary radius " style="line-height:1.6em;margin-top:3px" href="javascript:history.go(-1);" title="后退">
                <span class="fa fa-reply"></span>
            </a>
            &nbsp;
            <a class="btn btn-primary radius" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新">
                <span class="fa fa-refresh"></span>
            </a>
            &nbsp;
        </div>
    </nav>
    <div class="wrapper wrapper-content">

        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
<?php else:?>
    <?= $content ?>
<?php endif;?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
