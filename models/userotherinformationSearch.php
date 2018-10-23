<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\userotherinformation;

/**
 * userotherinformationSearch represents the model behind the search form of `app\models\userotherinformation`.
 */
class userotherinformationSearch extends userotherinformation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'isQualifiedSec24', 'previouslyApplied'], 'integer'],
            [['rejectReason', 'newspaperPublicationDate', 'newspaperPublished'], 'safe'],
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
        $query = userotherinformation::find();

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
            'isQualifiedSec24' => $this->isQualifiedSec24,
            'previouslyApplied' => $this->previouslyApplied,
            'newspaperPublicationDate' => $this->newspaperPublicationDate,
        ]);

        $query->andFilterWhere(['like', 'rejectReason', $this->rejectReason])
            ->andFilterWhere(['like', 'newspaperPublished', $this->newspaperPublished]);

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

        $query = userotherinformation::find();

        // add conditions that should always apply here
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        

        $query->orFilterWhere(['like','ID',  $params['advsearch']])
            ->orFilterWhere(['like', 'isQualifiedSec24', $params['advsearch']])
            ->orFilterWhere(['like', 'previouslyApplied', $params['advsearch']])
            ->orFilterWhere(['like', 'rejectReason', $params['advsearch']])
            ->orFilterWhere(['like', 'newspaperPublicationDate', $params['advsearch']])
            ->orFilterWhere(['like', 'newspaperPublished', $params['advsearch']]);

        return $dataProvider;
    }
}
