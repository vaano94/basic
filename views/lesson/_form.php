<?php

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lesson */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lesson-form">

    <?php $form = ActiveForm::begin(); ?>


    <div class="form-group">
        <?= $form->field($model, 'date')->widget(DatePicker::className(),[
            'model' => $model,
            'attribute' => 'date',
            'language' => 'ru',
            'options'=>['class'=>'well well-sm'],
            'dateFormat' => 'dd-MM-yyyy',
        ])
        ?>
    </div>

    <?= $form->field($model, 'materials')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'link')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'subject')->textarea(['rows' => 2]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
