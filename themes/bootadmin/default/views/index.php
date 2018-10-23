<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();

echo "<?php\n";
?>

use yii\helpers\Html;
use <?= $generator->indexWidgetType === 'grid' ? "yii\\grid\\GridView" : "yii\\widgets\\ListView" ?>;
<?= $generator->enablePjax ? 'use yii\widgets\Pjax;' : '' ?>

/* @var $this yii\web\View */
<?= !empty($generator->searchModelClass) ? "/* @var \$searchModel " . ltrim($generator->searchModelClass, '\\') . " */\n" : '' ?>
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>;
$this->params['breadcrumbs'][] = $this->title;
?>


<h2 class="mb-4"><?= "<?= " ?>Html::encode($this->title) ?></h2>
<?= $generator->enablePjax ? "    <?php Pjax::begin(); ?>\n" : '' ?>
<?php if(!empty($generator->searchModelClass)): ?>
<?= "    <?php " . ($generator->indexWidgetType === 'grid' ? "// " : "") ?>echo $this->render('_search', ['model' => $searchModel]); ?>
<?php endif; ?>

<div class="card mb-4">
    <div class="card-body">
        <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-12 col-md-6"></div>
                <div class="col-sm-12 col-md-6">
                    <p class="float-right">
                        <?= "<?= " ?>Html::a(<?= $generator->generateString('Create ' . Inflector::camel2words(StringHelper::basename($generator->modelClass))) ?>, ['create'], ['class' => 'btn btn-primary']) ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <?php if ($generator->indexWidgetType === 'grid'): ?>
                    <?= "<?= " ?>GridView::widget([
                        'dataProvider' => $dataProvider,
                        <?= !empty($generator->searchModelClass) ? "'filterModel' => \$searchModel,\n        'columns' => [\n" : "'columns' => [\n"; ?>
                            

                <?php
                $count = 0;
                if (($tableSchema = $generator->getTableSchema()) === false) {
                    foreach ($generator->getColumnNames() as $name) {
                        if (++$count < 6) {
                            echo "            '" . $name . "',\n";
                        } else {
                            echo "            //'" . $name . "',\n";
                        }
                    }
                } else {
                    foreach ($tableSchema->columns as $column) {
                        $format = $generator->generateColumnFormat($column);
                        if (++$count < 6) {
                            echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
                        } else {
                            echo "            //'" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
                        }
                    }
                }
                ?>

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
                                    return Html::a('<i class="fa fa-fw fa-trash"></i>', ['delete', 'id' => $model->id], [
                                        'class' => 'btn btn-icon btn-pill btn-danger',
                                        'data' => [
                                            'confirm' => 'Are you sure? You want to remove the data?.',
                                            'method' => 'post',
                                            ],
                                        ]);
                                    },
                                ]

                            ],
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
                <?php else: ?>
                    <?= "<?= " ?>ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemOptions' => ['class' => 'item'],
                        'itemView' => function ($model, $key, $index, $widget) {
                            return Html::a(Html::encode($model-><?= $nameAttribute ?>), ['view', <?= $urlParams ?>]);
                        },
                    ]) ?>
                <?php endif; ?>
                <?= $generator->enablePjax ? "    <?php Pjax::end(); ?>\n" : '' ?>
            </div>
        </div>
    </div>
</div>
