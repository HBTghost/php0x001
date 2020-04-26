<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome, Brian Drake</title>
</head>
<body>
  <form action="index.php" method="post">
    Number 1: <input type="number" step="0.1" name="num1">
    <br>
    Operator: <input type="text" name="op">
    <br>
    Number 2: <input type="number" step="0.1" name="num2">
    <br>
    <input type="submit">
  </form>
  <br>
  <?php
    $num1 = $_POST["num1"];
    $op = $_POST["op"];
    $num2 = $_POST["num2"];
    switch ($op) {
      case '+':
        echo $num1 + $num2;
        break;
      case '-':
        echo $num1 - $num2;
        break;
      case '*':
        echo $num1 * $num2;
        break;
      case '/':
        echo $num1 / $num2;
        break;
      default:
        echo "Invalid Operator";
        break;
    }
  ?>

</body>
</html>
