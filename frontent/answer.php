<div class="answer">
    <div class="container">
        <h5>Answers: </h5>
    
        <?php

          $sql = $conn->prepare("SELECT * FROM answers WHERE question_id = $qid");
          $sql->execute();
          $result = $sql->fetchAll(PDO::FETCH_ASSOC);
          if(count($result)) {
            foreach($result as $row) {
              $answer = $row['answer'];
              echo "<div class='row'>
                 <p class='answer-wrapper'>$answer</p>
              </div>";
            }
          }
        ?>
    </div>
</div>
