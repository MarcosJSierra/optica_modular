<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Retiro;

/**
 * RetiroSearch represents the model behind the search form of `app\models\Retiro`.
 */
class RetiroSearch extends Retiro
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Bancos_id', 'Empleado_id'], 'integer'],
            [['Fecha', 'Nodocumento'], 'safe'],
            [['Monto'], 'number'],
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
        $query = Retiro::find();

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
            'Fecha' => $this->Fecha,
            'Monto' => $this->Monto,
            'Bancos_id' => $this->Bancos_id,
            'Empleado_id' => $this->Empleado_id,
        ]);

        $query->andFilterWhere(['like', 'Nodocumento', $this->Nodocumento]);

        return $dataProvider;
    }
}
