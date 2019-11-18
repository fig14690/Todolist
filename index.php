<?php
 require_once "function.php";
//  require_once 'valid.php';
 $selects=SelectDB();
 $category=SelectCategory();
//  echo $selects;
// var_dump($selects);

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
    <div class="row">
 
      <div class="col-12">
        <h1>Управление проектами, делами и собой</h1>
      </div>
    </div>
    
  </div>

  <div class="container" >
    <div class="row">	
    <?php foreach($category as $categ): ?>
      <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 border">
	      <form  method="post" action="valid.php">
        <!-- содержимое первой колонки -->
		    <h2 class="todo__caption"><?=$categ['title']; ?></h2>
		
          <input type="text" name="note" class="form-control"  placeholder="Новая задача">
		  <!-- Создаём пока ещё пустой список «Позвонить» -->
            <button class="btn btn-primary" type="submit" name='ok' value=<?=$categ['id']; ?>>OK</button>
          <div class="tdl1Div">
          <p>
            <ul class="List list-unstyled border text-danger">
               <?php if($_GET['get'] !== true && $_GET['get2']==$categ['id']){echo 'Введите данные';} ?>
            </ul>
          </p>
          <p>
          <?php $notes=SelectNoteCategory($categ['id']); ?>
       
            <?php foreach ($notes as $note): ?>
              
            <ul class="List list-unstyled border">
              
            <div class="tdl1Div border">
               <?= $note['note']; ?> 
               </div>
               <p>
               <div class="tdl1Div ">
               <button class="btn btn-danger btn-sm align-middle"  type="submit" name='del' value=<?=$note['id']; ?>>Del</button>
               <button class="btn btn-success btn-sm align-middle"  type="submit" name='upd' value=<?=$note['id']; ?>>Upd</button>
              </div>
              </p>
            </ul>
            <?php endforeach; ?> 
            </form>
            </p>
          </div>
		    </form>
      </div>
            <?php endforeach; ?>
    </div>
  </div>
 
</body>
<!-- конец всей страницы -->
</html> 
