<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "USER_CHECKLIST_MASTER".
 *
 * @property int $ID
 * @property int $affidavitUploaded
 * @property int $affidavitdocId
 * @property int $photoUploaded
 * @property int $photoDocID
 * @property int $form1Uploaded
 * @property int $form1DocID
 * @property int $form2Uploaded
 * @property int $form2DocID
 * @property int $form3Uploaded
 * @property int $form3DocID
 * @property int $form4Uploaded
 * @property int $form4DocID
 * @property int $form5Uploaded
 * @property int $form5DocID
 * @property int $form6Uploaded
 * @property int $form6DocID
 * @property int $formRule40Uploaded
 * @property int $formRule40DocID
 * @property int $provisionalCertification
 * @property int $provisionalCertDocId
 * @property int $communityCertificate
 * @property int $communityCertDocId
 */
class userchecklist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'USER_CHECKLIST_MASTER';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID','user_id', 'affidavitUploaded', 'affidavitdocId', 'photoUploaded', 'photoDocID', 'form1Uploaded', 'form1DocID', 'form2Uploaded', 'form2DocID', 'form3Uploaded', 'form3DocID', 'form4Uploaded', 'form4DocID', 'form5Uploaded', 'form5DocID', 'form6Uploaded', 'form6DocID', 'formRule40Uploaded', 'formRule40DocID', 'provisionalCertification', 'provisionalCertDocId', 'communityCertificate', 'communityCertDocId'], 'required'],
            [['ID', 'affidavitUploaded', 'affidavitdocId', 'photoUploaded', 'photoDocID', 'form1Uploaded', 'form1DocID', 'form2Uploaded', 'form2DocID', 'form3Uploaded', 'form3DocID', 'form4Uploaded', 'form4DocID', 'form5Uploaded', 'form5DocID', 'form6Uploaded', 'form6DocID', 'formRule40Uploaded', 'formRule40DocID', 'provisionalCertification', 'provisionalCertDocId', 'communityCertificate', 'communityCertDocId'], 'integer'],
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
            'affidavitUploaded' => 'Affidavit Uploaded',
            'affidavitdocId' => 'Affidavitdoc ID',
            'photoUploaded' => 'Photo Uploaded',
            'photoDocID' => 'Photo Doc I D',
            'form1Uploaded' => 'Form1 Uploaded',
            'form1DocID' => 'Form1 Doc I D',
            'form2Uploaded' => 'Form2 Uploaded',
            'form2DocID' => 'Form2 Doc I D',
            'form3Uploaded' => 'Form3 Uploaded',
            'form3DocID' => 'Form3 Doc I D',
            'form4Uploaded' => 'Form4 Uploaded',
            'form4DocID' => 'Form4 Doc I D',
            'form5Uploaded' => 'Form5 Uploaded',
            'form5DocID' => 'Form5 Doc I D',
            'form6Uploaded' => 'Form6 Uploaded',
            'form6DocID' => 'Form6 Doc I D',
            'formRule40Uploaded' => 'Form Rule40 Uploaded',
            'formRule40DocID' => 'Form Rule40 Doc I D',
            'provisionalCertification' => 'Provisional Certification',
            'provisionalCertDocId' => 'Provisional Cert Doc ID',
            'communityCertificate' => 'Community Certificate',
            'communityCertDocId' => 'Community Cert Doc ID',
        ];
    }
}
