<?php
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 3/24/2016
 * Time: 10:02 AM
 */
?>

<H1> Материалы для подготовки: </H1>


<div class="container">
    <div class="row ">
        <!--<form action="#" class="col s12" method="POST">


            <div class="input-field col s4">
                <select>
                    <option value="" disabled selected>Год обучения</option>
                    <option value="1">1 Курс</option>
                    <option value="2">2 курс</option>
                </select>
            </div>

            <div class="input-field col s4">
                <select>
                    <option value="" disabled selected>Семестр</option>
                    <option value="1">1 Семестр</option>
                    <option value="2">2 Семестр</option>
                </select>
            </div>

            <div class="input-field col s4">
                <select>
                    <option value="" disabled selected>Предмет</option>
                    <option value="1">Русский язык</option>
                    <option value="2">Литература</option>
                </select>
            </div>


            <button class="btn waves-effect waves-light center-align" type="submit">Показать материалы</button>

        </form>
    </div>

    <ul class="collection with-header">
        <li class="collection-header"><h4>Ага</h4></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
        <li class="collection-item"><div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
    </ul>
-->
    <form action="http://localhost/basic/web/site/preparation" method="POST">
        <?php $form = ActiveForm::begin(); ?>
        <?php echo $form->field($model, 'year')->dropDownList(['1' => '1 Год', '2' => '2 Год']); ?>
        <?php echo $form->field($model, 'subject')->dropDownList(['Русский язык' => 'Русский язык', 'Литература' => 'Литература'],['param']); ?>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Показать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
        <BR>
        <?php ActiveForm::end(); ?>
    </form>

    <BR><BR>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            // 'id',
            //'date',
            [
                'attribute' =>'date',
                'label' => 'Дата',
                'format' => 'date',
                'value' => function($data){
                    return $data->date;
                },
            ],
            //'materials',
            [
                'attribute'=>'materials',
                'label' => 'Изучаемые материалы',
                'format' => 'text',
                'value' => function($data){
                    return $data->materials;
                },
            ],
            //'link',
            [
                'attribute' => 'link',
                'label' => 'Ссылка',
                'format' => 'html',
                'value' => function($data){
                    return Html::a('Просмотреть', Url::toRoute($data->link));
                },
            ],
        ],
    ]) ?>

</div>
</div>

