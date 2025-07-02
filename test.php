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
	<title>A To Z Footware</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- header -->
    <?php include "./header.php" ; ?>
                <h2 class="Item_Heading">TRENDING PRODUCT</h2>
                <div class="item">
                    <div class="item_1">
                    <!-- product _1 start -->
                     <div class="product_1">
                        <img src="../img/Athleisure/mens_2.webp" alt="product_1" class="Product_img">
                        <p>Description</p>
                        <span>oldPrice</span><span>NewPrice</span><br>
                        <button class="btn">Buy Now</button>
                    </div>
                    <!-- product _2 start -->
                    <div class="product_2">
                            <img src="../img/Athleisure/mens_3.webp" alt="product_1" class="Product_img">
                            <p>Description</p>
                            <span>oldPrice</span><span>NewPrice</span><br>
                            <button class="btn">Buy Now</button>
                    </div>
                    
                    <!-- product_3 start -->
                     <div class="product_3">
                            <img src="../img/Athleisure/mens_4.webp" alt="product_2" class="Product_img">
                            <p>Description</p>
                            <span>oldPrice</span><span>NewPrice</span><br>
                            <button class="btn">Buy Now</button>
                    </div>

                    <!-- product_4 start -->

                    <div class="product_4">
                            <img src="../img/Athleisure/mens_5.webp" alt="product_3" class="Product_img">
                            <p>Description  hyyy</p>
                            <span>oldPrice</span><span>NewPrice</span><br>
                            <button class="btn" id="btn">Buy Now</button>
                    </div>
                </div>

                <!-- Sign form start -->
                <form class="frm" method="post">
                <div class="form" id="form">
                        <h1>Create An Account</h1>
                        <button id="close"><img src="../img/x.svg" id="close" class="close"></button>
                        <img src="../img/person.svg"  class="icon"><input type="text" placeholder="Enter Name" class="fname" value=""><br>
                        <img src="../img/lock.svg"  class="icon"><input type="password" placeholder="Enter Passowrd" class="password" value=""><br>
                        <img src="../img/geo-alt.svg" class="icon"><input type="text" placeholder="Enter Address" class="address" value=""><br>
                        <img src="../img/phone-fill.svg" class="icon"><input type="number" placeholder="Enter Mobile Number" class="mob" value=""><br>
                        <img src="../img/envelope.svg" class="icon"><input type="email" placeholder="Enter Email Address" class="email" value=""><br>
                        <img src="../img/gender-female.svg">&nbsp;&nbsp;Female&nbsp;<input type="radio" value="female" name="gender">&nbsp;&nbsp;&nbsp;<img src="../img/gender-male.svg">&nbsp;&nbsp;Male&nbsp;&nbsp;<input type="radio" value="Male" name="gender"><br><br>
                        <input type="submit" id="btn"><br>                        
                           <p1 class="Login">I Have An Account<button id="loginbtn">Login</button></p1><br>
                </div>
             
        </form>

        <form id="loginfrm">
                <div id="loginform">
                        <h1 style="text-align: center;">Login Now</h1>
                        <button id="closebtn"><img src="./images/x.svg"></button>
                        <img src="./images/person.svg"  class="icon"><input type="text" placeholder="Enter Username" class="username"><br>
                        <img src="./images/lock.svg"  class="icon1"><input type="password" placeholder="Enter Passowrd" class="password"><br>
                        <button class="loginbutton" id="logbtn">Login</button><br>                        
                </div>
        </form>
</div>
<!-- admin side product -->
<?php while($row=mysqli_fetch_assoc($result)){?>
            <div class="product">
                <img src="uploads/<?php echo $row['img'];?>"alt="Product image">
                <h3><?php echo $row['title'];?></h3>
                <p>Description:<?php echo $row['description'];?></p>
                <p>price:<?php echo $row['price']?></p>
                 <button class="btn1">Buy Now</button>
            </div>
        <?php  }  ?>

        <!-- footer -->
        <div>
    </div>
	</div>
	<script src="script.js"></script>
</body>
</html>