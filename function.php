<?php
$user = 'root';
$pass ; 

$db= new PDO('mysql:host=localhost; dbname=todo', $user, $pass); 


function SelectDB(){ 
    global $db;
    $stm=$db->prepare("SELECT note FROM test");
    $stm->execute();
    $ar=$stm->fetchAll(PDO::FETCH_ASSOC);
    return $ar;  
}

function SelectNoteCategory($id){
    global $db;
    $stm=$db->prepare("SELECT note, id FROM test WHERE category=:id");
    $stm->execute(['id'=>$id]);
    $ar=$stm->fetchAll(PDO::FETCH_ASSOC);
    return $ar;  
}

function SelectCategory(){
    global $db;
    $stm=$db->prepare('SELECT * FROM category');
    $stm->execute();
    $ar=$stm->fetchAll(PDO::FETCH_ASSOC);
    return $ar;
}

function InsertDB(){
    $note=$_POST['note'];
    $category=$_POST['ok'];
    try{
    global $db; 
    $sql=$db->prepare("INSERT INTO test (note, category, state, created_at, updated_at, auth_id) VALUES ( :note, $category, '1', NOW(), NOW(), '1')");
    $sql->execute(['note'=>$note]);
    } catch (PDOExeption $e) {
        print $e->getMessage();
    }
}

function DeletedNote($id){
    global $db;
    $sql= $db->prepare("DELETE FROM test WHERE id=:id;");
    $sql->execute(['id'=>$id]);
}

function UpdateNote($note, $id){
    global $db;
    $sql= $db->prepare("UPDATE test SET note = :note WHERE id=:id;");
    $sql->execute(['note'=>$note, 'id'=>$id]);
}

function SelectUpdate($id){
    global $db;
    $sql=$db->prepare("SELECT note FROM test WHERE id=:id");
    $sql->execute(['id'=>$id]);
    $ar=$sql->fetch(PDO::FETCH_ASSOC);
    return $ar;
}

// var_dump(SelectUpdate(23));