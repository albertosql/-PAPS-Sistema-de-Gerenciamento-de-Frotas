<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modelo".
 *
 * @property integer $id
 * @property string $nome
 * @property integer $ano
 * @property integer $id_marca
 *
 * @property Marca $idMarca
 * @property Veiculo[] $veiculos
 */
class Modelo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modelo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'ano', 'id_marca'], 'required', "message"=>"Este campo é obrigatório"],
            [['ano', 'id_marca'], 'integer'],
            [['nome'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'ano' => 'Ano',
            'id_marca' => 'Nome da Marca',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMarca()
    {
        return $this->hasOne(Marca::className(), ['id' => 'id_marca']);
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVeiculos()
    {
        return $this->hasMany(Veiculo::className(), ['id_modelo' => 'id']);
    }

    public  function afterFind(){
        $this->id_marca = Marca::findOne($this->id_marca)->nome;
    }
}
