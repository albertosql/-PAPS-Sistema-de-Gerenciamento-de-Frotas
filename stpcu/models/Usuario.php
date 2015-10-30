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
            [['nome', 'email', 'senha', 'nome_usuario', 'tipo', 'id_departamento'], 'required'],
            [['id_departamento'], 'integer'],
            [['nome'], 'string', 'max' => 60],
            [['email', 'senha', 'nome_usuario', 'descricao'], 'string', 'max' => 45],
            [['tipo'], 'string', 'max' => 30]
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
            'nome_usuario' => 'Nome Usuario',
            'tipo' => 'Tipo',
            'descricao' => 'Descricao',
            'id_departamento' => 'Id Departamento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolicitacaos()
    {
        return $this->hasMany(Solicitacao::className(), ['id_usuario' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDepartamento()
    {
        return $this->hasOne(Departamento::className(), ['id' => 'id_departamento']);
    }
}
