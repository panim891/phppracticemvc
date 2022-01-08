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
   $y = 1;
   while ($y <= 5) {
     echo "The number is:$y<br>";
     $y++;
   }
   echo "<br>";

   //Php do-while loop
   $y = 1;
  do {
    echo "The number is: $y <br>";
    $y++;
  }
   while ($y <= 3);
   echo "<br>";

   //Php for loop
   for ($i=0; $i <= 10; $i++) { 
    echo "The Numbers is: $i <br>";
   }
   echo "<br>";

   // Php array
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like ".$cars[0].", ".$cars[1]." and ".$cars[2]."";
    echo "<br>";

   //index array
   $cars = array("Volvo", "BMW", "Toyota");
   $lengtharray = count($cars);
   echo "<br>";
   
   for ($i=0; $i < $lengtharray; $i++) { 
     echo $cars[$i];
     echo "<br>";
   }
   echo "<br>";

   //Associative Array
   $age = array("Ansh" => "25", "Ayush" => "34", "Arush" => "45");
   echo "Ansh Age is ".$age['Ansh']."";
   echo "<br>";

   //foreach loop
   $age = array("Ansh" => "25", "Ayush" => "34", "Arush" => "45");
   echo "<br>";

   foreach ($age as $key => $value) {
     echo "$key = $value <br><br>";
   }
   echo "<br>";

   //Multi-dimensional array
   $cars = array(
           array("Volvo",30,15),
           array("Ferrary",18,12),
           array("BMW",50,47)
   );
   
   echo "".$cars[0][0] .": In stock: ".$cars[0][1].", sell: ".$cars[0][2]."<br>";
   echo "".$cars[1][0] .": In stock: ".$cars[1][1].", sell: ".$cars[1][2]."<br>";
   echo "".$cars[2][0] .": In stock: ".$cars[2][1].", sell: ".$cars[2][2]."<br>";
   echo "<br>";

   //Php readfile
   readfile('msg.txt');
   echo "<br>";
   echo "<br>";

   //Php in_array
   $food = array('Apple','Banana','Orange','Grapes');
   if(in_array('Banana',$food)) {
     echo "Find successfully";
   }
   else {
    echo "Can not find";
   }
   echo "<br>";
   echo "<br>";

   //php isset
   $a = 1;
   if(isset($a)) {
     echo "Present";
   } 
   else {
     echo "absent";
   }
   echo "<br>";
   echo "<br>";

   //Php explode
   $message = "Save Our Country.";
   //explode(separator,string,limit)
   $array = explode(" ",$message,1);
   echo "<pre>";
   print_r($array);
   echo "</pre>";
   echo "<br>";

   //Php implode
   $arr = array('Hello', 'Ruby');
   $convert = implode(" ",$arr);
   echo $convert;
   echo "<br>";
   echo "<br>";

   //Php $_files and move_uploaded_file($tmp_name,destination)
   if (isset($_FILES['image'])) {
     echo "<pre>";
     print_r($_FILES);
     echo "</pre>";

     $file_name = $_FILES['image']['name'];
     $file_size = $_FILES['image']['size'];
     $file_tmp = $_FILES['image']['tmp_name'];
     $file_type = $_FILES['image']['type'];

     move_uploaded_file($file_tmp,'upload/'.$file_name);
   }
   echo "<br>";
   echo "<br>";

   //cookies
   $cookie_name = "user";
   $cookie_value = "hello";

   setcookie($cookie_name,$cookie_value,time()+(3600),"/");
  if (isset($_COOKIE[$cookie_name])) {
    echo "cookies is not set";
  } 
  else {
    echo $_COOKIE[$cookie_name];
  }
  echo "<br>";
  echo "<br>";



?> 
   <br><br>
   <!--Php superglobals-->
   <br>
   <form action="index1.php" method="post">
   Name: <input type="text" name="name"><br><br>
   Email: <input type="email" name="email"><br><br>
    <input type="submit" name="save">
   </form>

   <br><br>
   <!--Php $_files and move_uploaded_file($tmp_name,destination);-->
   <form action="" method = "POST" enctype="multipart/form-data">
     <input type="file" name="image"><br><br>
     <input type="submit">
   </form>
   <br>
</body>
</html>
