<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tasktest */

$this->title = $model->topic;
$this->params['breadcrumbs'][] = ['label' => 'Тестовые задания', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tasktest-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить эту запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'text',
            'course',
            'topic:ntext',
            'subject_name:ntext',
        ],
    ]) ?>

</div>
