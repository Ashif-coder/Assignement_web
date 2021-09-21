<html>
<head>
<title>Query String</title>
</head>
<body>
  <h2 align="center">Student Biodata</h2><br />
  <table align="center" border= "1px" >

 <?php

 
echo "<tr><td>Registration Number</td><td>".$_POST["regno"]."</td></tr>";
 echo "<tr><td>Name</td><td>".$_POST["name"]."</td></tr>";
 echo "<tr><td>Gender</td><td>".$_POST["gender"]."</td></tr>";
 //echo "<tr><td>".$_POST["name"]."</td></tr>";
 echo "<tr><td>Date of Birth</td><td>".$_POST["dob"]."</td></tr>";
 echo "<tr><td>Course</td><td>".$_POST["course"]."</td></tr>";
 echo "<tr><td>Semester</td><td>".$_POST["semester"]."</td></tr>";
 echo "<tr><td>Telephone</td><td>".$_POST["tel"]."</td></tr>";
 echo "</table>";
 ?>

</body>
</html>