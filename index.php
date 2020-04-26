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

      function __construct($name, $age) {
        $this->name = $name;
        $this->setAge($age);
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
    
    class Student extends Person {
      function getJob() {
        return "Student";
      }
    }

    $Brian = new Person("Brian", -3);
    $age = $Brian->getAge();
    echo "Age $age <br>";
    if ($Brian->isGrown()) {
      echo "$Brian->name is grown <br>";
    } else {
      echo "$Brian->name isn't grown <br>";
    }

    $John = new Student("John", 5);
    echo $John->getJob();
  ?>

</body>
</html>
