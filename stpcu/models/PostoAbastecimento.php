<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posto_abastecimento".
 *
 * @property integer $id
 * @property string $nome
 * @property string $endereco
 *
 * @property Abastecimento[] $abastecimentos
 */
class PostoAbastecimento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posto_abastecimento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'endereco'], 'required', 'message'=>'Este Campo é Obrigatório'],
            [['endereco'], 'unique'],
            [['nome'], 'string', 'max' => 45],
            [['endereco'], 'string', 'max' => 50, 'message'=>'Este Campo é Obrigatório']
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
            'endereco' => 'Endereco',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAbastecimentos()
    {
        return $this->hasMany(Abastecimento::className(), ['id_posto' => 'id']);
    }
}
