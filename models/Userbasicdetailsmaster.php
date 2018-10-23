<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userbasicdetailsmaster".
 *
 * @property int $ID
 * @property int $AIBE
 * @property string $AlternatePhoneNumber
 * @property string $community
 * @property string $bloodGroup
 * @property string $barAssociation
 * @property string $gender
 * @property int $casePending
 * @property string $convictionDetails
 * @property string $remarks
 * @property string $toBeMovedBy
 * @property string $uniqueGovtID
 * @property string $uniqueGovtId_type_cd
 */
class Userbasicdetailsmaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'userbasicdetailsmaster';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID','user_id', 'AIBE', 'AlternatePhoneNumber', 'community', 'bloodGroup', 'barAssociation', 'gender', 'casePending', 'convictionDetails', 'remarks', 'toBeMovedBy', 'uniqueGovtID', 'uniqueGovtId_type_cd'], 'required'],
            [['ID', 'AIBE', 'casePending'], 'integer'],
            [['AlternatePhoneNumber', 'community', 'bloodGroup', 'gender', 'uniqueGovtId_type_cd'], 'string', 'max' => 10],
            [['barAssociation'], 'string', 'max' => 20],
            [['convictionDetails', 'remarks'], 'string', 'max' => 100],
            [['toBeMovedBy'], 'string', 'max' => 40],
            [['uniqueGovtID'], 'string', 'max' => 15],
            [['ID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'AIBE' => 'A I B E',
            'AlternatePhoneNumber' => 'Alternate Phone Number',
            'community' => 'Community',
            'bloodGroup' => 'Blood Group',
            'barAssociation' => 'Bar Association',
            'gender' => 'Gender',
            'casePending' => 'Case Pending',
            'convictionDetails' => 'Conviction Details',
            'remarks' => 'Remarks',
            'toBeMovedBy' => 'To Be Moved By',
            'uniqueGovtID' => 'Unique Govt I D',
            'uniqueGovtId_type_cd' => 'Unique Govt Id Type Cd',
        ];
    }
}
