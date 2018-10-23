<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Employmentform;

/**
 * employmentformSearch represents the model behind the search form of `app\models\employmentform`.
 */
class EmploymentformSearch extends Employmentform
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'yearsOfService'], 'integer'],
            [['companyname', 'lastworkingDate', 'city', 'natureofEmployment'], 'safe'],
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
        $query = Employmentform::find();

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
            'lastworkingDate' => $this->lastworkingDate,
            'yearsOfService' => $this->yearsOfService,
        ]);

        $query->andFilterWhere(['like', 'companyname', $this->companyname])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'natureofEmployment', $this->natureofEmployment]);

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

        $query = Employmentform::find();

        // add conditions that should always apply here
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        

        $query->orFilterWhere(['like','id',  $params['advsearch']])
            ->orFilterWhere(['like', 'companyname', $params['advsearch']])
            ->orFilterWhere(['like', 'lastworkingDate', $params['advsearch']])
            ->orFilterWhere(['like', 'city', $params['advsearch']])
            ->orFilterWhere(['like', 'natureofEmployment', $params['advsearch']])
            ->orFilterWhere(['like', 'yearsOfService', $params['advsearch']]);

        return $dataProvider;
    }
}
