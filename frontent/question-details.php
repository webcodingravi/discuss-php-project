<div class="question-details mt-5">
    <div class="container">
        <div class="row">
            <div class="col-8">
            <h1 class="heading text-center mb-5">Question</h1>
                <div class="card">
        <?php
          include('database/config.php');
          $sql = $conn->prepare("SELECT * FROM question WHERE id = $qid");
          $sql->execute();
          $result = $sql->fetchAll(PDO::FETCH_ASSOC);
          $cid = "";
          if(count($result)) {
          foreach($result as $row) {
            $cid = $row['category_id'];
          echo "<h4 class='mb-1 question-title'>Question: ".$row['title']."</h4>
          <p class='mb-4'>Answer: " .$row['description']."</p>";
          include('frontent/answer.php');

        } 
        }
          ?>
           <form action="server/request.php" method="post">
            <input type="hidden" name="question_id" value="<?php echo $qid; ?>">
          <textarea name="answer" id="answer" class="form-control mb-3" placeholder="Your Answer..."></textarea>
          <div class="card-footer">
          <button class="btn btn-primary">Write your answer</button>
          
          </div>
          </form>
    </div>
   
    </div>
    <div class="col-4">
    
      <?php
       $CategorySql = $conn->prepare("SELECT name FROM category WHERE id = $cid");
       $CategorySql->execute();
       $CategoryResult = $CategorySql->fetchAll(PDO::FETCH_ASSOC);
       foreach($CategoryResult as $cat) {
          $categoryName = ucfirst($cat['name']);
       echo "<h1 class='heading text-center mb-5'>$categoryName</h1>";
       }

        $sql = $conn->prepare("SELECT * FROM question WHERE category_id = $cid AND id!=$qid");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $row) {
          $id = $row['id'];
          $title = ucfirst($row['title']);
          echo "<div class='question-list'>
               <h4><a href='?q-id=$id'>$title</a></h4>
          </div>";
        }
      ?>
    </div>
</div>
</div>
</div