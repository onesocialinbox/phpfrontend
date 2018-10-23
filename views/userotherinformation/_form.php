<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\userotherinformation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card-body">

    <?php $form = ActiveForm::begin(); ?>
    <div class="form-row">							
	<div class="col-md-6 mb-2">

    <?= $form->field($model, 'ID')->textInput() ?>
    </div>
    <div class="col-md-6 mb-2">


    <?= $form->field($model, 'isQualifiedSec24')->textInput() ?>
    </div>
    </div>
    <div class="form-row">							
	<div class="col-md-6 mb-2">


    <?= $form->field($model, 'previouslyApplied')->textInput() ?>
    </div>
    <div class="col-md-6 mb-2">

    <?= $form->field($model, 'rejectReason')->textInput(['maxlength' => true]) ?>
    </div>
    </div>
    <div class="form-row">							
	<div class="col-md-6 mb-2">


    <?= $form->field($model, 'newspaperPublicationDate')->textInput() ?>
    </div>
    <div class="col-md-6 mb-2">

    <?= $form->field($model, 'newspaperPublished')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model,'user_id')->hiddenInput(['value'=>$userid])->label(false);?>
    </div>
    </div>

</div>
<div class="card-footer bg-white">
    <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
</div>

    <?php ActiveForm::end(); ?>

</div>
