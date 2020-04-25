<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome, Brian Drake</title>
</head>
<body>
  <form action="index.php" method="post">
    <input type="checkbox" name="fruits[]" value="apples"> Apples
    <br>
    <input type="checkbox" name="fruits[]" value="pears"> Pears
    <br>
    <input type="checkbox" name="fruits[]" value="strawberries"> Strawberries
    <br>
    <input type="submit">
  </form>
  <br>
  Yours choice:
  <?php
    $friends = array("apples" => "good", "strawberries" => "fine", "pears" => "terrible");
    echo $friends[$_POST["fruits"][0]];
  ?>

</body>
</html>
