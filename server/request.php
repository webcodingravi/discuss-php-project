<?php
session_start();
 if(isset($_POST['signup'])) {
    include('../database/config.php');
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = md5(trim($_POST['password']));
    $address = trim($_POST['address']);
   
  $sql = $conn->prepare("INSERT INTO users(name,email,password,address) VALUE(?,?,?,?)");
  $result = $sql->execute(array($name,$email,$password,$address));
   $sql->insert_id;
 if($result) {

     $_SESSION["user"] = ["username" => $name, "email" => $email, "user_id" =>$sql->insert_id];
     header("location: /discus-project-php");

 }else{
     echo "New User Not Registered";

 }



 }else if(isset($_POST['login'])) {
   include('../database/config.php');
   $email = trim($_POST['email']);
   $password = md5(trim($_POST['password']));
   $username = "";
   $user_id = 0;
   $sql = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $sql->execute(array($email,$password));
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    if(count($result)) {
      foreach($result as $row) {
         $username = $row["name"];
         $user_id = $row['id'];
   
   }
     $_SESSION["user"] = ["username" => $username, "email" => $email, "user_id" => $user_id];
      header("location: /discus-project-php");
   
}else{
  header("location: /discus-project-php?login");
}

 }else if(isset($_GET['logout'])) {
  session_unset();
  header("location: /discus-project-php");

 }else if(isset($_POST['ask'])) {
  include('../database/config.php');
  $title = trim($_POST['title']);
  $description = trim($_POST['description']);
  $category_id = trim($_POST['category_id']);
  $user_id = $_SESSION["user"]["user_id"];

  $question = $conn->prepare("INSERT INTO question(title,description,category_id,user_id) VALUE(?,?,?,?)");
  $result = $question->execute(array($title,$description,$category_id,$user_id));

  if($result) {
 
      header("location: /discus-project-php");
 
  }else{
      echo "New Question Not Inserted";
 
  }

 }else if(isset($_POST['answer'])) {
  include('../database/config.php');
  $answer = trim($_POST['answer']);
  $question_id = trim($_POST['question_id']);
  $user_id = $_SESSION["user"]["user_id"];


  $question = $conn->prepare("INSERT INTO answers(answer,question_id,user_id) VALUE(?,?,?)");
  $result = $question->execute(array($answer,$question_id,$user_id));

  if($result) {
 
      header("location: /discus-project-php?q-id=$question_id");
 
  }else{
      echo "New Answer Not Inserted";
 
  }
 }else if(isset($_GET['delete'])) {
    include('../database/config.php');
    $qid = $_GET['delete'];
    $sql = $conn->prepare("DELETE FROM question WHERE id = $qid");
  if($sql->execute()) {
    header("location: /discus-project-php");

  }else{
    echo "Question Not Deleted";
  }



 }




?>