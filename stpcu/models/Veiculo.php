<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "veiculo".
 *
 * @property integer $renavam
 * @property string $cidade
 * @property string $chassi
 * @property integer $num_patrimonio
 * @property string $lotacao
 * @property string $status
 * @property string $observacao
 * @property string $adquirido_de
 * @property string $uf_atual
 * @property string $uf_anterior
 * @property integer $placa_atual
 * @property integer $placa_anterior
 * @property integer $potencia
 * @property integer $id_modelo
 * @property integer $id_cor
 * @property integer $id_tipo_combustivel
 *
 * @property Gastos[] $gastos
 * @property RespostaSolicitacao[] $respostaSolicitacaos
 * @property Cor $idCor
 * @property Modelo $idModelo
 * @property TipoCombustivel $idTipoCombustivel
 */
class Veiculo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'veiculo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cidade', 'chassi', 'num_patrimonio', 'status', 'adquirido_de', 'uf_atual', 'uf_anterior', 'placa_atual', 'placa_anterior', 'potencia', 'id_modelo', 'id_cor', 'id_tipo_combustivel'], 'required', 'message'=>'Este campo é obrigatório'],
            [['num_patrimonio', 'placa_atual', 'placa_anterior', 'potencia', 'id_modelo', 'id_cor', 'id_tipo_combustivel'], 'integer'],
            [['cidade'], 'string', 'max' => 35],
            [['chassi'], 'string', 'max' => 18],
            [['lotacao'], 'string', 'max' => 30],
            [['status'], 'string', 'max' => 25],
            [['observacao', 'adquirido_de'], 'string', 'max' => 45],
            [['uf_atual', 'uf_anterior'], 'string', 'max' => 2]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'renavam' => 'RENAVAM',
            'cidade' => 'Cidade',
            'chassi' => 'Chassi',
            'num_patrimonio' => 'Número de Patrimônio',
            'lotacao' => 'Lotação',
            'status' => 'Status',
            'observacao' => 'Observação',
            'adquirido_de' => 'Adquirido De',
            'uf_atual' => 'UF Atual',
            'uf_anterior' => 'UF Anterior',
            'placa_atual' => 'Placa Atual',
            'placa_anterior' => 'Placa Anterior',
            'potencia' => 'Potência',
            'id_modelo' => 'Nome do Modelo',
            'id_cor' => 'Nome da Cor',
            'id_tipo_combustivel' => 'Tipo Combustível',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGastos()
    {
        return $this->hasMany(Gastos::className(), ['id_veiculo' => 'renavam']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRespostaSolicitacaos()
    {
        return $this->hasMany(RespostaSolicitacao::className(), ['id_veiculo' => 'renavam']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCor()
    {
        return $this->hasOne(Cor::className(), ['id' => 'id_cor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdModelo()
    {
        return $this->hasOne(Modelo::className(), ['id' => 'id_modelo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoCombustivel()
    {
        return $this->hasOne(TipoCombustivel::className(), ['id' => 'id_tipo_combustivel']);
    }
}
