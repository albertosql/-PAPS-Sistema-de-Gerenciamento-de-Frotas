<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TipoCombustivel */

$this->title = 'Create Tipo Combustivel';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Combustivels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-combustivel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
