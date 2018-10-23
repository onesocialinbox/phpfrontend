<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\userscollege */

$this->title = 'Create Userscollege';
$this->params['breadcrumbs'][] = ['label' => 'Userscolleges', 'url' => ['index']];
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
