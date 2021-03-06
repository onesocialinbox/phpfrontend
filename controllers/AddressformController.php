<?php

namespace app\controllers;

use Yii;
use app\models\AddressForm;
use app\models\AddressFormSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AddressFormController implements the CRUD actions for AddressForm model.
 */
class AddressformController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'ghost-access'=> [
                'class' => 'webvimark\modules\UserManagement\components\GhostAccessControl',
            ],
        ];
    }

    /**
     * Lists all AddressForm models.
     * @return mixed
     */
    public function actionIndex()
    { 

        $searchModel = new AddressFormSearch();
        //$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider = $searchModel->advanceSearch(Yii::$app->request->post());

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AddressForm model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AddressForm model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AddressForm();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        }

        return $this->render('create', [
            'model' => $model,
            'userid' => Yii::$app->user->id,
        ]);
    }

    /**
     * Updates an existing AddressForm model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AddressForm model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AddressForm model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AddressForm the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AddressForm::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

/**
     * Advance search
     * Finds the AddressForm model based on its search value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param may be id or name or any columen
     * @return AddressForm the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
 public function advancesearch()
    { exit('1');
        // $model = AddressForm::();
       
    }

}
