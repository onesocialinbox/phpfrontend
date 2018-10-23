<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\userschool */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card-body">

    <?php $form = ActiveForm::begin(); ?>
<div class="form-row">    
    <div class="col-md-6 mb-2">
    <?= $form->field($model, 'id')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'sslcYear')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'sslcSchool')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'sslcMarks')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'sslcBoard')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'hscYear')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'hscSchool')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'hscMarks')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'hscBoard')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model,'user_id')->hiddenInput(['value'=>$userid])->label(false);?>
</div>
</div>
</div>
<div class="card-footer bg-white">
    <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
</div>

    <?php ActiveForm::end(); ?>

</div>
