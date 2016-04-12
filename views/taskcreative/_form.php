<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TaskCreative */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-creative-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'topic')->textarea(['rows' => 2])->label('Тема задания') ?>

    <?= $form->field($model, 'essaytext')->textarea(['rows' => 3])->label('Задание на сочинение') ?>

    <?= $form->field($model, 'smallessaytext')->textarea(['rows' => 3])->label('Задание на мини сочинение')  ?>


    <?= $form->field($model, 'presentationtext')->textarea(['rows' => 3])->label('Задание на презентацию')  ?>

    <?= $form->field($model, 'projecttext')->textarea(['rows' => 3])->label('Задание на проект')  ?>


    <?= $form->field($model, 'year')->dropDownList(['1' => '1 Год', '2' => '2 год'])
        ->label('Год обучения') ?>

    <?= $form->field($model, 'subject_name')->dropDownList(['Русский язык' => 'Русский язык', 'Литература' => 'Литература'])
        ->label('Предмет') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
