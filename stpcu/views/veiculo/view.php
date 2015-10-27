<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Veiculo */

$this->title = $model->renavam;
$this->params['breadcrumbs'][] = ['label' => 'Veiculos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="veiculo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->renavam], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->renavam], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'renavam',
            'cidade',
            'chassi',
            'num_patrimonio',
            'lotacao',
            'status',
            'observacao',
            'adquirido_de',
            'uf_atual',
            'uf_anterior',
            'placa_atual',
            'placa_anterior',
            'potencia',
            'id_modelo',
            'id_cor',
            'id_tipo_combustivel',
        ],
    ]) ?>

</div>
