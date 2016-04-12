<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tasktest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tasktest-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    
    <?php echo $form->field($model, 'course')->dropDownList(['1' => '1 Год', '2' => '2 Год']); ?>

    <?= $form->field($model, 'topic')->textarea(['rows' => 2]) ?>
    
    <?php echo $form->field($model, 'subject_name')->dropDownList(['Русский язык' => 'Русский язык', 'Литература' => 'Литература']); ?>

    <?= $form->field($model, 'pdfFile')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

</div>
