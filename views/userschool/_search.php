<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\userschoolSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userschool-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'sslcYear') ?>

    <?= $form->field($model, 'sslcSchool') ?>

    <?= $form->field($model, 'sslcMarks') ?>

    <?= $form->field($model, 'sslcBoard') ?>

    <?php // echo $form->field($model, 'hscYear') ?>

    <?php // echo $form->field($model, 'hscSchool') ?>

    <?php // echo $form->field($model, 'hscMarks') ?>

    <?php // echo $form->field($model, 'hscBoard') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
