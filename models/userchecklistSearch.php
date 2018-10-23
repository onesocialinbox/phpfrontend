<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\userchecklist;

/**
 * userchecklistSearch represents the model behind the search form of `app\models\userchecklist`.
 */
class userchecklistSearch extends userchecklist
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'affidavitUploaded', 'affidavitdocId', 'photoUploaded', 'photoDocID', 'form1Uploaded', 'form1DocID', 'form2Uploaded', 'form2DocID', 'form3Uploaded', 'form3DocID', 'form4Uploaded', 'form4DocID', 'form5Uploaded', 'form5DocID', 'form6Uploaded', 'form6DocID', 'formRule40Uploaded', 'formRule40DocID', 'provisionalCertification', 'provisionalCertDocId', 'communityCertificate', 'communityCertDocId'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = userchecklist::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID' => $this->ID,
            'affidavitUploaded' => $this->affidavitUploaded,
            'affidavitdocId' => $this->affidavitdocId,
            'photoUploaded' => $this->photoUploaded,
            'photoDocID' => $this->photoDocID,
            'form1Uploaded' => $this->form1Uploaded,
            'form1DocID' => $this->form1DocID,
            'form2Uploaded' => $this->form2Uploaded,
            'form2DocID' => $this->form2DocID,
            'form3Uploaded' => $this->form3Uploaded,
            'form3DocID' => $this->form3DocID,
            'form4Uploaded' => $this->form4Uploaded,
            'form4DocID' => $this->form4DocID,
            'form5Uploaded' => $this->form5Uploaded,
            'form5DocID' => $this->form5DocID,
            'form6Uploaded' => $this->form6Uploaded,
            'form6DocID' => $this->form6DocID,
            'formRule40Uploaded' => $this->formRule40Uploaded,
            'formRule40DocID' => $this->formRule40DocID,
            'provisionalCertification' => $this->provisionalCertification,
            'provisionalCertDocId' => $this->provisionalCertDocId,
            'communityCertificate' => $this->communityCertificate,
            'communityCertDocId' => $this->communityCertDocId,
        ]);

        return $dataProvider;
    }

    /**
     * Creates data provider instance with Advance search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function advanceSearch($params)
    {
        $query = userchecklist::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

         // grid filtering conditions
        $query->orFilterWhere(['like','ID',  $params['advsearch']])
            ->orFilterWhere(['like', 'affidavitUploaded', $params['advsearch']])
            ->orFilterWhere(['like', 'affidavitdocId', $params['advsearch']])
            ->orFilterWhere(['like', 'photoUploaded', $params['advsearch']])
            ->orFilterWhere(['like', 'photoDocID', $params['advsearch']])
            ->orFilterWhere(['like', 'form1Uploaded', $params['advsearch']])
            ->orFilterWhere(['like', 'form1DocID', $params['advsearch']])
            ->orFilterWhere(['like', 'form2Uploaded', $params['advsearch']])
            ->orFilterWhere(['like', 'form2DocID', $params['advsearch']])
            ->orFilterWhere(['like', 'form3Uploaded', $params['advsearch']])
            ->orFilterWhere(['like', 'form3DocID', $params['advsearch']])
            ->orFilterWhere(['like', 'form4Uploaded', $params['advsearch']])
            ->orFilterWhere(['like', 'form4DocID', $params['advsearch']])
            ->orFilterWhere(['like', 'form5Uploaded', $params['advsearch']])
            ->orFilterWhere(['like', 'form5DocID', $params['advsearch']])
            ->orFilterWhere(['like', 'form6Uploaded', $params['advsearch']])
            ->orFilterWhere(['like', 'form6DocID', $params['advsearch']])
            ->orFilterWhere(['like', 'formRule40Uploaded', $params['advsearch']])
            ->orFilterWhere(['like', 'formRule40DocID', $params['advsearch']])
            ->orFilterWhere(['like', 'provisionalCertification', $params['advsearch']])
            ->orFilterWhere(['like', 'provisionalCertDocId', $params['advsearch']])
            ->orFilterWhere(['like', 'communityCertificate', $params['advsearch']])
            ->orFilterWhere(['like', 'communityCertDocId', $params['advsearch']]);

        return $dataProvider;
    }
}
