<!DOCTYPE html>
<html>
<head>
	<title>my connectivity </title>
</head>
<body>

<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$servername="localhost";
		$username="root";
		$password="";
		$database="apple";

		$user=$_POST['user'];
		$pass=$_POST['pass'];

		$con=mysqli_connect($servername,$username,$password,$database);

		$sql="INSERT INTO apple (user, pass) VALUES ('$user', '$pass')";

		$result=mysqli_query($con,$sql);

		if($result)
			echo "Successfully Inserted";
		else
			echo "NOT   Inserted";


	}

?>



<form action="/project/apple.php" method="POST">
	User Name: <input type="text" id="user" name="user" /> <br><br>
	Passward: <input type="text" id="pass" name="pass" /> <br><br>  <hr>
	          <input type="submit" id="submit" name= "submit" />

</form>


</body>
</html>
