<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
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
                        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-primary']) ?>
                    </p>
                </div>
            </div>

            <div class="row">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    //'layout' => '{items}{pager}',
                    'columns' => [
                        'id',
                        'username',
                        'email:email',
                        [
                            'class' => 'yii\grid\ActionColumn',
                            'header'=>'Actions',
                            'template' => '{update} {delete}',
                            'buttons' =>
                            [
                                'update' => function ($url, $model) {
                                    return Html::a('<i class="fa fa-fw fa-edit"></i>', $url, [
                                        'title' => Yii::t('app', 'Edit'),
                                        'class'=>'btn btn-icon btn-pill btn-primary',                                  
                                    ]);
                                },
                                'delete' => function ($url, $model) {
                                    return Html::a('<i class="fa fa-fw fa-trash"></i>', $url, [
                                        'title' => Yii::t('app', 'Delete'),
                                        'class'=>'btn btn-icon btn-pill btn-danger',                                  
                                    ]);
                                },
                            ]
                        ],
                        //'password',
                        //'authKey',
                        //'password_reset_token',
                        //'user_level',
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
