<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserFeeMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card-body">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'enrollmentFees')->textInput() ?>

    <?= $form->field($model, 'idFees')->textInput() ?>

    <?= $form->field($model, 'registrationFees')->textInput() ?>

    <?= $form->field($model, 'onlineFees')->textInput() ?>

    <?= $form->field($model, 'otherFee1')->textInput() ?>

    <?= $form->field($model, 'otherFee2')->textInput() ?>

    <?= $form->field($model, 'otherFee3')->textInput() ?>
    <?= $form->field($model,'user_id')->hiddenInput(['value'=>$userid])->label(false);?>

</div>
<div class="card-footer bg-white">
    <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
</div>

    <?php ActiveForm::end(); ?>

</div>
