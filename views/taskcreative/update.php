<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TaskCreative */

$this->title = 'Изменить творческое задание: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Творческие задания', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="task-creative-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
