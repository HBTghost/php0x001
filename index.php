<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome, Brian Drake</title>
</head>
<body>
  <?php
    class Person {
      var $name;
      var $age;
      var $job;

      function __construct($name, $age, $job) {
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
      }
    }

    $Brian = new Person("Brian", "20", "DevOps");
    echo $Brian->job;
  ?>

</body>
</html>
