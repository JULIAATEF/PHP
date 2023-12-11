<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
<table class="table">
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

<form>
<div class="mb-3">
<label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname">
  </div>
  <br><br>
<p>Address<p>
<div class="mb-3">
  <textarea name="Address" rows="10" cols="30"></textarea>
</div>
  <br><br>




  <div class="mb-3">
  <label for="cars">Country</label>
<select id="country" name="country">
<option>select:country</option>
  <option value="Egypt">Egypt</option>
  <option value="China">China</option>
  <option value="Brazil">Brazil</option>
  
</select>
</div>








<br><br>
<div class="mb-3">
<p>GENDER :<p>
  <input type="radio" id="male" name="GENDER" value="MALE">
  <label for="Gender">Male</label><br>
  <input type="radio" id="female" name="GENDER" value="FEMALE">
  <label for="female">Female</label><br>

</div>
<br><br>
<p>SKILLS<p>

<div class="mb-3">
  <input type="checkbox" id="php" name="php" value="PHP">
  <label for="php"> PHP</label><br>
</div>
  <div class="mb-3">
  <input type="checkbox" id="J2se" name="J2se" value="J2SE">
  <label for="J2se"> J2SE</label><br>
</div>
  <div class="mb-3">
  <input type="checkbox" id="mysql" name="mysql" value="MYSQL">
  <label for="mysql"> MYSQL</label>
</div>
  <div class="mb-3">
  <input type="checkbox" id="sql" name="sql" value="SQL">
  <label for="sql"> SQL</label>

  </div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>