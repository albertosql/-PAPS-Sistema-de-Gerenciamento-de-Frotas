<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Abastecimento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="abastecimento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_gasto')->textInput() ?>

    <?= $form->field($model, 'preco_litro')->textInput() ?>

    <?= $form->field($model, 'id_posto')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Novo' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
