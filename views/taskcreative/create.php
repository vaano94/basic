<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TaskCreative */

$this->title = 'Создать Творческое Задание';
$this->params['breadcrumbs'][] = ['label' => 'Творческие задания', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-creative-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    
    

</div>
