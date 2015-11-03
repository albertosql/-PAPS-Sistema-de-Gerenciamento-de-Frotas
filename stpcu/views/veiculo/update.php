<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Veiculo */

$this->title = 'Update Veiculo: ' . ' ' . $model->renavam;
$this->params['breadcrumbs'][] = ['label' => 'Veiculos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->renavam, 'url' => ['view', 'id' => $model->renavam]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="veiculo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'modelo_lista' => $modelo_lista, 'cor_lista' => $cor_lista, 'combustivel_lista' => $combustivel_lista
    ]) ?>

</div>
