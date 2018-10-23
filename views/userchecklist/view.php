<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\userchecklist */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Userchecklists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="userchecklist-view">

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
            'affidavitUploaded',
            'affidavitdocId',
            'photoUploaded',
            'photoDocID',
            'form1Uploaded',
            'form1DocID',
            'form2Uploaded',
            'form2DocID',
            'form3Uploaded',
            'form3DocID',
            'form4Uploaded',
            'form4DocID',
            'form5Uploaded',
            'form5DocID',
            'form6Uploaded',
            'form6DocID',
            'formRule40Uploaded',
            'formRule40DocID',
            'provisionalCertification',
            'provisionalCertDocId',
            'communityCertificate',
            'communityCertDocId',
        ],
    ]) ?>

</div>
