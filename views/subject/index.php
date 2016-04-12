<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SubjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subjects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-index">
    <!-- чтобы можно было использовать glyphIcons !-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Я в жизни не писала более кривого. но это мля работает !-->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://localhost/basic/web/css/nav.css">
    <!-- <h1><?= Html::encode($this->title) ?></h1> !-->
    <h1>Учебные планы</h1>

    <?php
    // вот тут выводит сразу добавление нового
    //echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="container">
    <p>
        <?= Html::a('Создать занятие', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'subject_name:ntext',
            'subject_year:ntext',
            [
                'label' => 'Материалы',
                'format' => 'html',
                'value' => function($data){
                    return Html::a('Просмотреть', Url::toRoute($data->subject_link));
                },
            ],



            //['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Действия',
                'headerOptions' => ['width' => '150'],
                //'template' => '{view} {update} {delete}{link}',
                'buttons' => [
                    'update' => function ($url,$model) {
                        return Html::a(
                            '<i class="material-icons">comment</i>',
                            $url,  ['data-method'=>'post']);
                    },
                    'view' => function ($url,$model) {
                        return Html::a(
                            '<i class="material-icons">visibility</i>',
                            $url,  ['data-method'=>'post']);
                    },
                    'delete' => function ($url,$model) {
                        return Html::a(
                            '<i class="material-icons">delete</i>',
                            $url, ['data-method'=>'post']);
                    },
                    'link' => function ($url,$model,$key) {
                        return Html::a('Действие', $url);
                    },
                ],
            ],
        ],
    ]); ?>

    </div>

</div>
