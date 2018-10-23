<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userotherinformation".
 *
 * @property int $ID
 * @property int $isQualifiedSec24
 * @property int $previouslyApplied
 * @property string $rejectReason
 * @property string $newspaperPublicationDate
 * @property string $newspaperPublished
 */
class userotherinformation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'userotherinformation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID','user_id', 'isQualifiedSec24', 'previouslyApplied', 'rejectReason', 'newspaperPublicationDate', 'newspaperPublished'], 'required'],
            [['ID', 'isQualifiedSec24', 'previouslyApplied'], 'integer'],
            [['newspaperPublicationDate'], 'safe'],
            [['rejectReason'], 'string', 'max' => 40],
            [['newspaperPublished'], 'string', 'max' => 20],
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
            'isQualifiedSec24' => 'Is Qualified Sec24',
            'previouslyApplied' => 'Previously Applied',
            'rejectReason' => 'Reject Reason',
            'newspaperPublicationDate' => 'Newspaper Publication Date',
            'newspaperPublished' => 'Newspaper Published',
        ];
    }
}
