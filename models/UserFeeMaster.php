<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_fee_master".
 *
 * @property int $id
 * @property double $enrollmentFees
 * @property double $idFees
 * @property double $registrationFees
 * @property double $onlineFees
 * @property double $otherFee1
 * @property double $otherFee2
 * @property double $otherFee3
 */
class UserFeeMaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_fee_master';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id','enrollmentFees', 'idFees', 'registrationFees', 'onlineFees', 'otherFee1', 'otherFee2', 'otherFee3'], 'required'],
            [['enrollmentFees', 'idFees', 'registrationFees', 'onlineFees', 'otherFee1', 'otherFee2', 'otherFee3', 'feeTotal'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'enrollmentFees' => 'Enrollment Fees',
            'idFees' => 'Id Fees',
            'registrationFees' => 'Registration Fees',
            'onlineFees' => 'Online Fees',
            'otherFee1' => 'Other Fee1',
            'otherFee2' => 'Other Fee2',
            'otherFee3' => 'Other Fee3',
            'feeTotal' => 'Fee Total'
        ];
    }

    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }

        $this->feeTotal = $this->enrollmentFees + $this->idFees + $this->registrationFees + $this->onlineFees + $this->otherFee1 + $this->otherFee2 + $this->otherFee3;
        echo $this->feeTotal;
        return true;
    }
}
