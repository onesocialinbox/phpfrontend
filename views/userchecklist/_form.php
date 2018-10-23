<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\userchecklist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card-body">

    <?php $form = ActiveForm::begin(); ?>
<div class="form-row">                          
    <div class="col-md-6 mb-2">
    <?= $form->field($model, 'ID')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'affidavitUploaded')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'affidavitdocId')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'photoUploaded')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'photoDocID')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'form1Uploaded')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'form1DocID')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'form2Uploaded')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'form2DocID')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'form3Uploaded')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'form3DocID')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'form4Uploaded')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'form4DocID')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'form5Uploaded')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'form5DocID')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'form6Uploaded')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'form6DocID')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'formRule40Uploaded')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'formRule40DocID')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'provisionalCertification')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'provisionalCertDocId')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'communityCertificate')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'communityCertDocId')->textInput() ?>
    <?= $form->field($model,'user_id')->hiddenInput(['value'=>$userid])->label(false);?>
</div>
</div>
</div>
<div class="card-footer bg-white">
    <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
</div>

    <?php ActiveForm::end(); ?>

</div>
