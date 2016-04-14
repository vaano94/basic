<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LessonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Занятия';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lesson-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать занятие', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'date',
                'format' => 'date',

                'filter' => DatePicker::widget(
                    [
                        'model' => $searchModel,
                        'attribute' => 'date',
                        'options' => [
                            'class' => 'form-control',
                            'dateFormat' => 'dd-MM-yyyy',
                        ],
                        'clientOptions' => [
                            'dateFormat' => 'dd-MM-yyyy',
                            'language' => 'ru'
                        ]
                    ]
                )
            ],
            //'date',
            'subject:ntext',
            'year:ntext',
            'materials:ntext',
            [
                'label' => 'Ссылка',
                'format' => 'html',
                'value' => function($data){
                    return Html::a('Материалы', Url::toRoute($data->link));
                },
            ],
            ['class' => 'yii\grid\ActionColumn'],


        ],
    ]); ?>

</div>
