<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $id
 * @property string $nome
 * @property string $email
 * @property string $senha
 * @property string $nome_usuario
 * @property string $tipo
 * @property string $descricao
 * @property integer $id_departamento
 *
 * @property Solicitacao[] $solicitacaos
 * @property Departamento $idDepartamento
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'email', 'senha', 'nome_usuario', 'id_departamento'], 'required', 'message'=>'Este campo é obrigatório'],
            [['id_departamento'], 'integer'],
            [['nome'], 'string', 'max' => 60],
            [['email', 'senha', 'nome_usuario', 'descricao'], 'string', 'max' => 45],
            [['nome_usuario'], 'unique', "message"=>"Username existente no sistema"],
            ['nome', 'match', 'pattern'=>'/^[a-z\s]{1,60}$/'],
            ['email', 'match', 'pattern'=>'/^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+@{1}[a-zA-Z0-9_.-]*\\.+[a-z]{2,4}/'],
            ['nome_usuario', 'match', 'pattern'=>'/^[a-z0-9_-]{1,45}$/']

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
            'email' => 'Email',
            'senha' => 'Senha',
            'nome_usuario' => 'Username',
            'tipo' => 'Tipo',
            'descricao' => 'Descricao',
            'id_departamento' => 'Departamento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolicitacaos()
    {
        return $this->hasMany(Solicitacao::className(), ['id_usuario' => 'id']);
    }

    public function getPrompt(){
        return ['prompt'=>'Selecione uma opção'];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDepartamento()
    {
        return $this->hasOne(Departamento::className(), ['id' => 'id_departamento']);
    }
}
