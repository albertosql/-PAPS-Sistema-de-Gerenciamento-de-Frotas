<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "motorista".
 *
 * @property string $nome
 * @property integer $cnh
 * @property string $categoria_cnh
 * @property string $tipo
 * @property string $status
 * @property integer $telefone
 *
 * @property RespostaSolicitacao[] $respostaSolicitacaos
 */
class Motorista extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'motorista';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'cnh', 'categoria_cnh', 'tipo', 'status'], 'required', "message"=>"Este campo é obrigatório"],
            [['cnh', 'telefone'], 'integer'],
            [['nome'], 'string', 'max' => 60],
            [['categoria_cnh'], 'string', 'max' => 1],
            [['tipo', 'status'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nome' => 'Nome',
            'cnh' => 'Cnh',
            'categoria_cnh' => 'Categoria Cnh',
            'tipo' => 'Tipo',
            'status' => 'Status',
            'telefone' => 'Telefone',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRespostaSolicitacaos()
    {
        return $this->hasMany(RespostaSolicitacao::className(), ['id_motorista' => 'cnh']);
    }

    public function getCategoria(){
        return ['A' => "Categoria A",
            "B" => "Categoria B",
            "C" => "Categoria C",
            "D" => "Categoria D",
            "E" => "Categoria E",];
    }

    public function getTipo(){
        return ["Terceirizado " => "Terceirizado",
                "Não Terceirizado " => "Não Terceirizado"];
    }

    public function getStatus(){
        return ["Disponível"=>"Disponível",
                "Não Disponível"=>"Não Disponível"];
    }

    public  function getPrompt(){
        return ["Selecione uma opção."];
    }
}
