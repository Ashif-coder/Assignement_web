<!DOCTYPE html>
<html>
    <head>
    <script type="text/javascript"></script>
        <title>student biodata</title>
    </head>
    <body>
   
    <h2 align="center">Student Biodata</h2><br />
	<form method="post" action="bio.php">
    <table align="left">
    <td>
        
        <label>Regno</label><br />
        <label>Name</label></br>
        <label>Gender</label><br/>
        <label>Date of Birth</label><br/>
        <label>Course</label><br/>
        <label>Semester</label><br/>
        <label>Telephone Number</label><br />
        </td>
        </table>
        <table align="center">
        <td>
        <input id="reg" type="text" name="regno"></input><br/>
        <input id="nam" type="text" name="name" ></input><br/>
        <input id="gen" type="radio" name="gender" value="male">Male</input>
        <input id="gen1" type="radio" name="gender" value="female">Female</input><br />
        <input id="age" type="date" name="dob" list="ages"/>
        <br />
         <input id="cou" type="text" name="course" list="courses"/>
        <datalist id="courses">
        <option value="bsc">
        <option value="bca">
        <option value="bcom">
        <option value="ba">
        </datalist><br />
        <input id="sem" align="right" type="text" name="semester" list="semesters"/>
        <datalist id="semesters">
        <option value="1">
        <option value="2">
        <option value="3">
        <option value="4">
        <option value="5">
        <option value="6">
        </datalist><br />
        <input id="num" type="tel" name="tel"/><br />
        </td>
        </table>
        <input onclick="main.html" type="submit" name="submit"/>
        </form>
 </body>
</html>4