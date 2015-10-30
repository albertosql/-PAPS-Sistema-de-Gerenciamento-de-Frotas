<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "manutencao".
 *
 * @property integer $id_gasto
 * @property string $data_entrada
 * @property string $servico
 * @property double $custo
 * @property string $data_saida
 * @property string $tipo
 *
 * @property Gastos $idGasto
 */
class Manutencao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'manutencao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_gasto', 'data_entrada', 'servico', 'custo', 'tipo'], 'required'],
            [['id_gasto'], 'integer'],
            [['data_entrada', 'data_saida'], 'safe'],
            [['custo'], 'number'],
            [['servico'], 'string', 'max' => 45],
            [['tipo'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_gasto' => 'Id Gasto',
            'data_entrada' => 'Data Entrada',
            'servico' => 'Servico',
            'custo' => 'Custo',
            'data_saida' => 'Data Saida',
            'tipo' => 'Tipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGasto()
    {
        return $this->hasOne(Gastos::className(), ['id' => 'id_gasto']);
    }
}
