<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tasktest */

$this->title = 'Создать Тестовое задание';
$this->params['breadcrumbs'][] = ['label' => 'ТестовыеЗадания', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tasktest-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    
    
</div>
