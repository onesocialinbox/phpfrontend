<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\userlawcollege */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Userlawcolleges', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="userlawcollege-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'lawDegree',
            'lawUniversity',
            'lawCollege',
            'lawUniversityPlace',
            'lawCollegePlace',
            'lawYearOfPassing',
            'lawRollNo',
            'lawCourseType',
            'lawCourseDuration',
            'provisionalCertNumber',
        ],
    ]) ?>

</div>
