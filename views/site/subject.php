<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Subject */
/* @var $form ActiveForm */
?>
<div class="site-subject">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'subject_name') ?>
        <?= $form->field($model, 'subject_term') ?>
        <?= $form->field($model, 'subject_topic') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-subject -->
