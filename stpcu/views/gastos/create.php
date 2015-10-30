<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Gastos */

$this->title = 'Create Gastos';
$this->params['breadcrumbs'][] = ['label' => 'Gastos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gastos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
