<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marca".
 *
 * @property integer $id
 * @property string $nome
 *
 * @property Modelo[] $modelos
 */
class Marca extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'marca';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'required', "message"=>"Este campo é obrigatório"],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModelos()
    {
        return $this->hasMany(Modelo::className(), ['id_marca' => 'id']);
    }
}
