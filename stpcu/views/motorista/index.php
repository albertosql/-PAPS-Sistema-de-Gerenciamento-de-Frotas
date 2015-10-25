<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MotoristaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Motoristas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="motorista-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Novo Motorista', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nome',
            'cnh',
            'categoria_cnh',
            'tipo',
            'status',
            // 'telefone',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
