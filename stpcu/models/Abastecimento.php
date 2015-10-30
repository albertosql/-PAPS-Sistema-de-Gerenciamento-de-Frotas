<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "abastecimento".
 *
 * @property integer $id_gasto
 * @property double $preco_litro
 * @property integer $id_posto
 *
 * @property Gastos $idGasto
 * @property PostoAbastecimento $idPosto
 */
class Abastecimento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'abastecimento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_gasto', 'id_posto'], 'required'],
            [['id_gasto', 'id_posto'], 'integer'],
            [['preco_litro'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_gasto' => 'Id Gasto',
            'preco_litro' => 'Preco Litro',
            'id_posto' => 'Id Posto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGasto()
    {
        return $this->hasOne(Gastos::className(), ['id' => 'id_gasto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPosto()
    {
        return $this->hasOne(PostoAbastecimento::className(), ['id' => 'id_posto']);
    }
}
