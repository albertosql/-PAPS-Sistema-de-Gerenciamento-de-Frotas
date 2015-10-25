<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Motorista */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="motorista-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnh')->textInput() ?>

    <?= $form->field($model, 'categoria_cnh')->dropDownList($model->getCategoria(), $model->getPrompt()) ?>

    <?= $form->field($model, 'tipo')->dropDownList($model->getTipo(), $model->getPrompt()) ?>

    <?= $form->field($model, 'status')->dropDownList($model->getStatus(), $model->getPrompt())?>

    <?= $form->field($model, 'telefone')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Novo' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
