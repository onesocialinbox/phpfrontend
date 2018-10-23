<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AddressForm */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Address Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="address-form-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'permanentAddress1',
            'permanentAddress2',
            'permanentAddress3',
            'permanentAddress4',
            'permanentCity',
            'permanentState',
            'permanentDistrict',
            'permanentPincode',
            'communicationAddress1',
            'communicationAddress2',
            'communicationAddress3',
            'communicationAddress4',
            'communicationCity',
            'communicationState',
            'communicationDistrict',
            'communicationPincode',
        ],
    ]) ?>

</div>
