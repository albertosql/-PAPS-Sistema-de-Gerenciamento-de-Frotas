<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TipoCombustivelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipo de Combustível';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-combustivel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Novo Tipo de Combustível', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
