<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AddressForm;

/**
 * AddressFormSearch represents the model behind the search form of `app\models\AddressForm`.
 */
class AddressFormSearch extends AddressForm
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['permanentAddress1', 'permanentAddress2', 'permanentAddress3', 'permanentAddress4', 'permanentCity', 'permanentState', 'permanentDistrict', 'permanentPincode', 'communicationAddress1', 'communicationAddress2', 'communicationAddress3', 'communicationAddress4', 'communicationCity', 'communicationState', 'communicationDistrict', 'communicationPincode'], 'safe'],
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
        $query = AddressForm::find();

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
        ]);

        $query->andFilterWhere(['like', 'permanentAddress1', $this->permanentAddress1])
            ->andFilterWhere(['like', 'permanentAddress2', $this->permanentAddress2])
            ->andFilterWhere(['like', 'permanentAddress3', $this->permanentAddress3])
            ->andFilterWhere(['like', 'permanentAddress4', $this->permanentAddress4])
            ->andFilterWhere(['like', 'permanentCity', $this->permanentCity])
            ->andFilterWhere(['like', 'permanentState', $this->permanentState])
            ->andFilterWhere(['like', 'permanentDistrict', $this->permanentDistrict])
            ->andFilterWhere(['like', 'permanentPincode', $this->permanentPincode])
            ->andFilterWhere(['like', 'communicationAddress1', $this->communicationAddress1])
            ->andFilterWhere(['like', 'communicationAddress2', $this->communicationAddress2])
            ->andFilterWhere(['like', 'communicationAddress3', $this->communicationAddress3])
            ->andFilterWhere(['like', 'communicationAddress4', $this->communicationAddress4])
            ->andFilterWhere(['like', 'communicationCity', $this->communicationCity])
            ->andFilterWhere(['like', 'communicationState', $this->communicationState])
            ->andFilterWhere(['like', 'communicationDistrict', $this->communicationDistrict])
            ->andFilterWhere(['like', 'communicationPincode', $this->communicationPincode]);

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

        $query = AddressForm::find();

        // add conditions that should always apply here
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        

        $query->orFilterWhere(['like','ID',  $params['advsearch']])
            ->orFilterWhere(['like', 'permanentAddress1', $params['advsearch']])
            ->orFilterWhere(['like', 'permanentAddress2', $params['advsearch']])
            ->orFilterWhere(['like', 'permanentAddress3', $params['advsearch']])
            ->orFilterWhere(['like', 'permanentAddress4', $params['advsearch']])
            ->orFilterWhere(['like', 'permanentCity', $params['advsearch']])
            ->orFilterWhere(['like', 'permanentState', $params['advsearch']])
            ->orFilterWhere(['like', 'permanentDistrict', $params['advsearch']])
            ->orFilterWhere(['like', 'permanentPincode', $params['advsearch']])
            ->orFilterWhere(['like', 'communicationAddress1', $params['advsearch']])
            ->orFilterWhere(['like', 'communicationAddress2', $params['advsearch']])
            ->orFilterWhere(['like', 'communicationAddress3', $params['advsearch']])
            ->orFilterWhere(['like', 'communicationAddress4', $params['advsearch']])
            ->orFilterWhere(['like', 'communicationCity', $params['advsearch']])
            ->orFilterWhere(['like', 'communicationState', $params['advsearch']])
            ->orFilterWhere(['like', 'communicationDistrict', $params['advsearch']])
            ->orFilterWhere(['like', 'communicationPincode', $params['advsearch']]);

        return $dataProvider;
    }
}
