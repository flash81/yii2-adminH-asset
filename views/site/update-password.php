<?php
/**
 * Created by PhpStorm.
 * User: flash20
 * Date: 2016/4/28
 * Time: 0:20
 */
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
?>
<div class="member-form">


    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-10\">{input}</div>\n<div class=\"col-lg-5  col-md-offset-2\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-2 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'oldpassword')->passwordInput() ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'confirm_password')->passwordInput() ?>
    <div class="form-group">
        <?= Html::submitButton('更新密码', ['class' => 'btn btn-primary col-md-offset-2']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

