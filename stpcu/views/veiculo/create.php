<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Veiculo */
/* @var $modelo_lista app\controllers\VeiculoController*/
/* @var $cor_lista app\controllers\VeiculoController*/

$this->title = 'Novo Veículo';
$this->params['breadcrumbs'][] = ['label' => 'Veículos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="veiculo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'modelo_lista' => $modelo_lista, 'cor_lista' => $cor_lista, 'combustivel_lista' => $combustivel_lista
    ]) ?>

</div>
