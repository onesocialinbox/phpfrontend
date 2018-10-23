<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\AddressForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card-body">

    <?php $form = ActiveForm::begin(); ?>
<div class="form-row">                          
    <div class="col-md-6 mb-2">
    <?= $form->field($model, 'permanentAddress1')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'permanentAddress2')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'permanentAddress3')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'permanentAddress4')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'permanentCity')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'permanentState')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'permanentDistrict')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'permanentPincode')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'communicationAddress1')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'communicationAddress2')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'communicationAddress3')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'communicationAddress4')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'communicationCity')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'communicationState')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'communicationDistrict')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'communicationPincode')->textInput(['maxlength' => true]) ?>   
    <?= $form->field($model,'user_id')->hiddenInput(['value'=>$userid])->label(false);?>
</div>
</div>
</div>
<div class="card-footer bg-white">
    <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
</div>

    <?php ActiveForm::end(); ?>

</div>
