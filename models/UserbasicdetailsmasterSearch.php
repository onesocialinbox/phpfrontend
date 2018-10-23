<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Userbasicdetailsmaster;

/**
 * UserbasicdetailsmasterSearch represents the model behind the search form of `app\models\Userbasicdetailsmaster`.
 */
class UserbasicdetailsmasterSearch extends Userbasicdetailsmaster
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'AIBE', 'casePending'], 'integer'],
            [['AlternatePhoneNumber', 'community', 'bloodGroup', 'barAssociation', 'gender', 'convictionDetails', 'remarks', 'toBeMovedBy', 'uniqueGovtID', 'uniqueGovtId_type_cd'], 'safe'],
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
        $query = Userbasicdetailsmaster::find();

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
            'AIBE' => $this->AIBE,
            'casePending' => $this->casePending,
        ]);

        $query->andFilterWhere(['like', 'AlternatePhoneNumber', $this->AlternatePhoneNumber])
            ->andFilterWhere(['like', 'community', $this->community])
            ->andFilterWhere(['like', 'bloodGroup', $this->bloodGroup])
            ->andFilterWhere(['like', 'barAssociation', $this->barAssociation])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'convictionDetails', $this->convictionDetails])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'toBeMovedBy', $this->toBeMovedBy])
            ->andFilterWhere(['like', 'uniqueGovtID', $this->uniqueGovtID])
            ->andFilterWhere(['like', 'uniqueGovtId_type_cd', $this->uniqueGovtId_type_cd]);

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

        $query = Userbasicdetailsmaster::find();

        // add conditions that should always apply here
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        

        $query->orFilterWhere(['like','ID',  $params['advsearch']])
            ->orFilterWhere(['like', 'AIBE', $params['advsearch']])
            ->orFilterWhere(['like', 'AlternatePhoneNumber', $params['advsearch']])
            ->orFilterWhere(['like', 'community', $params['advsearch']])
            ->orFilterWhere(['like', 'bloodGroup', $params['advsearch']])
            ->orFilterWhere(['like', 'barAssociation', $params['advsearch']])
            ->orFilterWhere(['like', 'gender', $params['advsearch']])
            ->orFilterWhere(['like', 'casePending', $params['advsearch']])
            ->orFilterWhere(['like', 'convictionDetails', $params['advsearch']])
            ->orFilterWhere(['like', 'remarks', $params['advsearch']])
            ->orFilterWhere(['like', 'toBeMovedBy', $params['advsearch']])
            ->orFilterWhere(['like', 'uniqueGovtID', $params['advsearch']])
            ->orFilterWhere(['like', 'uniqueGovtId_type_cd', $params['advsearch']]);

        return $dataProvider;
    }
}
