<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Manutencao */

$this->title = 'Atualizar Manutenção: ' . ' ' . $model->data_entrada;
$this->params['breadcrumbs'][] = ['label' => 'Manutenções', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->data_entrada, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="manutencao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
