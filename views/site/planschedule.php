<?php
use yii\helpers\Html;
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
<H1> План обучения: </H1>

<div class="container">
<div class="row">

    <!--<div class="col s4">

    <?php
/*
    $subject_name_dropdown = ActiveForm::begin([ 'options' => ['name' => 'name']]);
    //$subject_name_dropdown = ActiveForm::begin();
    echo $subject_name_dropdown->field($model, 'subject_name')->dropDownList([
        'Русский язык' => 'Русский язык',
        'Литература' => 'Литература',
        //'2'=>'Удален'
    ]);
    ActiveForm::end();
    */?>
        <button class="btn waves-effect waves-light center-align" type="submit">Показать план</button>
    </div>
        </form>
    <form action="http://localhost/basic/web/site/blah" method="POST">
    <div class="col s4">
     <?php
/*    $subject_term_dropdown = ActiveForm::begin([ 'options' => ['name' => 'term']]);
    //$subject_term_dropdown = ActiveForm::begin();
    echo $subject_name_dropdown->field($model, 'subject_term')->dropDownList([
        '1Семестр' => '1 Семестр',
        '2Семестр' => '2 Семестр',
        //'2'=>'Удален'
    ]);
    ActiveForm::end();
    */?>
    </div>
        </form>

    <form action="http://localhost/basic/web/site/blah" method="POST">
    <div class="col s4">
    <?php
/*    //$subject_year_dropdown = ActiveForm::begin([ 'options' => ['class' => 'input-field col s4']]);
    $subject_year_dropdown = ActiveForm::begin();
    echo $subject_year_dropdown->field($model, 'subject_year')->dropDownList([
        '1Год' => '1 Год',
        '2Год' => '2 Год',
        //'2'=>'Удален'
    ]);
    ActiveForm::end();

    */?>
    </div>
        <button class="btn waves-effect waves-light center-align" type="submit">Показать план</button>
        </form>-->


<!--</form>-->

    <form action="http://localhost/basic/web/site/blah" method="POST">
    <div class="input-field col s4">
        <select>
            <option disabled selected>Год обучения</option>
            <option type="text" name="Год 1">Год 1</option>
            <option type="text" name="Год 2">Год 2</option>
        </select>
        <label>Materialize Select</label>
    </div>
    <div class="input-field col s4">
            <select >
                <option disabled selected>Семестр</option>
                <option name="term">1 Семестр</option>
                <option name="term">2 Семестр</option>
            </select>
            <label>Materialize Select</label>
    </div>
    <div class="input-field col s4">
                <select >
                    <option disabled selected>Дисциплина</option>
                    <option value="3331"  name="topic">Русский язык</option>
                    <option value="212313"  name="topic">Литература</option>
                </select>
                <label>Materialize Select</label>
    </div>
    <button class="btn waves-effect waves-light center-align" type="submit">Показать план</button>
    </form>

    <form action="http://localhost/basic/web/site/planschedule" method="POST">
    <?php $form = ActiveForm::begin(); ?>
    <?php echo $form->field($model, 'subject_term')->dropDownList(['1 Семестр' => '1 Семестр', '2 Семестр' => '2 Семестр']); ?>
    <?php echo $form->field($model, 'subject_name')->dropDownList(['Русский язык' => 'Русский язык', 'Литература' => 'Литература']); ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
        </form>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            // 'id',
            'subject_name',
            'subject_term',
            'subject_topic',
        ],
    ]) ?>



</div>
</div>