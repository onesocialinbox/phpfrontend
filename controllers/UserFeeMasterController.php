<?php

namespace app\controllers;

use Yii;
use app\models\UserFeeMaster;
use app\models\UserFeeMasterSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UrlManager;

/**
 * UserFeeMasterController implements the CRUD actions for UserFeeMaster model.
 */
class UserFeeMasterController extends Controller
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

    public function beforeAction($action)
    {            
        if ($action->id == 'view') {
            $this->enableCsrfValidation = false;
        }

        return parent::beforeAction($action);
    }

    /**
     * Lists all UserFeeMaster models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserFeeMasterSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UserFeeMaster model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $payresponse = null;
        if(Yii::$app->request->post()) {
            $payresponse = $_POST;
        }
        return $this->render('view', [
            'model' => $model,
            'payMerch' => $this->paymentUMoney($model),
            'payresponse'  => $payresponse,
        ]);
    }

    /**
     * Creates a new UserFeeMaster model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UserFeeMaster();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            //$this->paymentUMoney($model);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'userid' => Yii::$app->user->id,
        ]);
    }

    public function paymentUMoney($model) {
        $surl = Yii::$app->urlManager->createAbsoluteUrl(['user-fee-master/view', 'id' => $model->id]);
        $furl = Yii::$app->urlManager->createAbsoluteUrl(['user-fee-master/view', 'id' => $model->id]);

        $payMerch = array(
            'key' => Yii::$app->params['pum_Key'],
            'txnid' => substr(hash('sha256', mt_rand() . microtime()), 0, 20),
            'amount' => $model->feeTotal,
            'firstname' => 'testFirstName',
            'email' => 'testEmail@email.com',
            'phone' => '999999999',
            'productinfo' => 'Lawfirm PayU',
            'surl' => $surl,
            'furl' => $furl,
            'salt' => Yii::$app->params['pum_Salt'],
            //'service_provider' => Yii::$app->params['pum_ServiceProvider']
        );

        $hash=hash('sha512', $payMerch["key"].'|'.$payMerch["txnid"].'|'.$payMerch["amount"].'|'.$payMerch["productinfo"].'|'.$payMerch["firstname"].'|'.$payMerch["email"].'|||||||||||'.$payMerch["salt"]);
        $payMerch['hash'] = $hash;
        return $payMerch;
        //echo Yii::$app->params['pum_ApiUrl'];

        //print_r($payMerch);
        /*$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,Yii::$app->params['pum_ApiUrl']);
        //curl_setopt($ch, CURLOPT_URL, "https://www.google.com");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/x-www-form-urlencoded'));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payMerch);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);*/


        /*$ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payMerch);
        curl_setopt($ch, CURLOPT_URL, Yii::$app->params['pum_ApiUrl']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('authorization: OLUNpU2tHfbBwu1XqlrDoy986FaKlInkgfd0LWlbqso='));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $server_output = curl_exec($ch);
        echo $server_output;

        echo 1; die();
        curl_close ($ch);   */    
    }

    /*public function actionPaystatus($id) {

        if(Yii::$app->request->post()) {
            print_r($_POST);
            return $this->render('view', [
                'model' => $model,
                'payMerch' => $this->paymentUMoney($model),
                'payresponse'  => null
            ]);
        }
    }*/


    /**
     * Updates an existing UserFeeMaster model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    /*public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //$this->paymentUMoney($model);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }*/

    /**
     * Deletes an existing UserFeeMaster model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    /*public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }*/

    /**
     * Finds the UserFeeMaster model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return UserFeeMaster the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UserFeeMaster::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
