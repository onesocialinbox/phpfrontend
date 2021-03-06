<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Userstatusmaster */

$this->title = 'Update Userstatusmaster';
$this->params['breadcrumbs'][] = ['label' => 'Userstatusmasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<h2 class="mb-4"><?= Html::encode($this->title) ?></h2>

<div class="card mb-4">
	<div class="card-header bg-white font-weight-bold">
        Basic Form
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
