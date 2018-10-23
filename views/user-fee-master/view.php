<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UserFeeMaster */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Fee Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="user-fee-master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p> <?php /*
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        */ ?>
        <?php if($payresponse == null || $payresponse['status'] == 'failure') { ?>
        <form action="https://test.payu.in/_payment" id="payuForm" method="post">
            <input type="hidden" id="surl" name="surl" value="<?php echo $payMerch['surl']; ?>" />
            <input type="hidden" id="furl" name="furl" value="<?php echo $payMerch['furl']; ?>" />
            <input type="hidden" id="key" name="key" value="<?php echo Yii::$app->params['pum_Key']; ?>" />
            <input type="hidden" id="salt" name="salt" value="<?php echo Yii::$app->params['pum_Salt'] ?>" />
            <input type="hidden" id="txnid" name="txnid" value="<?php echo $payMerch['txnid'];?>" />
            <input type="hidden" id="amount" name="amount" value="<?php echo $payMerch['amount']; ?>" />
            <input type="hidden" id="productinfo" name="productinfo" value="<?php echo $payMerch['productinfo']; ?>" />
            <input type="hidden" id="firstname" name="firstname" value="<?php echo $payMerch['firstname']; ?>" />
            <input type="hidden" id="email" name="email" value="<?php echo $payMerch['email']; ?>" />
            <input type="hidden" id="phone" name="phone" value="<?php echo $payMerch['phone']; ?>" />
            <input type="hidden" id="hash" name="hash" value="<?php echo $payMerch['hash']; ?>" />
            
            <input type="submit" value="Pay Now" class="btn btn-success" />
        </form> 
    <?php } ?>
    </p>

    <?php if($payresponse != null) { ?>
            <p></p>
            <div class="alert alert-primary" role="alert">
                Your payment status: <?= $payresponse['status']; ?>
            </div>
        <?php } ?>   

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'enrollmentFees',
            'idFees',
            'registrationFees',
            'onlineFees',
            'otherFee1',
            'otherFee2',
            'otherFee3',
            'feeTotal'
        ],
    ]) ?>

</div>