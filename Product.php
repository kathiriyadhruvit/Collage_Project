<?php 
$con=mysqli_connect("localhost","root","","atozfootwear");
if(!$con)
{
        die("Connection faild");
}
$result=mysqli_query($con,"select * from product");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Product</title>
	<link rel="stylesheet" type="text/css" href="Product.css">
</head>
<body>
	<div class="container">
		<div class="navigation">
                <h3 class="Heading">A to Z <span style="font-size: 20px; margin-top: 10px;">Footwear</span></h3>
                <ul>
                    <li><a href="#">Male</a></li>
                    <li><a href="#">Female</a></li>
                    <li><a href="#">Kids</a></li>
                    </ul>
         </div>
                <h3 class="heading"> Athleisure</h3>
                <!-- admin side product mens part-->
                <?php while($row=mysqli_fetch_assoc($result)){?>
            <div class="product">
                <img src="uploads/<?php echo $row['img'];?>"alt="Product image">
                <h3><?php echo $row['title'];?></h3>
                <p>Description:<?php echo $row['description'];?></p>
                <p>price:<?php echo $row['price']?></p>
                 <button class="btn">Buy Now</button>
            </div>
        <?php  }  ?>


	</div>
</body>
</html>