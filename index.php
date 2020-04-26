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

      function isGrown() {
        return $this->age >= 18;
      }
    }

    $Brian = new Person("Brian", "20", "DevOps");
    if ($Brian->isGrown()) {
      echo "$Brian->name is grown";
    } else {
      echo "$Brian->name isn't grown";
    }
  ?>

</body>
</html>
