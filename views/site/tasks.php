<?php
use yii\helpers\Html;
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 3/24/2016
 * Time: 10:02 AM
 */
?>

<H1> Задания </H1>


<div class="container">
    <div class="row ">
        <form action="#" class="col s12" method="POST">


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


            <button class="btn waves-effect waves-light center-align" type="submit">Показать задания</button>

        </form>
    </div>


</div>
