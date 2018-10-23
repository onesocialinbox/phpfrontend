<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\userchecklistSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userchecklist-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'affidavitUploaded') ?>

    <?= $form->field($model, 'affidavitdocId') ?>

    <?= $form->field($model, 'photoUploaded') ?>

    <?= $form->field($model, 'photoDocID') ?>

    <?php // echo $form->field($model, 'form1Uploaded') ?>

    <?php // echo $form->field($model, 'form1DocID') ?>

    <?php // echo $form->field($model, 'form2Uploaded') ?>

    <?php // echo $form->field($model, 'form2DocID') ?>

    <?php // echo $form->field($model, 'form3Uploaded') ?>

    <?php // echo $form->field($model, 'form3DocID') ?>

    <?php // echo $form->field($model, 'form4Uploaded') ?>

    <?php // echo $form->field($model, 'form4DocID') ?>

    <?php // echo $form->field($model, 'form5Uploaded') ?>

    <?php // echo $form->field($model, 'form5DocID') ?>

    <?php // echo $form->field($model, 'form6Uploaded') ?>

    <?php // echo $form->field($model, 'form6DocID') ?>

    <?php // echo $form->field($model, 'formRule40Uploaded') ?>

    <?php // echo $form->field($model, 'formRule40DocID') ?>

    <?php // echo $form->field($model, 'provisionalCertification') ?>

    <?php // echo $form->field($model, 'provisionalCertDocId') ?>

    <?php // echo $form->field($model, 'communityCertificate') ?>

    <?php // echo $form->field($model, 'communityCertDocId') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
