<?php
require_once "function.php";

$arrey=SelectUpdate($_GET['id']);
?>
<html>
<!-- служебная часть -->
<head>
  <!-- заголовок страницы -->
  <title>Управление проектами</title>
  <!-- настраиваем служебную информацию для браузеров -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- задаём CSS-стили прямо здесь же, чтобы всё было в одном файле -->
  <link rel="stylesheet" type="text/css" href="style.css">
<!-- закрываем служебную часть страницы -->
</head>
<body>
<div class="container" >
    <div class="row align-middle">
        <div class="col-6 ">
         <form name="write" method="post" action="valid.php">
		<!-- содержимое третьей колонки -->
		<h2 class="todo__caption">Написать</h2>
		<div id="tdl3App">
    
          <input type="text" name="re_note" class="form-control" placeholder="Новая задача" value="<?= $arrey['note']; ?>">
		  <!-- Создаём пока ещё пустой список «Позвонить» -->
          <div class="tdl3Div">
            <ul class="List list-unstyled">
              <!-- Тут появятся наши задачи, когда мы их добавим -->
			  <button class="btn btn-primary" type="submit" name='rever' value=<?= $_GET['id']?>>OK</button>
            </ul>
          </div>
        </div>
		</form>
      </div>
    </div>
</div>
</body>