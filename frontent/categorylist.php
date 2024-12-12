<div class="category-list">
    <h1 class="heading text-center mb-5">Category</h1>
    <?php
      include('database/config.php');
      $sql = $conn->prepare("SELECT * FROM category");
      $sql->execute();
      $result = $sql->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as $row) {
        $name = ucfirst($row['name']);
        $id = $row['id'];
        echo "<div class='row question-list'>
         <h4><a href=?c-id=$id>$name</a></h4>
        </div>";
      }
    ?>
</div>