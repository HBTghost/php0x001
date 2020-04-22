<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome, Brian Drake</title>
</head>
<body>
  <form action="index.php" method="get">
    Name: <input type="text" name="name">
    <input type="submit">
    <br>
    Age: <input type="number" name="age">
    <input type="submit">
  </form>
  <br>
  Your name is: <?php echo $_GET["name"]?>
  <br>
  Your age is: <?php echo $_GET["age"]?>
</body>
</html>
