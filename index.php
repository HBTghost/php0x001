<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome, Brian Drake</title>
</head>
<body>
  <?php
    class Person {
      public $name;
      private $age;
      public $job;

      function __construct($name, $age, $job) {
        $this->name = $name;
        $this->setAge($age);
        $this->job = $job;
      }

      function setAge($age) {
        if ($age >= 0) {
          $this->age = $age;
        } else {
          $this->age = 0;
        }
      }

      function getAge() {
        return $this->age;
      }

      function isGrown() {
        return $this->age >= 18;
      }
    }

    $Brian = new Person("Brian", -3, "DevOps");
    $age = $Brian->getAge();
    echo "Age $age <br>";
    if ($Brian->isGrown()) {
      echo "$Brian->name is grown";
    } else {
      echo "$Brian->name isn't grown";
    }
  ?>

</body>
</html>
