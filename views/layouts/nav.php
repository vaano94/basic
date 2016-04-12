<?php use yii\helpers\Url; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Наш шаблон</title>
	<!-- для добавки отдельным css стилей - читай AssetManager -->
	<!-- Compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css"> -->
	<link rel="stylesheet" type="text/css" href="http://localhost/basic/web/css/nav.css">
	<!-- Шрифты !-->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<!-- Иконочки !-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 
</head>
<body>

<nav>
	<div class="nav-wrapper">
		<a href="#" class="brand-logo right">Что-то такое</a>
		<ul id="nav-mobile" class="left hide-on-med-and-down">
			<li><a href="<?= Url::to('http://localhost/basic/web/site/planschedule')?>">План обучения</a></li>
			<li><a href="<?= Url::to('http://localhost/basic/web/site/preparation')?>">Материалы для подготовки</a></li>
			<li><a href="<?= Url::to('http://localhost/basic/web/site/tasks')?>">Задания</a></li>
			<li><a href="success.html">Успеваемость</a> </li>
		</ul>
	</div>
</nav>

<?=$content?>

<script type="text/javascript" src="http://localhost/basic/web/assets/8672d47a/jquery.js"></script>
<script type="text/javascript" src="http://localhost/basic/web/assets/materialize/materialize.js"></script>
<script type="text/javascript" src="http://localhost/basic/web/assets/materialize/mine.js"></script>
<!--<script type="text/javascript" src="http://localhost/basic/web/assets/36280a0e/js/bootstrap.js"></script>-->

</body>
</html>  