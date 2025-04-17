<?php
  //String data types
  $string1 = "Hello, World!";
  $string2 = 'PHP is awesome!';
  echo $string1 . " " . $string2;

  echo "<br>";
  //integer data types
  $num1 = 100;
  $num2 = -50;
  echo $num1 + $num2; 

  echo "<br>";
  //float data types
  $float1 = 10.5;
  $float2 = 3.1416;
  echo $float1 * $float2;

  echo "<br>";
  //boolean data types
  $is_php_fun = true;
  $is_php_hard = false;

  if ($is_php_fun) {
    echo "Yes, PHP is fun!";
  }

  echo "<br>";
  //array data types
  $fruits = array("Apple", "Banana", "Mango");
  echo $fruits[0];

  //obejct data types
  class Car {
      public $brand;
      function setBrand($brand) {
        $this->brand = $brand;
      }
        function getBrand() {
          return $this->brand;
        }
  }

  $myCar = new Car();
  $myCar->setBrand("Toyota");

  echo "<br>";
  echo $myCar->getBrand();

  //NULL data types
  $value = NULL;

  echo "<br>";
  var_dump($value);

  echo "<br>";

  //Resource data types
  // A resource is a special variable, holding a reference to an external resource
  $filename = "test.txt";
  $file = fopen($filename, "r"); 

  if ($file) {
    echo "📂 File Content:\n\n\n\n";
    while (!feof($file)) { 
        echo fgets($file);
    }
    fclose($file);
  } else {
    echo "❌ Error: Could not open file!";
  }

  echo "<br>";
  
  //Checking data types
  $x = 10;
  var_dump($x);
  echo "<br>"; 
  echo gettype($x);

?>

<!DOCTYPE html>
<html>
<head>
<title>PHP with HTML</title>
</head>
<body>
<h1>Welcome to My Website</h1>
<p>The current year is: <?php echo date("Y"); ?></p>
</body>
</html>