<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\employmentform */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card-body">

    <?php $form = ActiveForm::begin(); ?>

   <div class="form-row">							
	<div class="col-md-6 mb-2">
    <?= $form->field($model, 'id')->textInput() ?>
    </div>
    <div class="col-md-6 mb-2">
    <?= $form->field($model, 'companyname')->textInput(['maxlength' => true]) ?>
    </div>
    </div>
    <div class="form-row">							
	<div class="col-md-6 mb-2">
    <?= $form->field($model, 'lastworkingDate')->textInput() ?>
    </div>
    <div class="col-md-6 mb-2">
    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
    </div>
    </div>
    <div class="form-row">							
	<div class="col-md-6 mb-2">
    <?= $form->field($model, 'natureofEmployment')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6 mb-2">
    <?= $form->field($model, 'yearsOfService')->textInput() ?>
    <?= $form->field($model,'user_id')->hiddenInput(['value'=>$userid])->label(false);?>
    </div>
    </div>
</div>
<div class="card-footer bg-white">
    <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
</div>

    <?php ActiveForm::end(); ?>

</div>
