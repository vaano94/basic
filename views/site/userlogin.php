<?php
use yii\helpers\Html;
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 3/23/2016
 * Time: 10:03 PM
 */
$this->title='Вход';
?>
<div>
    <h5 class="center-align">Войти как:</h5>
</div>

<div class="container">
<div class="row">

    <form action="/site/handleform" class="col s4 offset-s4" method="POST">
        <p class="col s1 offset-s2">
            <input name="checkbox" type="radio" id="student" />
            <label for="student">Ученик</label>
        </p>
        <p class="col s1 offset-s2">
            <input name="checkbox" value="teacher" type="radio" id="teacher" />
            <label for="teacher">Учитель</label>
        </p>


        <div class="input-field col s12">
            <input disabled value="Введите пароль" id="disabled" type="text" name="password" class="validate">
            <label class="topped" for="disabled">Только для учителя</label>
            <button class="btn waves-effect waves-light col s5 offset-s3" type="submit">Войти</button>
        </div>


        <?php $model = new \app\models\User; $form = \yii\widgets\ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'form-horizontal'],
            'fieldConfig' => [
                'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                'labelOptions' => ['class' => 'col-lg-1 control-label'],
            ],
        ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ]) ?>

            <div class="form-group">
                <div class="col-lg-offset-1 col-lg-11">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>

        <?php ActiveForm::end(); ?>



    </form>

    </div>

</div>
