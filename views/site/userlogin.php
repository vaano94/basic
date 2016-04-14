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

    <form action="http://localhost/basic/web/site/handleform" class="col s4 offset-s4" method="POST">
        <p class="col s1 offset-s2">
            <input name="checkbox" type="radio" id="student" value="student" />
            <label for="student">Ученик</label>
        </p>
        <p class="col s1 offset-s2">
            <input name="checkbox" type="radio" id="teacher" value="teacher"/>
            <label for="teacher">Учитель</label>
        </p>
        
        
        <div class="input-field col s12">
            <input disabled value="Введите пароль" id="disabled" type="text" name="password" class="validate">
            <label class="topped" for="disabled">Только для учителя</label>
            <button class="btn waves-effect waves-light col s5 offset-s3" type="submit">Войти</button>
        </div>

        
    </form>

    </div>

</div>



