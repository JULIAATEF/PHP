<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>


<?php
$values=["PHP", "HTML", "CSS", "JavaScript"];
$count=count($values);
for($i=0;$i<$count;$i++){
    echo $values[$i]."<br>";
}
echo "<br>";
foreach($values as $value){
    echo $value."<br>";
}
echo"<br>";


$info=["Name"=>"JULIA","Age"=>"22","Email"=>"juliaatef66@gmail.com","Collage"=>"Computers and information"];
?>
<table border=1>
  <tr>
    <td>Name</td>
  <td><?php echo $info["Name"];?></td>
</tr>
<tr>
    <td>Age</td>
  <td><?php echo $info["Age"];?></td>
</tr>
<tr>
    <td>Email</td>
  <td><?php echo $info["Email"];?></td>
</tr>
<tr>
    <td>Collage</td>
  <td><?php echo $info["Collage"];?></td>
</tr>

</table>
<br><br>

<form action="">
<label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname">

  <br><br>
<p>Address<p>
  <textarea name="Address" rows="10" cols="30"></textarea>
  <br><br>





  <label for="cars">Country</label>
<select id="country" name="country">
<option>select:country</option>
  <option value="Egypt">Egypt</option>
  <option value="China">China</option>
  <option value="Brazil">Brazil</option>
  
</select>








<br><br>
<p>GENDER :<p>
  <input type="radio" id="male" name="GENDER" value="MALE">
  <label for="Gender">Male</label><br>
  <input type="radio" id="female" name="GENDER" value="FEMALE">
  <label for="female">Female</label><br>


<br><br>
<p>SKILLS<p>


  <input type="checkbox" id="php" name="php" value="PHP">
  <label for="php"> PHP</label><br>
  <input type="checkbox" id="J2se" name="J2se" value="J2SE">
  <label for="J2se"> J2SE</label><br>
  <input type="checkbox" id="mysql" name="mysql" value="MYSQL">
  <label for="mysql"> MYSQL</label>
  <input type="checkbox" id="sql" name="sql" value="SQL">
  <label for="sql"> SQL</label>

  
</form>


</body>
        </html>



