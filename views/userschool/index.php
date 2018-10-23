<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $searchModel app\models\userschoolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Userschools';
$this->params['breadcrumbs'][] = $this->title;
?>


<h2 class="mb-4"><?= Html::encode($this->title) ?></h2>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<div class="card mb-4">
    <div class="card-body">
        <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-12 col-md-6"></div>
                <div class="col-sm-12 col-md-6">
                    <p class="float-right">
                        <?= Html::a('Create Userschool', ['create'], ['class' => 'btn btn-primary']) ?>
                    </p>
                </div>
            </div>
            <?php ActiveForm::begin(); ?>
                <div class="row">
                <div class="col-sm-12 col-md-6 ">
                    <input placeholder="" type="text" name="advsearch" class="form-control" value="<?=$_REQUEST['advsearch']?>">
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <?= Html::submitButton('Search', ['class' => 'btn btn-primary', 'style'=>'width:25%']) ?>                  
                </div>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
            <div class="row">
                                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        // 'filterModel' => $searchModel,
        'columns' => [
                            

                            'id',
            'sslcYear',
            'sslcSchool',
            'sslcMarks',
            'sslcBoard',
            //'hscYear',
            //'hscSchool',
            //'hscMarks',
            //'hscBoard',

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                        'options' => ['class' => 'col-sm-12'],
                        'tableOptions' => [
                            'class' => 'table table-hover dataTable no-footer dtr-inline',
                            'cellspacing' => '0',
                            'width' => '100%',
                            'role' => 'grid',
                            'aria-describedby' => 'example_info',
                            'style' => 'width: 100%;'
                        ],
                        'showFooter'=>TRUE,
                        'layout' => '{items}{pager}',

                    ]); ?>
                                            </div>
        </div>
    </div>
</div>
