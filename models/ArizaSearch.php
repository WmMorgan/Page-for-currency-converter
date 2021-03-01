<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Arizalar;

/**
 * ArizaSearch represents the model behind the search form of `app\models\Arizalar`.
 */
class ArizaSearch extends Arizalar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'age'], 'integer'],
            [['name', 'familyname', 'address', 'countryoforigin', 'email', 'phonenumber', 'hired', 'status', 'suhbatvaqti_note'], 'safe'],
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
        $query = Arizalar::find();

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
            'age' => $this->age,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'familyname', $this->familyname])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'countryoforigin', $this->countryoforigin])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phonenumber', $this->phonenumber])
            ->andFilterWhere(['like', 'hired', $this->hired])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'suhbatvaqti_note', $this->suhbatvaqti_note]);

        return $dataProvider;
    }
}
