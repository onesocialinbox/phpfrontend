<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EnrollmentMaster;

/**
 * EnrollmentMasterSearch represents the model behind the search form of `app\models\EnrollmentMaster`.
 */
class EnrollmentMasterSearch extends EnrollmentMaster
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'chgd_by'], 'integer'],
            [['Name', 'FatherName', 'DateOfBirth', 'Phone', 'Email', 'ApplicationFormId', 'chgd_dt'], 'safe'],
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
        $query = EnrollmentMaster::find();

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
            'Id' => $this->Id,
            'DateOfBirth' => $this->DateOfBirth,
            'chgd_dt' => $this->chgd_dt,
            'chgd_by' => $this->chgd_by,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'FatherName', $this->FatherName])
            ->andFilterWhere(['like', 'Phone', $this->Phone])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'ApplicationFormId', $this->ApplicationFormId]);

        return $dataProvider;
    }

     /**
     * Creates data provider instance with advance search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function advanceSearch($params){

        $query = EnrollmentMaster::find();

        // add conditions that should always apply here
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        

        $query->orFilterWhere(['like','id',  $params['advsearch']])
            ->orFilterWhere(['like', 'Name', $params['advsearch']])
            ->orFilterWhere(['like', 'FatherName', $params['advsearch']])
            ->orFilterWhere(['like', 'DateOfBirth', $params['advsearch']])
            ->orFilterWhere(['like', 'Phone', $params['advsearch']])
            ->orFilterWhere(['like', 'Email', $params['advsearch']])
            ->orFilterWhere(['like', 'ApplicationFormId', $params['advsearch']])
            ->orFilterWhere(['like', 'chgd_dt', $params['advsearch']])
            ->orFilterWhere(['like', 'chgd_by', $params['advsearch']]);

        return $dataProvider;
    }
}
