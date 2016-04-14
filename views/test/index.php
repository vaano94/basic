<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-index">

<?php if (Yii::$app->user->identity['flags'] == '0') : ?>
  <ul><li>Управление пользователями-<a href='/users'>тут</a></li></ul>
<?php endif;?>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Test', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'name',
            // 'surname',
            [
                'attribute' => 'фио',
                'format' => 'raw',
                'value' => function($model){
                    return $model->name.' '.$model->surname;
                }
            ],

            'phone',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
