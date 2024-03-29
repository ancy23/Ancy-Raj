<?php
$conn=mysqli_connect("localhost","root","","restaurant");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Management</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<section>
    <nav>
        <div class="logo">
            <img src="logo/main logo.png">
        </div>
        <ul>
           <li><a href="index.php">Home</a></li>
           <li><a href="about.php">About</a></li>
           <li><a href="resmenu.php">Restaurant</a></li>
           <li><a href="login.php">Login</a></li>
</ul>

</nav>
<div class="main">
<div class="content">
        <p>Are You Hungry?</p>
       <h1>Don't Wait</h1>
       <p>Let Start to order food now</p>
       <button>Check Out Menu</button>
    </div>
</div>
    


</body>
</html>
