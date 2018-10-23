<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\userschool */

$this->title = 'Update Userschool';
$this->params['breadcrumbs'][] = ['label' => 'Userschools', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
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
