<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employmentform".
 *
 * @property int $id
 * @property string $companyname
 * @property string $lastworkingDate
 * @property string $city
 * @property string $natureofEmployment
 * @property int $yearsOfService
 */
class Employmentform extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employmentform';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id','user_id', 'companyname', 'lastworkingDate', 'city', 'natureofEmployment', 'yearsOfService'], 'required'],
            [['id', 'yearsOfService'], 'integer'],
            [['lastworkingDate'], 'safe'],
            [['companyname'], 'string', 'max' => 40],
            [['city'], 'string', 'max' => 30],
            [['natureofEmployment'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'companyname' => 'Companyname',
            'lastworkingDate' => 'Lastworking Date',
            'city' => 'City',
            'natureofEmployment' => 'Natureof Employment',
            'yearsOfService' => 'Years Of Service',
        ];
    }
}
