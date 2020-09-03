<?php
  include("config/db_connect.php");
  include("check.php");
  include("fetch.php");
  
?>

<html>
 <div class = "form">
    <form action = "index.php" method = "POST">
      <label>Enter your todo description: <br></label>
      <input type="text" name="description" value = "<?php echo $description?>">
      <div style="color:red"><?php echo $errors['description']; ?></div>
      <label>Place:<br></label>
      <input type="text" name="place" value = "<?php echo $place?>">
      <div style="color:red"><?php echo $errors['place']; ?></div>
      <label>Time<br></label>
      <input type="date" name="time" value = "<?php echo $time?>">
      <div style="color:red"><?php echo $errors['time']; ?></div>
      <input type="submit" name="submit" value="submit">
    </form>
  </div>

  <div class = "container">
    <table>
      <tr>
        <th>Description</th>
        <th>Place</th>
        <th>Time</th>
      </tr>
      <?php foreach($data as $result){ ?>
      <tr>
        <td><?php echo $result['description']?></td>
        <td><?php echo $result['place']?></td>
        <td><?php echo $result['time']?></td>
      </tr>
      <?php } ?>
    </table>
</html>
