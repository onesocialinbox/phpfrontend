<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\userlawcollegeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userlawcollege-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'lawDegree') ?>

    <?= $form->field($model, 'lawUniversity') ?>

    <?= $form->field($model, 'lawCollege') ?>

    <?= $form->field($model, 'lawUniversityPlace') ?>

    <?php // echo $form->field($model, 'lawCollegePlace') ?>

    <?php // echo $form->field($model, 'lawYearOfPassing') ?>

    <?php // echo $form->field($model, 'lawRollNo') ?>

    <?php // echo $form->field($model, 'lawCourseType') ?>

    <?php // echo $form->field($model, 'lawCourseDuration') ?>

    <?php // echo $form->field($model, 'provisionalCertNumber') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
