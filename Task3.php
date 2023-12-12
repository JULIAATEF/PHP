<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>

        <?php
//STRING
        $string="a";
        $times=5;
        echo str_repeat( $string, $times)."<br>";


        $str='NfSdJU';
       echo str_shuffle($str)."<br>";
        



        $STR1="hi jhvagvgcfac";
        $STR2="c";
        if(str_starts_with("$STR1","$STR2")){
            echo "The string begains with  ".$STR2."<br>";
        }
        elseif(str_ends_with("$STR1","$STR2")){
            echo "The string ends with  ".$STR2."<br>";
        }
      
        else{
            echo "null";
        }


        $k="ABCD";
        echo strrev($k)."<br>";

//ARRAY
$arr1=['Name','Age'];
$arr2=['Julia','22'];
$arr3= array_combine($arr1,$arr2);
foreach($arr3 as $person){
    echo $person."<br>";
}
//echo var_dump($arr3);

$a=["asmaa"=>25,"ahmed"=>23];
$b=["ahmed"=>23,"ali"=>20];

$c=array_diff_key($a,$b);

foreach( $c as $person){
    echo $person."<br>";
}


$v=array_keys($a);
foreach( $v as $person){
    echo $person."<br>";

    }
$x=["Neo", "Morpheus", "Trinity", "Cypher", "Tank"];
    $rand_keys = array_rand($x, 2);
    foreach( $rand_keys as $rand){
        echo $rand."<br>";
    }


    $n=array_merge($a,$b);


foreach( $n as $person){
    echo $person."<br>";
}


  ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
  <label>First Name</lable>
  <input type="text" name="Fname">
  <label>last Name</lable>
  <input type="text" name="lname">
<input type="submit" value="ok">
</form> 
<br>
  <?php
  function is_required($var){
    if(empty($var)){
        echo "it is required";
    }
    else{
        echo $var;
    }
  }
  is_required(htmlspecialchars(strip_tags(trim($_POST['Fname']))));
  ?>
  



            
        </body>
        </html>