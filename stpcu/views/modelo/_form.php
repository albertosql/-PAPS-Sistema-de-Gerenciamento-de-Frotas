<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Modelo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modelo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_marca')->dropDownList($marca_lista) ?>

    <?= $form->field($model, 'ano')->dropDownList(array_combine(range(date('Y')+1,1900,-1),range(date('Y')+1,1900,-1)) ); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Novo' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
