<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\userlawcollege */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card-body">

    <?php $form = ActiveForm::begin(); ?>
<div class="form-row">    
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'lawDegree')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'lawUniversity')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'lawCollege')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'lawUniversityPlace')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'lawCollegePlace')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'lawYearOfPassing')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'lawRollNo')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'lawCourseType')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'lawCourseDuration')->textInput() ?>
</div>
<div class="col-md-6 mb-2">
    <?= $form->field($model, 'provisionalCertNumber')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model,'user_id')->hiddenInput(['value'=>$userid])->label(false);?>
</div>
</div>
</div>
<div class="card-footer bg-white">
    <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
</div>

    <?php ActiveForm::end(); ?>

</div>
