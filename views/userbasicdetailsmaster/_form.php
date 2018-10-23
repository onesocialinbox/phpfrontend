<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Userbasicdetailsmaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card-body">

    <?php $form = ActiveForm::begin(); ?>
    
   <div class="form-row">							
	<div class="col-md-6 mb-2">

    <?= $form->field($model, 'ID')->textInput() ?>
    </div>
    <div class="col-md-6 mb-2">

    <?= $form->field($model, 'AIBE')->textInput() ?>
    </div>
    </div>
    <div class="form-row">							
	<div class="col-md-6 mb-2">

    <?= $form->field($model, 'AlternatePhoneNumber')->textInput(['maxlength' => true]) ?>

   </div>
    <div class="col-md-6 mb-2">

    <?= $form->field($model, 'community')->textInput(['maxlength' => true]) ?>
    </div>
    </div>
    <div class="form-row">							
	<div class="col-md-6 mb-2">

    <?= $form->field($model, 'bloodGroup')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6 mb-2">

    <?= $form->field($model, 'barAssociation')->textInput(['maxlength' => true]) ?>
    </div>
    </div>
    <div class="form-row">							
	<div class="col-md-6 mb-2">


    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6 mb-2">


    <?= $form->field($model, 'casePending')->textInput() ?>
    </div>
    </div>
    <div class="form-row">							
	<div class="col-md-6 mb-2">


    <?= $form->field($model, 'convictionDetails')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6 mb-2">

    <?= $form->field($model, 'remarks')->textInput(['maxlength' => true]) ?>
    </div>
    </div>
    <div class="form-row">							
	<div class="col-md-6 mb-2">

    <?= $form->field($model, 'toBeMovedBy')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6 mb-2">

    <?= $form->field($model, 'uniqueGovtID')->textInput(['maxlength' => true]) ?>
    </div>
    </div>
    <div class="form-row">							
	<div class="col-md-6 mb-2">

    <?= $form->field($model, 'uniqueGovtId_type_cd')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model,'user_id')->hiddenInput(['value'=>$userid])->label(false);?>
    </div>
    </div>
    
</div>
<div class="card-footer bg-white">
    <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
</div>

    <?php ActiveForm::end(); ?>

</div>
