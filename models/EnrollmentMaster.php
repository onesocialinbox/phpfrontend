<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "enrollment_master".
 *
 * @property int $Id
 * @property string $Name
 * @property string $FatherName
 * @property string $DateOfBirth
 * @property string $Phone
 * @property string $Email
 * @property string $ApplicationFormId
 * @property string $chgd_dt
 * @property int $chgd_by
 */
class EnrollmentMaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enrollment_master';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id','Name', 'FatherName', 'DateOfBirth', 'Phone', 'Email', 'ApplicationFormId'], 'required'],
            [['DateOfBirth', 'chgd_dt'], 'safe'],
            [['chgd_by'], 'integer'],
            [['Name', 'FatherName'], 'string', 'max' => 40],
            [['Phone'], 'string', 'max' => 10],
            [['Email'], 'string', 'max' => 30],
            [['ApplicationFormId'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Name' => 'Name',
            'FatherName' => 'Father Name',
            'DateOfBirth' => 'Date Of Birth',
            'Phone' => 'Phone',
            'Email' => 'Email',
            'ApplicationFormId' => 'Application Form ID',
            'chgd_dt' => 'Chgd Dt',
            'chgd_by' => 'Chgd By',
        ];
    }
}
