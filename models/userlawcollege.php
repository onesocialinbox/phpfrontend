<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "USER_LAW_COLLEGE_MASTER".
 *
 * @property int $id
 * @property string $lawDegree
 * @property string $lawUniversity
 * @property string $lawCollege
 * @property string $lawUniversityPlace
 * @property string $lawCollegePlace
 * @property string $lawYearOfPassing
 * @property string $lawRollNo
 * @property string $lawCourseType
 * @property int $lawCourseDuration
 * @property string $provisionalCertNumber
 */
class userlawcollege extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'USER_LAW_COLLEGE_MASTER';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id','lawDegree', 'lawUniversity', 'lawCollege', 'lawUniversityPlace', 'lawCollegePlace', 'lawYearOfPassing', 'lawRollNo', 'lawCourseType', 'lawCourseDuration', 'provisionalCertNumber'], 'required'],
            [['lawYearOfPassing'], 'safe'],
            [['lawCourseDuration'], 'integer'],
            [['lawDegree', 'lawRollNo', 'lawCourseType'], 'string', 'max' => 10],
            [['lawUniversity', 'lawCollege', 'lawUniversityPlace'], 'string', 'max' => 50],
            [['lawCollegePlace'], 'string', 'max' => 20],
            [['provisionalCertNumber'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lawDegree' => 'Law Degree',
            'lawUniversity' => 'Law University',
            'lawCollege' => 'Law College',
            'lawUniversityPlace' => 'Law University Place',
            'lawCollegePlace' => 'Law College Place',
            'lawYearOfPassing' => 'Law Year Of Passing',
            'lawRollNo' => 'Law Roll No',
            'lawCourseType' => 'Law Course Type',
            'lawCourseDuration' => 'Law Course Duration',
            'provisionalCertNumber' => 'Provisional Cert Number',
        ];
    }
}
