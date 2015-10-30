<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Manutencao;

/**
 * ManutencaoSearch represents the model behind the search form about `app\models\Manutencao`.
 */
class ManutencaoSearch extends Manutencao
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_gasto'], 'integer'],
            [['data_entrada', 'servico', 'data_saida', 'tipo'], 'safe'],
            [['custo'], 'number'],
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
        $query = Manutencao::find();

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
            'data_entrada' => $this->data_entrada,
            'custo' => $this->custo,
            'data_saida' => $this->data_saida,
        ]);

        $query->andFilterWhere(['like', 'servico', $this->servico])
            ->andFilterWhere(['like', 'tipo', $this->tipo]);

        return $dataProvider;
    }
}
