<!DOCTYPE html>
 <html>
<head>
<style type="text/css">
h1 {color:red;}
p {color:blue;}
</style>
</head>
 <body>
<h1 align="center">Create Record in Employee Database Application! ------ Running on LAMP</h1><br><br>
<p><form action="newentry.php" method="post"><br>
<table border='1' align='center'>
<tr><td>Employee Name: </td><td><input type='text' name='emp_name' required></td></tr>
<tr><td>Employee Address: </td><td><input type='text' name='emp_address' required></td></tr>
<tr><td>Employee Email: </td><td><input type='text' name='emp_email' required</td></tr>
<tr><td>Employee Salary: </td><td><input type='text' name='emp_salary' required</td></tr>
<tr><td colspan = "2" align="right"> <input type="submit" value="Create Employee"></td></tr></table>
</form></p>
<br><br><a href='showemployees.php'><h3>Show Employees</h3></a>

 </body>
 </html> 

