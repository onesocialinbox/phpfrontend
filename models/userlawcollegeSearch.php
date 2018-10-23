<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\userlawcollege;

/**
 * userlawcollegeSearch represents the model behind the search form of `app\models\userlawcollege`.
 */
class userlawcollegeSearch extends userlawcollege
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'lawCourseDuration'], 'integer'],
            [['lawDegree', 'lawUniversity', 'lawCollege', 'lawUniversityPlace', 'lawCollegePlace', 'lawYearOfPassing', 'lawRollNo', 'lawCourseType', 'provisionalCertNumber'], 'safe'],
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
        $query = userlawcollege::find();

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
            'lawYearOfPassing' => $this->lawYearOfPassing,
            'lawCourseDuration' => $this->lawCourseDuration,
        ]);

        $query->andFilterWhere(['like', 'lawDegree', $this->lawDegree])
            ->andFilterWhere(['like', 'lawUniversity', $this->lawUniversity])
            ->andFilterWhere(['like', 'lawCollege', $this->lawCollege])
            ->andFilterWhere(['like', 'lawUniversityPlace', $this->lawUniversityPlace])
            ->andFilterWhere(['like', 'lawCollegePlace', $this->lawCollegePlace])
            ->andFilterWhere(['like', 'lawRollNo', $this->lawRollNo])
            ->andFilterWhere(['like', 'lawCourseType', $this->lawCourseType])
            ->andFilterWhere(['like', 'provisionalCertNumber', $this->provisionalCertNumber]);

        return $dataProvider;
    }
}
