<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = '后台管理';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>

<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Admin</b>H+</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">登录</p>

        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

        <?= $form
            ->field($model, 'username', $fieldOptions1)
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

        <?= $form
            ->field($model, 'password', $fieldOptions2)
            ->label(false)
            ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>


        <?= $form->field($model, 'verifyCode')->label(false)->widget(Captcha::classname(),[
            'template' => "<div class=\"row\"><div class=\"col-lg-9\">{input}<span class='glyphicon glyphicon-pencil form-control-feedback' style='right:10px;'></span></div><div class=\"col-lg-3\">{image}</div></div>",
            'imageOptions' => ['alt' => '验证码','style'=>'float:right;'],
            'captchaAction' => 'site/captcha',
        ])?>

        <div class="row">
            <div class="col-xs-8">
                <?= $form->field($model, 'rememberMe')->label('记住我')->checkbox() ?>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <?= Html::submitButton('登录', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
            </div>
            <!-- /.col -->
        </div>


        <?php ActiveForm::end(); ?>




    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->
