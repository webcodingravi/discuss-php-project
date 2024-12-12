<select class="form-select" name="category_id">
<option value="">Please Select..</option>
<?php
 include('database/config.php');
 $sql = $conn->prepare("SELECT * FROM category");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $row) {
        $id = $row['id'];
        $name = ucfirst($row['name']);
        echo "<option value=$id>$name</option>";
    }


?>
<option value="mobile">Mobile</option>
</select>