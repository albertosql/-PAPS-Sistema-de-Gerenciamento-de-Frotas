<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CategoriaVeiculo */

$this->title = 'Create Categoria Veiculo';
$this->params['breadcrumbs'][] = ['label' => 'Categoria Veiculos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categoria-veiculo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
