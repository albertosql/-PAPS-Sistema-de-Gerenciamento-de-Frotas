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
            [['nome', 'cnh', 'categoria_cnh', 'tipo', 'status', 'data_validade_cnh'], 'required', "message"=>"Este campo é obrigatório"],
            [['cnh', 'telefone'], 'integer'],
            //[['data_validade_cnh'], 'date'],
            [['nome'], 'string', 'max' => 60],
            [['categoria_cnh'], 'string', 'max' => 2],
            [['tipo', 'status'], 'string', 'max' => 15],
            [['cnh'], 'unique', "message"=>"CNH existente no sistema"],
            ['nome', 'match', 'pattern'=>'/^[a-zA-Z\s]{6,20}$/'],
            ['categoria_cnh', 'match', 'pattern'=>'/^[a-zA_Z]/'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nome' => 'Nome',
            'data_validade_cnh' => "Data de Validade da CNH",
            'cnh' => 'CNH',
            'categoria_cnh' => 'Categoria da CNH',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManutencao()
    {
        return $this->hasMany(Manutencao::className(), ['id_motorista' => 'cnh']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAbastecimento()
    {
        return $this->hasMany(Abastecimento::className(), ['id_motorista' => 'cnh']);
    }

    public static function getCategoria(){
        return ['A' => "Categoria A",
            "B" => "Categoria B",
            "C" => "Categoria C",
            "D" => "Categoria D",
            "E" => "Categoria E",];
    }

    public static function getTipo(){
        return ["T" => "Terceirizado",
                "NT" => "Não Terceirizado"];
    }

    public static function getStatus(){
        return ["D"=>"Disponível",
                "ND"=>"Não Disponível"];
    }

    public static function getPrompt(){
        return ['prompt'=>'Selecione uma opção'];
    }

    public static function getPromptShort(){
        return ['prompt'=>'Filtrar'];
    }

    public function afterFind()
    {
        if(strcmp($this->tipo,"T") == 0){
            $this->tipo = "Terceirizado";
        }
        if(strcmp($this->tipo,"NT") == 0){
            $this->tipo = "Não Terceirizado";
        }

        if (strcmp($this->status,"D") == 0){
            $this->status = "Disponível";
        }
        if (strcmp($this->status,"ND") == 0){
            $this->status = "Não Disponível";
        }

        $this->categoria_cnh = "Categoria ".$this->categoria_cnh;
    }

}
