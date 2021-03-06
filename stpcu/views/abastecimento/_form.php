<?php

use app\models\Motorista;
use app\models\PostoAbastecimento;
use app\models\Veiculo;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Abastecimento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="abastecimento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'preco_litro')->textInput() ?>

    <?= $form->field($model, 'id_posto')->dropDownList(ArrayHelper::map(PostoAbastecimento::find()->all(), 'id', 'nome'), ['prompt'=>'Selecione uma opção']) ?>

    <?= $form->field($model, 'id_veiculo')->dropDownList(ArrayHelper::map(Veiculo::find()->all(), 'renavam', 'placa_atual'), ['prompt'=>'Selecione uma opção']) ?>

    <?= $form->field($model, 'km')->textInput() ?>

    <?= $form->field($model, 'id_motorista')->dropDownList(ArrayHelper::map(Motorista::find()->all(), 'cnh', 'nome'), ['prompt'=>'Selecione uma opção']) ?>

    <?= $form->field($model, 'data_abastecimento')->widget(
        DatePicker::className(), [
            // inline too, not bad
            'inline' => false,
            'language' => 'pt',
            // modify template for custom rendering
            //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'dd-mm-yyyy'
            ]
        ]);?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Novo' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
