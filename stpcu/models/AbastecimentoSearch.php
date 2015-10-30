<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Abastecimento;

/**
 * AbastecimentoSearch represents the model behind the search form about `app\models\Abastecimento`.
 */
class AbastecimentoSearch extends Abastecimento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_gasto', 'id_posto'], 'integer'],
            [['preco_litro'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Abastecimento::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_gasto' => $this->id_gasto,
            'preco_litro' => $this->preco_litro,
            'id_posto' => $this->id_posto,
        ]);

        return $dataProvider;
    }
}
