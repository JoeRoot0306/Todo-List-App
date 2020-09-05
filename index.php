<?php
  include("fetch.php");
?>

<html>
 <div class = "form">
    <form action = "store.php" method = "POST">
      <label>Enter your todo description:<br></label>
      <input type="text" name="description" value =><br>
      <label>Place:<br></label>
      <input type="text" name="place" value = ><br>
      <label>Time<br></label>
      <input type="date" name="time" value = ><br>
      <input type="submit" name="submit" value="submit">
    </form>
  </div>

  <div class = "container">
    <table>
      <tr>
        <th>Description</th>
        <th>Place</th>
        <th>Time</th>
        <th>Action</th>
      </tr>
      <?php foreach($data as $result){ ?>
      <tr>
        <td><?php echo $result['description'];?></td>
        <td><?php echo $result['place'];?></td>
        <td><?php echo $result['time'];?></td>
        <td><a href ="">Update</a></td>
        <td><a href="store.php?delete=<?php echo $result['id']; ?>">Delete</a></td>
      </tr>
      <?php } ?>
    </table>
</html>
