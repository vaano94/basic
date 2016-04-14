<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TaskCreative */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Творческие задания', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-creative-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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
            'subject_name:ntext',
            'year',
            'essaytext:ntext',
            'smallessaytext:ntext',
            'topic:ntext',
            'presentationtext:ntext',
            'projecttext:ntext',
        ],
    ]) ?>

</div>
