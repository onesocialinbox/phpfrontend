<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserbasicdetailsmasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userbasicdetailsmaster-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'AIBE') ?>

    <?= $form->field($model, 'AlternatePhoneNumber') ?>

    <?= $form->field($model, 'community') ?>

    <?= $form->field($model, 'bloodGroup') ?>

    <?php // echo $form->field($model, 'barAssociation') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'casePending') ?>

    <?php // echo $form->field($model, 'convictionDetails') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'toBeMovedBy') ?>

    <?php // echo $form->field($model, 'uniqueGovtID') ?>

    <?php // echo $form->field($model, 'uniqueGovtId_type_cd') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
