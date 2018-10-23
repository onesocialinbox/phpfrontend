<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Userstatusmaster */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Userstatusmasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="userstatusmaster-view">

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
            'enrollmentStatus_cd',
            'applicationStatus_cd',
            'vmsStatus_cd',
            'documentVerificationStatus_cd',
            'directCallStatus_cd',
            'bgVerificationStatus_cd',
            'idCreationStatus_cd',
            'paymentStatus_cd',
            'secretaryCallStatus_cd',
        ],
    ]) ?>

</div>
