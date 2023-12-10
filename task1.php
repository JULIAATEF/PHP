        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>

        <?php
          print "Welcome to php"."<br>";
          echo "Welcome to php" ."<br>";
          $x=5;
          $y='Welcome';
          $z=True;
          echo $x."<br>".$y."<br>".$z."<br>";
          echo gettype($x)."<br>";
          echo gettype($y)."<br>";
          echo gettype($z)."<br>";

          for($i=0;$i<16;$i++){
            echo $i."<br>";
          }
          $h=0;
          while($h<16){
            echo $h."<br>";
            $h++;
          }
          define ('JULIA','ITI1');
          echo JULIA ."<br>";
          const K='ITI2'."<br>";
          echo K;


          $n=5;
          $m=3;
          $result=$n+$m;
          if($result>50){
            echo"Accepted"."<br>";
          }
          else{
            echo"Not accepted"."<br>";
          }




          function anyToString($v){
            $c=(string)$v;
            return gettype($c);

          }
          echo anyToString(5);



$A="1000$";
$B="1200$";
$C="1400$";
?>
<table border=1>
  <tr>
    <td><?php echo"Salary of MR.A" ?></td>
  <td><?php echo $A ?></td>
</tr>
<tr>
    <td><?php echo"Salary of MR.B" ?></td>
  <td><?php echo $B ?></td>
</tr>
<tr>
    <td><?php echo"Salary of MR.C" ?></td>
  <td><?php echo $C ?></td>
</tr>

</table>



            
        </body>
        </html>