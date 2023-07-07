<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <!---we had linked our css file----->
</head>
<body>
<header class="header">
    <div id="menu-btn" class="fas fa-bars"></div>
    <a data-aos="zoom-in-left" data-aos-delay="150" href="index.php" style="color: #29d9d5;" class="logo"> <i class="fas fa-paper-temple"></i>Uttarakhand </a>
    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="index.php#home">Home</a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="index.php#chardham">Chardham</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="index.php#gallery">Gallery</a>
        <a data-aos="zoom-in-left" data-aos-delay="900" href="index.php#hotel">Hotel</a>
        <a data-aos="zoom-in-left" data-aos-delay="750" href="index.php#services">Services</a>
        <a data-aos="zoom-in-left" data-aos-delay="1150" href="index.php#blogs">Blogs</a>
    </nav>
</header>
    <div class="full-page">
        <div id='login-form' class='login-page'>
            <div class="form-box">
              <h2>Login</h2>
        <form id='login' method="POST" class='input-group-login'>
                <input type='text' name="email"class='input-field'placeholder='Email Id' required >
		        <input type='password' name="password"class='input-field'placeholder='Enter Password' required>
		        <input type='submit' name="submit" class='submit-btn' value="Log in">
                    Do not have an account <a href="registration.php">Register</a> 
                    <?php
					error_reporting(0);
include 'conn.php';
if(isset($_POST['submit'])){
	$email =$_POST['email'];
	$password =$_POST['password'];
	$pquery = "SELECT * FROM `registration` WHERE email= '$email' and password= '$password'";
	$query = mysqli_query($conn, $pquery);
	if($query){
				?>
				<script>
					alert("Login successful");
					window.location.replace("home.php");
				</script>
				<?php
			}
			else{?>
				<script>
					alert("Unvalid Login!incorrect Username or password");
				</script>
				<?php
			}
	}		
	else{?>
		<script>
			alert("Email Not Found! sorry Register First ");
		</script>
		<?php
	}
?>
        </form>
  </div>
</div>
</div>
</body>
</html>