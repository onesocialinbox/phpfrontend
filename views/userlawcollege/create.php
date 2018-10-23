<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\userlawcollege */

$this->title = 'Create Userlawcollege';
$this->params['breadcrumbs'][] = ['label' => 'Userlawcolleges', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <h2 class="mb-4"><?= Html::encode($this->title) ?></h2>

    <div class="card mb-4">
		<div class="card-header bg-white font-weight-bold">
	        Basic Form
	    </div>

	    <?= $this->render('_form', [
	        'model' => $model,
	        'userid' => $userid,
	    ]) ?>
	</div>
