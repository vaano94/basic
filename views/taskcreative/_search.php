<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TaskCreativeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-creative-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'essaytext') ?>

    <?= $form->field($model, 'smallessaytext') ?>

    <?= $form->field($model, 'topic') ?>

    <?= $form->field($model, 'presentationtext') ?>

    <?php // echo $form->field($model, 'projecttext') ?>

    <?php // echo $form->field($model, 'year') ?>

    <?php // echo $form->field($model, 'subject_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
