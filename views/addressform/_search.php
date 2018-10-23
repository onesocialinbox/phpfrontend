<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AddressFormSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="address-form-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'permanentAddress1') ?>

    <?= $form->field($model, 'permanentAddress2') ?>

    <?= $form->field($model, 'permanentAddress3') ?>

    <?= $form->field($model, 'permanentAddress4') ?>

    <?php // echo $form->field($model, 'permanentCity') ?>

    <?php // echo $form->field($model, 'permanentState') ?>

    <?php // echo $form->field($model, 'permanentDistrict') ?>

    <?php // echo $form->field($model, 'permanentPincode') ?>

    <?php // echo $form->field($model, 'communicationAddress1') ?>

    <?php // echo $form->field($model, 'communicationAddress2') ?>

    <?php // echo $form->field($model, 'communicationAddress3') ?>

    <?php // echo $form->field($model, 'communicationAddress4') ?>

    <?php // echo $form->field($model, 'communicationCity') ?>

    <?php // echo $form->field($model, 'communicationState') ?>

    <?php // echo $form->field($model, 'communicationDistrict') ?>

    <?php // echo $form->field($model, 'communicationPincode') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
