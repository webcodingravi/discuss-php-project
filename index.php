<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discuss Php Project</title>
      <!-- Bootstrap-5 css file -->
    <link href="public/bootstrap-5/bootstrap.min.css" rel="stylesheet" />
    <!-- cusstom css file -->
     <link href="public/css/style.css" rel="stylesheet" />
</head>
<body>
     <!-- header section -->
    <?php  
    session_start(); 
    include('frontent/header.php');  ?>

    <!-- signup section -->
     
     <?php 
     


   
      if(isset($_GET['signup'])) {
        if(!isset($_SESSION["user"]["username"])) {
           include('frontent/signup.php');  
        }
        
       }else if(isset($_GET['login'])) {
        if(!isset($_SESSION["user"]["username"])) {
         include('frontent/login.php'); 
        }
         
     }else if(isset($_GET['ask'])){
      if(isset($_SESSION["user"]["username"])) {
      include('frontent/ask.php'); 

      }

    }else if(isset($_GET['q-id'])) {
      $qid = $_GET['q-id'];
      include('frontent/question-details.php');
    }else if(isset($_GET['c-id'])) {
      $cid = $_GET['c-id'];
      include('frontent/question.php');

    }else if(isset($_GET['u-id'])) {
      $uid = $_GET['u-id'];
      if(isset($_SESSION["user"]["username"])) {
      include('frontent/question.php');
      }

    }else if(isset($_GET['latest'])) {
      include('frontent/question.php');

    }else if(isset($_GET['search'])) {
      $search = trim($_GET['search']);
      include('frontent/question.php');

    }
    
    else{
      include('frontent/question.php');
   }
  
     ?>

    <script src="public/bootstrap-5/bootstrap.js"></script>
</body>
</html>