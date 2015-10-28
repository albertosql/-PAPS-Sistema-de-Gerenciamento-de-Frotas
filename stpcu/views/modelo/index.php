<?php

use app\models\Modelo;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ModeloSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Modelos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modelo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Novo Modelo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            [
                'attribute' => 'ano',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'ano',
                    array_combine(range(date('Y')+1,1900,-1),range(date('Y')+1,1900,-1)),
                    ['class'=>'form-control','prompt'=>'Filtrar'  ]),
            ],

            //'ano',
            [
                'attribute' => 'id_marca',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'id_marca',
                    ArrayHelper::map(Modelo::find()->asArray()->all(), 'id', 'nome'),
                    ['class'=>'form-control','prompt'=>'Filtrar'  ]),
            ],
            //'id_marca',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
