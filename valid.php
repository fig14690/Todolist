<?php
require_once ('function.php');

// var_dump($_POST);
// exit;

switch (isset($_POST)){
  
case ($_POST['del']!==NULL): //Удаляем запись
    DeletedNote($_POST['del']);
    header('Location:index.php');
    break;

case (isset ($_POST['upd'])): //переход на обновление
    $note=$_POST['note'];
    $id=$_POST['upd'];
    header("Location:update.php?id=$id");
break;

case (isset ($_POST['note']) ): 
    if ($_POST['note'] !== ''){ //Записать новую запись
    InsertDB();
    header('Location:index.php');
    }
    else {    //ошибка при пустой строке
        $er_note='false';
        $ok=$_POST['ok'];
        header("Location:index.php?get=$er_note&get2=$ok");
        }
    break;

case (isset($_POST['rever'])): //отправить на обновление
    UpdateNote($_POST['re_note'], $_POST['rever']);
    header('Location:index.php');
} 

//конец switch
// echo 'vhe switch';
?>