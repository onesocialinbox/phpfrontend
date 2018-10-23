<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Userstatusmaster;

/**
 * UserstatusmasterSearch represents the model behind the search form of `app\models\Userstatusmaster`.
 */
class UserstatusmasterSearch extends Userstatusmaster
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'enrollmentStatus_cd', 'applicationStatus_cd', 'vmsStatus_cd', 'documentVerificationStatus_cd', 'directCallStatus_cd', 'bgVerificationStatus_cd', 'idCreationStatus_cd', 'paymentStatus_cd', 'secretaryCallStatus_cd'], 'integer'],
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
        $query = Userstatusmaster::find();

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
            'enrollmentStatus_cd' => $this->enrollmentStatus_cd,
            'applicationStatus_cd' => $this->applicationStatus_cd,
            'vmsStatus_cd' => $this->vmsStatus_cd,
            'documentVerificationStatus_cd' => $this->documentVerificationStatus_cd,
            'directCallStatus_cd' => $this->directCallStatus_cd,
            'bgVerificationStatus_cd' => $this->bgVerificationStatus_cd,
            'idCreationStatus_cd' => $this->idCreationStatus_cd,
            'paymentStatus_cd' => $this->paymentStatus_cd,
            'secretaryCallStatus_cd' => $this->secretaryCallStatus_cd,
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
        $query = Userstatusmaster::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);


        // grid filtering conditions
        $query->orFilterWhere(['like','ID',  $params['advsearch']])
            ->orFilterWhere(['like', 'enrollmentStatus_cd', $params['advsearch']])
            ->orFilterWhere(['like', 'applicationStatus_cd', $params['advsearch']])
            ->orFilterWhere(['like', 'vmsStatus_cd', $params['advsearch']])
            ->orFilterWhere(['like', 'documentVerificationStatus_cd', $params['advsearch']])
            ->orFilterWhere(['like', 'directCallStatus_cd', $params['advsearch']])
            ->orFilterWhere(['like', 'bgVerificationStatus_cd', $params['advsearch']])
            ->orFilterWhere(['like', 'idCreationStatus_cd', $params['advsearch']])
            ->orFilterWhere(['like', 'paymentStatus_cd', $params['advsearch']])
            ->orFilterWhere(['like', 'secretaryCallStatus_cd', $params['advsearch']]);

        return $dataProvider;
    
    }
}
