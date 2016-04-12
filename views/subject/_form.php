<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Subject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?php echo $form->field($model, 'subject_name')->dropDownList(['Русский язык' => 'Русский язык', 'Литература' => 'Литература']); ?>

    <?php echo $form->field($model, 'subject_year')->dropDownList(['1' => '1 Год', '2' => '2 Год']); ?>

   <!--<? $form->field($model, 'subject_topic')->textarea(['rows' => 3]) ?> !-->

    <!--<?= $form->field($model, 'subject_name')->textarea(['rows' => 6]) ?> !-->

    <!-- <?= $form->field($model, 'subject_term')->textarea(['rows' => 6]) ?> !-->

    <?= $form->field($model, 'pdfFile') -> fileInput(); ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
