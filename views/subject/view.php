<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Subject */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Учебный план', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
// не работает
// $this->layout='nav';
?>
<div class="subject-view">

    <div class="container">
        <div class="row">
            <div class="col s5 offset-s4">
    <h1>Учебный план</h1>
    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить эту запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
                </div>

            <div class="col s6 offset-s3">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            'subject_name:ntext',
            'subject_year:ntext',
            'subject_link:ntext',
        ],
    ]) ?>
            </div>
            </div>
        </div>

</div>
