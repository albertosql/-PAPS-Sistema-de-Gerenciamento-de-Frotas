<?php

use app\models\Motorista;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MotoristaSearch */
/* @var $model app\models\Motorista */
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
            //'categoria_cnh',
            [
                'attribute' => 'categoria_cnh',
                'filter' => Html::activeDropDownList($searchModel, 'categoria_cnh', Motorista::getCategoria(),['class'=>'form-control','prompt'=>'Filtrar'  ]),
            ],
            //'tipo',
            //'status',
            [
                'attribute' => 'tipo',
                'filter' => Html::activeDropDownList($searchModel, 'tipo', Motorista::getTipo(),['class'=>'form-control','prompt'=>'Filtrar']),
            ],
            // 'telefone',

            ['class' => 'yii\grid\ActionColumn'],
        ],

    ]); ?>

</div>
