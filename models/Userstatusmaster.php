<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "USER_STATUS_MASTER".
 *
 * @property int $ID user unique id
 * @property int $enrollmentStatus_cd Refer data sheet for values
 * @property int $applicationStatus_cd Refer data sheet for values
 * @property int $vmsStatus_cd Refer data sheet for values
 * @property int $documentVerificationStatus_cd Refer data sheet for values
 * @property int $directCallStatus_cd Refer data sheet for values
 * @property int $bgVerificationStatus_cd Refer data sheet for values
 * @property int $idCreationStatus_cd Refer data sheet for values
 * @property int $paymentStatus_cd Refer data sheet for values
 * @property int $secretaryCallStatus_cd Refer data sheet for values
 */
class Userstatusmaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'USER_STATUS_MASTER';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id','enrollmentStatus_cd', 'applicationStatus_cd', 'vmsStatus_cd', 'documentVerificationStatus_cd', 'directCallStatus_cd', 'bgVerificationStatus_cd', 'idCreationStatus_cd', 'paymentStatus_cd', 'secretaryCallStatus_cd'], 'required'],
            [['enrollmentStatus_cd', 'applicationStatus_cd', 'vmsStatus_cd', 'documentVerificationStatus_cd', 'directCallStatus_cd', 'bgVerificationStatus_cd', 'idCreationStatus_cd', 'paymentStatus_cd', 'secretaryCallStatus_cd'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'enrollmentStatus_cd' => 'Enrollment Status Cd',
            'applicationStatus_cd' => 'Application Status Cd',
            'vmsStatus_cd' => 'Vms Status Cd',
            'documentVerificationStatus_cd' => 'Document Verification Status Cd',
            'directCallStatus_cd' => 'Direct Call Status Cd',
            'bgVerificationStatus_cd' => 'Bg Verification Status Cd',
            'idCreationStatus_cd' => 'Id Creation Status Cd',
            'paymentStatus_cd' => 'Payment Status Cd',
            'secretaryCallStatus_cd' => 'Secretary Call Status Cd',
        ];
    }
}
