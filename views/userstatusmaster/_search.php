<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserstatusmasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userstatusmaster-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'enrollmentStatus_cd') ?>

    <?= $form->field($model, 'applicationStatus_cd') ?>

    <?= $form->field($model, 'vmsStatus_cd') ?>

    <?= $form->field($model, 'documentVerificationStatus_cd') ?>

    <?php // echo $form->field($model, 'directCallStatus_cd') ?>

    <?php // echo $form->field($model, 'bgVerificationStatus_cd') ?>

    <?php // echo $form->field($model, 'idCreationStatus_cd') ?>

    <?php // echo $form->field($model, 'paymentStatus_cd') ?>

    <?php // echo $form->field($model, 'secretaryCallStatus_cd') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
