<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tasktest */

$this->title = 'Изменить тестовое задание: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Тестовые задания', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->topic, 'url' => ['view', 'id' => $model->topic]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="tasktest-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    
</div>
