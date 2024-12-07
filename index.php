<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
      <?php

        // Example 01

        /*$result = array("Roni" => 50, "Tarek" => 40, "Abir" => 25);
        echo $result['Tarek'] . "<br>";
        var_dump($result);*/

        // Example 02

        /*$number1 =5;
        $number2 =8;

        $result = $number1 + $number2;
        echo $result;*/ 

        // Example 03

        /*$number1 =5;
        $number2 =8;

        $number1 += $number2;
        echo $number1;*/

        // Example 04

        /*$number1 =7;
        $number2 =7;

        if ($number1 == $number2) {
        echo "equal";
        }else{
        echo "not equal" ;
        }*/

        // Example 05

        /*$number1 =7;
        $number2 =8;

        if ($number1 == $number2) {
        echo "equal";
        }else{
        echo "not equal" ;
        }*/        

        // Example 06

        /*$number3 =7;
        $number4 =7;

        if ($number3 === $number4) {
          echo "identical";
        }else{
          echo "not identical";
        }*/

        // Example 07

        /*$number3 =7;
        $number4 ="7";

        if ($number3 === $number4) {
          echo "identical";
        }else{
          echo "not identical";
        }*/

        // Example 08

        // echo "My first PHP script!";

        // Example 09

        /*$txt = "W3Schools.com";
        echo "I love $txt!";*/

        // Example 10

        /*$txt = "W3Schools.com";
        echo "I love " . $txt . "!";*/

        // Example 11

        /*$x = 5;      // $x is an integer
        $y = "John"; // $y is a string
        echo $x;
        echo $y;*/

        // Example 12

        /*$x = 5;
        var_dump($x);*/

        // Example 13

        /*var_dump(5);
        var_dump("John");
        var_dump(3.14);
        var_dump(true);
        var_dump([2, 3, 56]);
        var_dump(NULL);*/

        // Example 14

        // $x = $y = $z = "Fruit";

        // Example 15

        /*$x = 5; // global scope

        function myTest() {
          // using x inside this function will generate an error
          echo "<p>Variable x inside function is: $x</p>";
        }
        myTest();

        echo "<p>Variable x outside function is: $x</p>";*/

        // Example 16

        /*function myTest() {
        $x = 5; // local scope
        echo "<p>Variable x inside function is: $x</p>";
        }
        myTest();

        // using x outside the function will generate an error
        echo "<p>Variable x outside function is: $x</p>";*/

        // Example 17

        /*$x = 5;
        $y = 10;

        function myTest() {
          global $x, $y;
          $y = $x + $y;
        }

        myTest();
        echo $y; // outputs 15*/

        // Example 18

        /*$x = 5;
        $y = 10;

        function myTest() {
          $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        myTest();
        echo $y; // outputs 15*/

        // Example 19

        /*function myTest() {
        static $x = 0;
        echo $x;
        $x++;
        }

        myTest();
        myTest();
        myTest();*/

        // Example 20

        /*echo "Hello";
        //same as:
        echo("Hello");*/

        // Example 21

        /*$txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";

        echo '<h2>' . $txt1 . '</h2>';
        echo '<p>Study PHP at ' . $txt2 . '</p>';*/

        // Example 22

        /*$txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";

        echo "<h2>$txt1</h2>";
        echo "<p>Study PHP at $txt2</p>";*/

        // Example 23

        /*print "Hello";
        //same as:
        print("Hello");*/

        // Example 24

        /*$txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";

        print "<h2>$txt1</h2>";
        print "<p>Study PHP at $txt2</p>";*/  

        // Example 25

        /*$txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";

        print '<h2>' . $txt1 . '</h2>';
        print '<p>Study PHP at ' . $txt2 . '</p>';*/

        // Example 26

        /*$x = "Hello world!";
        $y = 'Hello world!';

        var_dump($x);
        echo "<br>";
        var_dump($y);*/

        // Example 27

        /*$x = true;
        var_dump($x);*/

        // Example 28

        /*$cars = array("Volvo","BMW","Toyota");
        var_dump($cars);*/

        // Example 29

        /*class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
          $this->color = $color;
          $this->model = $model;
        }
        public function message() {
          return "My car is a " . $this->color . " " . $this->model . "!";
        }

        }
        $myCar = new Car("red", "Volvo");
        var_dump($myCar);*/

        // Example 30

        /*$x = 5;
        var_dump($x);

        $x = "Hello";
        var_dump($x);*/

        // Example 31

        /*$x = 5;
        $x = (string) $x;
        var_dump($x);*/

        // Example 32

        // echo strlen("Hello world!");

        // Example 33

        // echo str_word_count("Hello world!");

        // Example 34

        // echo strpos("Hello world!", "world");

        // Example 35

        /*$x = "Hello World!";
        echo strtoupper($x);*/

        // Example 36

        /*$x = "Hello World!";
        echo strtolower($x);*/

        // Example 37

        /*$x = "Hello World!";
        echo str_replace("World", "Dolly", $x);*/

        // Example 38

        /*$x = " Hello World! ";
        echo trim($x);*/

        // Example 39

        /*$x = "Hello";
        $y = "World";
        $z = $x . $y;
        echo $z;*/

        // Example 40

        /*$x = "Hello World!";
        echo substr($x, 6, 5);*/

        // Example 41

        /*$x = "Hello World!";
        echo substr($x, -5, 3);*/

        // Example 42

        // $x = "We are the so-called \"Vikings\" from the north.";

        // Example 43

        /*$x = 5985;
        var_dump(is_int($x));

        $x = 59.85;
        var_dump(is_int($x));*/

        // Example 44

        /*$a = 5;       // Integer
        $b = 5.34;    // Float
        $c = "hello"; // String
        $d = true;    // Boolean
        $e = NULL;    // NULL

        $a = (string) $a;
        $b = (string) $b;
        $c = (string) $c;
        $d = (string) $d;
        $e = (string) $e;

        //To verify the type of any object in PHP, use the var_dump() function:
        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);*/

        // Example 45

        /*echo(min(0, 150, 30, 20, -8, -200));
        echo(max(0, 150, 30, 20, -8, -200));*/

        // Example 46

        /*define("GREETING", "Welcome to W3Schools.com!");

        function myTest() {
          echo GREETING;
        }

        myTest();*/

        // Example 47

        /*if (5 > 3) {
        echo "Have a good day!";
        }*/

        // Example 48

        /*$favcolor = "red";

        switch ($favcolor) {
        case "red":
          echo "Your favorite color is red!";
          break;
        case "blue":
          echo "Your favorite color is blue!";
          break;
        case "green":
          echo "Your favorite color is green!";
          break;
        default:
          echo "Your favorite color is neither red, blue, nor green!";
        }*/ 

        // Example 49

        /*$i = 1;
        while ($i < 6) {
          echo $i;
          $i++;
        }*/ 

        // Example 50

        /*$i = 1;

        do {
          echo $i;
          $i++;
        } while ($i < 6);*/

        // The End
         
      ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>