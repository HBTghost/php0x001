<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome, Brian Drake</title>
</head>
<body>
  <?php
    $friends = array("Brian", "Drake", "John");
    $len = count($friends);
    echo "For Loop: <br>";
    for ($i=0; $i < $len; $i++) { 
      echo "$friends[$i] <br>";
    }
    echo "<br>While Loop: <br>";
    while (--$len >= 0) {
      echo "$friends[$len] <br>";
    }
  ?>

</body>
</html>
