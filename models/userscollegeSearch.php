<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\userscollege;

/**
 * userscollegeSearch represents the model behind the search form of `app\models\userscollege`.
 */
class userscollegeSearch extends userscollege
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'percentage'], 'integer'],
            [['degreeType', 'degree', 'year', 'university', 'college', 'specialization'], 'safe'],
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
        $query = userscollege::find();

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
            'year' => $this->year,
            'percentage' => $this->percentage,
        ]);

        $query->andFilterWhere(['like', 'degreeType', $this->degreeType])
            ->andFilterWhere(['like', 'degree', $this->degree])
            ->andFilterWhere(['like', 'university', $this->university])
            ->andFilterWhere(['like', 'college', $this->college])
            ->andFilterWhere(['like', 'specialization', $this->specialization]);

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
        $query = userscollege::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);


        // grid filtering conditions
        $query->orFilterWhere(['like','id',  $params['advsearch']])
            ->orFilterWhere(['like', 'degreeType', $params['advsearch']])
            ->orFilterWhere(['like', 'degree', $params['advsearch']])
            ->orFilterWhere(['like', 'year', $params['advsearch']])
            ->orFilterWhere(['like', 'university', $params['advsearch']])
            ->orFilterWhere(['like', 'college', $params['advsearch']])
            ->orFilterWhere(['like', 'specialization', $params['advsearch']])
            ->orFilterWhere(['like', 'percentage', $params['advsearch']]);

        return $dataProvider;
    
    }
}
