<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "USER_LAW_ADDRESS_MASTER".
 *
 * @property int $ID user unique id
 * @property string $permanentAddress1
 * @property string $permanentAddress2
 * @property string $permanentAddress3
 * @property string $permanentAddress4
 * @property string $permanentCity
 * @property string $permanentState
 * @property string $permanentDistrict
 * @property string $permanentPincode
 * @property string $communicationAddress1
 * @property string $communicationAddress2
 * @property string $communicationAddress3
 * @property string $communicationAddress4
 * @property string $communicationCity
 * @property string $communicationState
 * @property string $communicationDistrict
 * @property string $communicationPincode
 */
class AddressForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'USER_LAW_ADDRESS_MASTER';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id','permanentAddress1', 'permanentAddress2', 'permanentAddress3', 'permanentAddress4', 'permanentCity', 'permanentState', 'permanentDistrict', 'permanentPincode', 'communicationAddress1', 'communicationAddress2', 'communicationAddress3', 'communicationAddress4', 'communicationCity', 'communicationState', 'communicationDistrict', 'communicationPincode'], 'required'],
            [['permanentAddress1', 'permanentAddress2', 'permanentAddress3', 'permanentAddress4', 'permanentCity', 'communicationAddress1', 'communicationAddress2', 'communicationAddress3', 'communicationAddress4', 'communicationCity'], 'string', 'max' => 40],
            [['permanentState', 'communicationState'], 'string', 'max' => 20],
            [['permanentDistrict', 'communicationDistrict'], 'string', 'max' => 30],
            [['permanentPincode', 'communicationPincode'], 'string', 'max' => 6],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'permanentAddress1' => 'Permanent Address1',
            'permanentAddress2' => 'Permanent Address2',
            'permanentAddress3' => 'Permanent Address3',
            'permanentAddress4' => 'Permanent Address4',
            'permanentCity' => 'Permanent City',
            'permanentState' => 'Permanent State',
            'permanentDistrict' => 'Permanent District',
            'permanentPincode' => 'Permanent Pincode',
            'communicationAddress1' => 'Communication Address1',
            'communicationAddress2' => 'Communication Address2',
            'communicationAddress3' => 'Communication Address3',
            'communicationAddress4' => 'Communication Address4',
            'communicationCity' => 'Communication City',
            'communicationState' => 'Communication State',
            'communicationDistrict' => 'Communication District',
            'communicationPincode' => 'Communication Pincode',
        ];
    }
}
