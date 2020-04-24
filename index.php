<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome, Brian Drake</title>
</head>
<body>
  <h1>Add 2 numbers:</h1>
  <form action="index.php" method="get">
    <input type="number" name="num1">
    <br>
    <input type="number" name="num2">
    <br>
    <input type="submit">
  </form>
  <br>

  Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?>
</body>
</html>
