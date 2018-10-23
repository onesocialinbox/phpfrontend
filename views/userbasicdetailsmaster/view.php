<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Userbasicdetailsmaster */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Userbasicdetailsmasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="userbasicdetailsmaster-view">

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
            'AIBE',
            'AlternatePhoneNumber',
            'community',
            'bloodGroup',
            'barAssociation',
            'gender',
            'casePending',
            'convictionDetails',
            'remarks',
            'toBeMovedBy',
            'uniqueGovtID',
            'uniqueGovtId_type_cd',
        ],
    ]) ?>

</div>
