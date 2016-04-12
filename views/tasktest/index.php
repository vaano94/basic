<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $searchModel app\models\TasktestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Тестовые задания';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tasktest-index">

    <h1><?= Html::encode('Тестовые задания') ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать запись', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'text',
            [
                'label' => '1 Курс',
                'attribute'=>'course',
                'filter'=>array("1"=>"1 Курс","2"=>"2 Курс"),
            ],
            [   'label' => 'Тема занятия',
                'attribute'=>'topic',],
            //'topic:ntext',
            //'subject_name:ntext',
            [
                'label' => 'Предмет',
                'attribute'=>'subject_name',
                'filter'=>array("Русский язык"=>"Русский язык","Литература"=>"Литература"),
            ],
            [
                'label' => 'Материалы',
                'format' => 'html',
                'value' => function($data){
                    return Html::a('Просмотреть', Url::toRoute($data->text));
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
