<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\userotherinformationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userotherinformation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'isQualifiedSec24') ?>

    <?= $form->field($model, 'previouslyApplied') ?>

    <?= $form->field($model, 'rejectReason') ?>

    <?= $form->field($model, 'newspaperPublicationDate') ?>

    <?php // echo $form->field($model, 'newspaperPublished') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
