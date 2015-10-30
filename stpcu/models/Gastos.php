<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gastos".
 *
 * @property integer $id
 * @property string $data
 * @property integer $km
 * @property integer $id_veiculo
 *
 * @property Abastecimento $abastecimento
 * @property Veiculo $idVeiculo
 * @property Manutencao[] $manutencaos
 */
class Gastos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gastos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data'], 'safe'],
            [['km', 'id_veiculo'], 'integer'],
            [['id_veiculo'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data' => 'Data',
            'km' => 'Km',
            'id_veiculo' => 'Id Veiculo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAbastecimento()
    {
        return $this->hasOne(Abastecimento::className(), ['id_gasto' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdVeiculo()
    {
        return $this->hasOne(Veiculo::className(), ['renavam' => 'id_veiculo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManutencaos()
    {
        return $this->hasMany(Manutencao::className(), ['id_gasto' => 'id']);
    }
}
