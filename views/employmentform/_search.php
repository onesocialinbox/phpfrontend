<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\employmentformSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employmentform-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'companyname') ?>

    <?= $form->field($model, 'lastworkingDate') ?>

    <?= $form->field($model, 'city') ?>

    <?= $form->field($model, 'natureofEmployment') ?>

    <?php // echo $form->field($model, 'yearsOfService') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
