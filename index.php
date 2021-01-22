<p>=========Task One=========</p>
<br>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php 
   


   
     function factorial_of_a_number($n) 
     {

       if(isset($_POST['submit']) && $n == 0)
       {
         return 1;
       }
       else{
         return $n * factorial_of_a_number($n-1);
         $n=$_POST['n1'];
        }
      }
      
      echo "Factorial is ";
    //  print_r(isset($_POST['submit']));
     print_r(factorial_of_a_number(4));
     
   echo '<br>';

    //  if(isset($_POST['n1']))
    //  {
    //      $m=$_POST['n1'];
    //      if($m>=0)
    //      {
    //          if($m==0 || $m==1)
    //          {
    //              $f=1;
    //          }
    //          else
    //          {
    //              $f=1;
    //              for($j=2; $j<=$m; $j++)
    //              {
    //                  $f=$f*$j;
    //              }
    //          }
    //          echo "Factorial is ".$f;
    //      }
    //      else
    //      {
    //          echo $m." is not a Non-Negative Integer.";
    //      }
    //  }
?>

</head>

<body>
  <!-- <form action="index.php" method="post">
    Enter a Non-Negative Integer: <input class="number" type="number" name="n1" required>
    <input class="input" type="submit" name="submit" value="value">
  </form> -->
</body>

</html>

<br>
<p>=========Task Two=========</p>
<br>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php 

function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n % $x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = IsPrime(13);
if ($a==0)
echo 'This is not a Prime Number.....'. $a ."\n";
else
echo 'This is a Prime Number..'.  $a ."\n";
?>

<body>

</body>

</html>
<br>
<br>
<p>=========Task Three=========</p>
<br>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php 

function reverse($str) {
  return strrev($str);
}
$str = "GoNoGo";
echo Reverse($str)
?>

<body>

</body>

</html>

<br>
<p>=========Task Four=========</p>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php 
    // function Sort($alpha) {
    //   return sort($alpha);
    // }
    // $alpha = ["Obama" , "Dan" , "Andrew" , "David" , "Michelle"];
    // sort($alpha);
    // var_dump($alpha);

    // I tried so much but o will get back to it 
    function words($alpha) {
       
      } 
    
      //performing sort
      $alpha = array("Obama" , "Dan" , "Andrew" , "David" , "Michelle");
      sort($alpha);
      echo "After Sort"."<br>";
      //array after sorting
      $sorting = count($alpha);
      foreach($alpha as $key=>$value)
      {
      echo $key."=>".$value."<br>";
      }


   
?>

<body>

</body>

</html>

<br>
<p>=========Task Five=========</p>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Function lower case</title>
</head>
<?php
    // $string ="awAsome";
    // $check = ucwords($string);
    // $result = strcmp($string, $check);
    // if($result = 0){
    //   echo "First letter of every word is Capital";
    // }else {
    //   echo "First letter of every word is not Capital";
    // }
   
    function is_str_lowercase($str1)
   {
    for ($sc = 0; $sc < strlen($str1); $sc++) {
	      if (ord($str1[$sc]) >= ord('A') &&
          ord($str1[$sc]) <= ord('Z')) {
      return false;
         }
         }
      return true;
       }
       var_dump(is_str_lowercase('abc def ghi'));
       var_dump(is_str_lowercase('abc dEf ghi'));
   
?>

<body>

</body>

</html>

<br>
<p>=========Task Six=========</p>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Function lower case</title>
</head>
<?php 
   function check_palindrome($string)
   {
     if ($string == strrev($string))
       return 1;
       else
        return 0;
   }
   echo check_palindrome('mum');

   ?>

<body>

</body>

</html>

<br>
<p>=========Task Seven=========</p>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> </title>
</head>
<?php
 
 function three_Sum($arr, $target)
 {
 $count = count($arr) - 2;
 $result=[];
 for ($x = 0; $x < $count; $x++) {
     if ($arr[$x] + $arr[$x+1] + $arr[$x+2] == $target) {
         array_push($result, "{$arr[$x]} + {$arr[$x+1]} + {$arr[$x+2]} = $target");
     }
 }
 return $result;
 }
 $my_array = array(2, 7, 7, 1, 8, 2, 7, 8, 7);
 print_r(three_Sum($my_array, 16));
 print_r(three_Sum($my_array, 11));
 print_r(three_Sum($my_array, 12));
 ?>



<body>

</body>

</html>