<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EnrollmentMasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="enrollment-master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'FatherName') ?>

    <?= $form->field($model, 'DateOfBirth') ?>

    <?= $form->field($model, 'Phone') ?>

    <?php // echo $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'ApplicationFormId') ?>

    <?php // echo $form->field($model, 'chgd_dt') ?>

    <?php // echo $form->field($model, 'chgd_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
