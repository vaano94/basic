<?php use yii\helpers\Url; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Наш шаблон</title>
    <!-- для добавки отдельным css стилей - читай AssetManager -->
    <!-- Compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/nav.css">
    <!-- Шрифты !-->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <!-- Иконочки !-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>

<?=$content?>
<script
			  src="https://code.jquery.com/jquery-2.2.3.min.js"
			  integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="
			  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script type="text/javascript" src="../js/mine.js"></script>
</body>
</html>
