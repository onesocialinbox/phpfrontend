<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Userstatusmaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card-body">

    <?php $form = ActiveForm::begin(); ?>
<div class="form-row">                          
    <div class="col-md-6 mb-2">
    <?= $form->field($model, 'enrollmentStatus_cd')->textInput() ?>
</div>
    <div class="col-md-6 mb-2">
    <?= $form->field($model, 'applicationStatus_cd')->textInput() ?>
</div>
    <div class="col-md-6 mb-2">
    <?= $form->field($model, 'vmsStatus_cd')->textInput() ?>
</div>
    <div class="col-md-6 mb-2">
    <?= $form->field($model, 'documentVerificationStatus_cd')->textInput() ?>
</div>
    <div class="col-md-6 mb-2">
    <?= $form->field($model, 'directCallStatus_cd')->textInput() ?>
</div>
    <div class="col-md-6 mb-2">
    <?= $form->field($model, 'bgVerificationStatus_cd')->textInput() ?>
</div>
    <div class="col-md-6 mb-2">
    <?= $form->field($model, 'idCreationStatus_cd')->textInput() ?>
</div>
    <div class="col-md-6 mb-2">
    <?= $form->field($model, 'paymentStatus_cd')->textInput() ?>
</div>
    <div class="col-md-6 mb-2">
    <?= $form->field($model, 'secretaryCallStatus_cd')->textInput() ?>
    <?= $form->field($model,'user_id')->hiddenInput(['value'=>$userid])->label(false);?>

</div>
</div>
</div>
<div class="card-footer bg-white">
    <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
</div>

    <?php ActiveForm::end(); ?>

</div>
