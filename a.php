<?php


		$host='localhost';
		$dbusername='root';
		$dbpassword='';
		$dbname='connection';

		//creat connection
		$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		if ($conn == false)
		 {
		 	echo "not connected";
		 	die("connection failed:".mysqli_connect_error());
		 }
		else
		{
			$id=$_POST['id'];
			$username=$_POST['username'];
			$password=$_POST['password'];

			$sql="INSERT INTO connection(id,username,password) VALUES('$id','$username','$password')";
			if (mysqli_query($conn,$sql)) 
			{
				echo "new record create sucessfully";

			}
			else
			{
				echo "error:".$sql."<br>".$mysqli_error($conn);
			}

		}
	mysqli_close($conn);
  ?>