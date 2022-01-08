<!DOCTYPE html>
<html>
<body>

<?php
// variables declare
 $a = "Hello World!";
 $b = "How Are You!";
 $c = "Are you eligible?";
 $text = "Youtube.com";
 echo "I Love $text";
 echo "<br>";

echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>"; 

// Adding
$a = 10;
$b = 15;
$c = 20;

echo $a + $b + $c;
echo "<br>";

//string
echo strlen("Youtube.com");
echo "<br>";
echo str_word_count("Youtube com");
echo "<br>";
echo strrev("Hello World!");
echo "<br>";


//conditional statement
//If Statement
if (8>10) {
    echo "We Do It.";
}
else {
    echo "We Failed In Our Mission.";
}
echo "<br>";

//nested If else statement
if (8>5) {
    echo "We Do It.<br><br>";
      if (22>15) {
        echo "Run.";
      }
      else {
        echo "Run Out.";
      }
}
 else {
    echo "We Failed In Our Mission.";
}
echo "<br>";
if ((1>2) OR (5>4)) {
    echo "True.";
}
else {
    echo "Wrong.";
}
echo "<br>";

//PHP Switch statement
$fav_fruit = "Orange";
switch ($fav_fruit) {
  case 'Orange':
    echo "This fruit color is orange";
    break;
    case 'Mango':
    echo "This fruit color is yellow";
    break;
    case 'Apple':
    echo "This fruit color is marron";
    break;
    default:
    echo "none of these";
    break;
}
echo "<br>";

  //Php While loop
   $y = 10;
   while ($y <=10) {
     echo "The number is:$y<br>";
     return 0;
   }
   echo "<br>";

   //Php do-while loop
   $y = 10;
  do {
    echo "The number is: $y <br>";
    return 0;
  }
   while ($y <=3);
   echo "<br>";

   //Php for loop
   //for ($i=0; $i <= 10; $i++) { 
   //  echo "The Numbers is: $i <br>";
   //}

   //Php array
   $cars = array("Volvo", "BMW", "Toyota");
   echo "I like ".$cars[0]."";
?> 

</body>
</html>
