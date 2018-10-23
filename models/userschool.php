<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "USER_SCHOOL_MASTER".
 *
 * @property int $id user unique id
 * @property string $sslcYear Month and year
 * @property string $sslcSchool
 * @property int $sslcMarks Percentage
 * @property string $sslcBoard
 * @property string $hscYear Month and year
 * @property string $hscSchool
 * @property int $hscMarks Percentage
 * @property string $hscBoard
 */
class userschool extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'USER_SCHOOL_MASTER';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id','sslcYear', 'sslcSchool', 'sslcMarks', 'sslcBoard', 'hscYear', 'hscSchool', 'hscMarks', 'hscBoard'], 'required'],
            [['sslcYear', 'hscYear'], 'safe'],
            [['sslcMarks', 'hscMarks'], 'integer'],
            [['sslcSchool', 'hscSchool'], 'string', 'max' => 40],
            [['sslcBoard', 'hscBoard'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sslcYear' => 'Sslc Year',
            'sslcSchool' => 'Sslc School',
            'sslcMarks' => 'Sslc Marks',
            'sslcBoard' => 'Sslc Board',
            'hscYear' => 'Hsc Year',
            'hscSchool' => 'Hsc School',
            'hscMarks' => 'Hsc Marks',
            'hscBoard' => 'Hsc Board',
        ];
    }
}
