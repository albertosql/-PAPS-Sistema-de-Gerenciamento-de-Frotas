<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Manutencao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manutencao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_gasto')->textInput() ?>

    <?= $form->field($model, 'data_entrada')->textInput() ?>

    <?= $form->field($model, 'servico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'custo')->textInput() ?>

    <?= $form->field($model, 'data_saida')->textInput() ?>

    <?= $form->field($model, 'tipo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Novo' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
