<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TaskCreativeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Творческие задания';
$this->params['breadcrumbs'][] = $this->title;
?>
<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
<div class="task-creative-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать творческое задание', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'columns' => [

            ['class' => 'yii\grid\SerialColumn',],

            //'id',
            'topic:ntext',
            'essaytext:ntext',
            'smallessaytext:ntext',
            'presentationtext:text',
             'projecttext:ntext',
            [
                'attribute'=>'subject_name',
                'filter'=>array("Русский язык"=>"Русский язык","Литература"=>"Литература"),
            ],
            // 'subject_name:ntext',
            [
                'attribute'=>'year',
                'filter'=>array("1"=>"1 Год","2"=>"2 Год"),
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
