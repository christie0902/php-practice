<?php 
// $first_name = 'XT';
// $surname = 'Pham';
// $year_of_birth = 1993;
// $height = 160;
// define('SERVER_SOFTWARE','Apache');

// function greet_world() {
//     echo 'Hello World';
// }

// greet_world();

// function greet ($whom) {
//    echo "Hello $whom";
// }

// greet('Prague');
// // calling var by refering to the memory where it is stores > faster and save memories
// function my_function(&$bar) {
//     $bar++
//     //without & have to put return here return $bar;
// }

// $foo = 1;
// my_function($foo);


function headline ($string,$number=1) {
    return "<h$number>$string</h$number>";
}

$result = headline("ABC");
echo ($result);

?>

<!-- <ol>
<li><?='Firstname:' . $first_name?></li>
<li><?='Surname:' . $surname?></li>
<li><?='Year or birth:' . $year_of_birth?></li>
<li><?="Height:{$height}cm"?></li>
</ol>

<?='This server is running on ' . SERVER_SOFTWARE?> -->










<!-- <?php
  $a = 1;
 
  echo $a; // Works fine
   
  function foo($a)
  {
      $a = 12;
      $b = 2;
      echo $b;
  }
// take the origial value before the function
  foo($a);
  echo $a;
  define('MY_SERVER', 'Apache');
  echo MY_SERVER;

  function raiseByOne($number)
{
    $number++;
 
    return $number;
}
 
$result = raiseByOne(20); // $result == 11
echo $result;
?> -->


<!-- 
<?php phpinfo(); ?>
<?= 'Hello world!' ?> -->

