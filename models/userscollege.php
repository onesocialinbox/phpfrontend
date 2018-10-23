<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "USER_COLLEGE_MASTER".
 *
 * @property int $id user unique id
 * @property string $degreeType PG/UG
 * @property string $degree Name of Degree (BA /BE / Btech)
 * @property string $year Month and year
 * @property string $university Name of university
 * @property string $college Name of College
 * @property string $specialization Type (IT, Arts, History)
 * @property int $percentage Percentage
 */
class userscollege extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'USER_COLLEGE_MASTER';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id','user_id', 'degreeType', 'degree', 'year', 'university', 'college', 'specialization', 'percentage'], 'required'],
            [['id', 'percentage'], 'integer'],
            [['year'], 'safe'],
            [['degreeType'], 'string', 'max' => 2],
            [['degree'], 'string', 'max' => 10],
            [['university', 'college'], 'string', 'max' => 50],
            [['specialization'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'degreeType' => 'Degree Type',
            'degree' => 'Degree',
            'year' => 'Year',
            'university' => 'University',
            'college' => 'College',
            'specialization' => 'Specialization',
            'percentage' => 'Percentage',
        ];
    }
}
