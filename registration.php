<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
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
    <a data-aos="zoom-in-left" data-aos-delay="1300" href="login.php" class="btn">Login</a>
</header>
    <div class="full-page">
        <div id='login-form'class='login-page'>
            <div class="form-box">
            <h2>Register</h2>
		 <form id='register' method="POST" class='input-group-register'>
             <input type='text'name="name"class='input-field'placeholder='Name' required>
             <input type="tel" name="phone" class='input-field'placeholder='Phone Number ' required>
		     <input type='email'name="email"class='input-field'placeholder='Email Id' required>
		     <input type='password'name="password"class='input-field'placeholder='Enter Password' required>
		     <input type='password'name="cpassword"class='input-field'placeholder='Confirm Password'  required>
             <input type='text'name="address"class='input-field'placeholder='Address' required>
		     <input type='checkbox'class='check-box'><span>I agree to the terms and conditions</span>
                    <input type='submit' name="submit"class='submit-btn' value = "Register">
                    Already have an account! <a href="login.php">Login</a>
	         </form>
             <?php
             error_reporting(0);
             include 'conn.php';
             if(isset($_POST['submit'])){
                 $name = $_POST['name'];
                 $phone =$_POST['phone'] ;
                 $email =$_POST['email'] ;
                 $password =$_POST['password'] ;
                $cpassword =$_POST['cpassword'] ;
                $address =$_POST['address'] ;
                    if($password===$cpassword)
                    {
                        $query  = "INSERT INTO `registration`( `name`, `phone`, `email`, `password`, `cpasssword`, `address`) VALUES ('$name','$phone','$email','$password','$cpassword','$address')";
                         $res = mysqli_query($conn,$query);
                         ?>
                    <script>
                    alert("insertion Successfull");
                    </script>
                   <?php 
                    }   
                    else{    ?>
                        <script>
                        alert("password do not match");
                        </script>
                       <?php 
                    }
            }
        ?>
            </div>
        </div>
    </div>
</body>
</html>