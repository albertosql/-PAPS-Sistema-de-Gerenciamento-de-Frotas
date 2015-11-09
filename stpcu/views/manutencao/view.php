<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Manutencao */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Manutencaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manutencao-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'data_entrada',
            'servico',
            'custo',
            'data_saida',
            'tipo',
            'data_lancamento',
            'id_veiculo',
            'km',
            'id_motorista',
        ],
    ]) ?>

</div>
