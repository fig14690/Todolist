<div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
         <form name="call" method="post" action="valid.php">
		<!-- содержимое второй колонки -->
		<h2 class="todo__caption">Позвонить</h2>
		<div id="tdl2App">
          <input type="text" name="note" class="form-control" placeholder="Новая задача">
		  <!-- Создаём пока ещё пустой список «Позвонить» -->
          <div class="tdl2Div">
            <ul class="List list-unstyled">
              <!-- Тут появятся наши задачи, когда мы их добавим -->
			  <button class="btn btn-primary" type="submit" name='ok' value='2'>Ok</button>
            </ul>
          </div>
        </div>
		</form>
      </div>
  


 	
      <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
         <form name="write" method="post" action="valid.php">
		<!-- содержимое третьей колонки -->
		<h2 class="todo__caption">Написать</h2>
		<div id="tdl3App">
          <input type="text" name="note" class="form-control" placeholder="Новая задача">
		  <!-- Создаём пока ещё пустой список «Позвонить» -->
          <div class="tdl3Div">
            <ul class="List list-unstyled">
              <!-- Тут появятся наши задачи, когда мы их добавим -->
			  <button class="btn btn-primary" type="submit" name='ok' value='3'>OK</button>
            </ul>
          </div>
        </div>
		</form>
      </div>

      <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
         <form name="ideas" method="post" action="valid.php">
		<!-- содержимое четвёртой колонки -->
		<h2 class="todo__caption">Идеи</h2>
		<div id="tdl4App">
          <input type="text" name="note" class="form-control" placeholder="Новая задача">
		  <!-- Создаём пока ещё пустой список «Позвонить» -->
          <div class="tdl4Div">
            <ul class="List list-unstyled">
              <!-- Тут появятся наши задачи, когда мы их добавим -->
			  <button class="btn btn-primary" type="submit" name='ok' value='4'>OK</button>
            </ul>
          </div>
        </div>
		</form>
      </div>

      <?php switch ($_GET['get'] !== true ){
            case $_GET['get2'] == $categ['id']: echo "Введите данные";
          }?>

      <?php if($_GET['get'] != true && $_GET['get2']==$_categ['id']){echo 'Введите данные';} ?>