<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;
use yii\grid\GridView;
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 3/24/2016
 * Time: 10:02 AM
 */
?>
<H1 class="center-align"> План обучения: </H1>

<div class="container">
<div class="row">



    <form action="http://localhost/basic/web/site/planschedule" method="POST">
    <?php $form = ActiveForm::begin(); ?>
    <?php echo $form->field($model, 'subject_year',
        ['options'=>['class'=>'col s4 offset-s2']])->dropDownList(['1' => '1 Год', '2' => '2 Год']); ?>
    <?php echo $form->field($model, 'subject_name',
        ['options'=>['class'=>'col s4']])->dropDownList(['Русский язык' => 'Русский язык', 'Литература' => 'Литература']); ?>
    <div class="form-group col s4 offset-s2">

        <?= Html::submitButton($model->isNewRecord ? 'Показать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
        </form>

    <BR>
    <BR>
    <BR>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            // 'id',
            'subject_name',
            'subject_year',
            [
                'label' => 'Материалы',
                'format' => 'html',
                'value' => function($data){
                    return Html::a('Просмотреть', Url::toRoute($data->subject_link));
                },
            ],
            //'subject_link',
        ],
        'options' => [
          'style' => ['margin-top' => '50px'],
          'class'=> 'col s10 offset-s1'
        ],
    ]) ?>



</div>
</div>