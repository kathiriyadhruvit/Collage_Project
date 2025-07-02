<?php
	$con=mysqli_connect("localhost","root","","atozfootwear");
	if(!$con)
	{
		die("connection faild".mysqli_connect_error());
	}


?>

<form action="product.php" method="post" enctype="multipart/form-data">
	<input type="text" name="p_id" placeholder="p_id"><br>
	<input type="text" name="title" placeholder="title"><br>
	<input type="text" name="Description" placeholder="Description"><br>
	<input type="number" name="Price" placeholder="price"><br>
	<input type="file" name="img"><br>
	<button type="submit">Upload</button>
</form>


