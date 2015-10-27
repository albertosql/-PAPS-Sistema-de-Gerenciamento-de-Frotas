<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VeiculoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Veiculos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="veiculo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Veiculo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'renavam',
            'cidade',
            'chassi',
            'num_patrimonio',
            'lotacao',
            // 'status',
            // 'observacao',
            // 'adquirido_de',
            // 'uf_atual',
            // 'uf_anterior',
            // 'placa_atual',
            // 'placa_anterior',
            // 'potencia',
            // 'id_modelo',
            // 'id_cor',
            // 'id_tipo_combustivel',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
