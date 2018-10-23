<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\userschool;

/**
 * userschoolSearch represents the model behind the search form of `app\models\userschool`.
 */
class userschoolSearch extends userschool
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sslcMarks', 'hscMarks'], 'integer'],
            [['sslcYear', 'sslcSchool', 'sslcBoard', 'hscYear', 'hscSchool', 'hscBoard'], 'safe'],
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
        $query = userschool::find();

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
            'id' => $this->id,
            'sslcYear' => $this->sslcYear,
            'sslcMarks' => $this->sslcMarks,
            'hscYear' => $this->hscYear,
            'hscMarks' => $this->hscMarks,
        ]);

        $query->andFilterWhere(['like', 'sslcSchool', $this->sslcSchool])
            ->andFilterWhere(['like', 'sslcBoard', $this->sslcBoard])
            ->andFilterWhere(['like', 'hscSchool', $this->hscSchool])
            ->andFilterWhere(['like', 'hscBoard', $this->hscBoard]);

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

        $query = userschool::find();

        // add conditions that should always apply here
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        

        $query->orFilterWhere(['like','id',  $params['advsearch']])
            ->orFilterWhere(['like', 'sslcYear', $params['advsearch']])
            ->orFilterWhere(['like', 'sslcSchool', $params['advsearch']])
            ->orFilterWhere(['like', 'sslcMarks', $params['advsearch']])
            ->orFilterWhere(['like', 'sslcBoard', $params['advsearch']])
            ->orFilterWhere(['like', 'hscYear', $params['advsearch']])
            ->orFilterWhere(['like', 'hscSchool', $params['advsearch']])
            ->orFilterWhere(['like', 'hscMarks', $params['advsearch']])
            ->orFilterWhere(['like', 'hscBoard', $params['advsearch']]);

        return $dataProvider;
    }
}
