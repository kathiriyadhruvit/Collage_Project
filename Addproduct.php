<?php
	$con=mysqli_connect("localhost","root","","atozfootwear");
	if(!$con)
	{
		die("connection faild".mysqli_connect_error());
	}
	if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_FILES['img']))
	{
		$id=$_POST['p_id'];
		$title=$_POST['title'];
		$desc=$_POST['Description'];
		$price=$_POST['Price'];

		$upload_dir='uploads/';
		$photo_name=$_FILES['img']['name'];
		$photo_tmp_name=$_FILES['img']['tmp_name'];

		$qry="INSERT INTO  product (p_id,title,description,price,img) VALUES ('$id','$title','$desc','$price','$photo_name')";

		if(mysqli_query($con,$qry))
		{
			if(move_uploaded_file($photo_tmp_name, $upload_dir.$photo_name)){
				echo " Upload Success";
			}else
			{
				echo "Faild!!";
			}
		}else{
			echo "error in query";
		}
	}
	mysqli_close($con);
	
?>
