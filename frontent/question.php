<div class="question-section mt-5">
<div class="container">
    <div class="row">
    <div class="col-8">
    <h1 class="heading text-center mb-5">Questions</h1>
    <?php

       
       include('database/config.php');
       if(isset($_GET['c-id'])) {
        $sql = $conn->prepare("SELECT * FROM question WHERE category_id =$cid");

       }else if(isset($_GET['u-id'])) {
        $sql = $conn->prepare("SELECT * FROM question WHERE user_id =$uid");
       }else if(isset($_GET['latest'])) {
        $sql = $conn->prepare("SELECT * FROM question ORDER BY id desc");
        
       }else if(isset($_GET['search'])) {
        $sql = $conn->prepare("SELECT * FROM question WHERE title LIKE '%$search%'");
       }else{
        $sql = $conn->prepare("SELECT * FROM question");

       }
       $sql->execute();
       $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $row) {
                $uid = '';
                if(isset($_GET['u-id'])) {
                  $uid = $_GET['u-id'];
                }
                $title = $row['title'];
                $id = $row['id'];
                    
                echo "<div class='question-list '>
                 <h4 class='my-question'><a href='?q-id=$id'>$title</a>";
                  echo $uid ? "<a href='server/request.php?delete=$id' class='btn btn-danger btn-sm delete-btn'>Delete</a>" : NULL;
                 echo "</h4>
                </div>";
            }
        


       ?>
</div>
       <div class="col-4">
        <?php
        include('frontent/categorylist.php');
        ?>
       </div>
</div>

</div>
</div>
