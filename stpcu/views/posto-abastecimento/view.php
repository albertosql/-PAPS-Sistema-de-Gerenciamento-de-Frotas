<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PostoAbastecimento */

$this->title =  "Visualizar Posto de Abastecimento";
$this->params['breadcrumbs'][] = ['label' => 'Posto Abastecimentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posto-abastecimento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Deletar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Você tem certeza que deseja apagar esse Posto de Abastecimento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'nome',
            'endereco',
        ],
    ]) ?>

</div>
