<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Veiculo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="veiculo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chassi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_patrimonio')->textInput() ?>

    <?= $form->field($model, 'lotacao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observacao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adquirido_de')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uf_atual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uf_anterior')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'placa_atual')->textInput() ?>

    <?= $form->field($model, 'placa_anterior')->textInput() ?>

    <?= $form->field($model, 'potencia')->textInput() ?>

    <?= $form->field($model, 'id_modelo')->dropDownList($modelo_lista) ?>

    <?= $form->field($model, 'id_cor')->dropDownList($cor_lista)?>

    <?= $form->field($model, 'id_tipo_combustivel')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Novo' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
