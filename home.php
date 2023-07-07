<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uttarakhand</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/hotel.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>
<!-- tailwind  -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="css/contact.css">
    <!-- ChatBot -->
<link rel="stylesheet" type="text/css" href="css/jquery.convform.css">
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery.convform.js"></script>
</head>
<body>
<!-- header section starts  -->
<header class="header">
    <div id="menu-btn" class="fas fa-bars"></div>
    <a data-aos="zoom-in-left" data-aos-delay="150" href="home.php" style="color: #29d9d5;" class="logo"> <i class="fas fa-paper-temple"></i>Uttarakhand </a>
    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="#home">Home</a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="#chardham">Chardham</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="#gallery">Gallery</a>
        <!-- <a data-aos="zoom-in-left" data-aos-delay="900" href="#hotel">Hotel</a> -->
        <a data-aos="zoom-in-left" data-aos-delay="750" href="#services">Services</a>
        <a data-aos="zoom-in-left" data-aos-delay="1150" href="blog/badri.html">Blogs</a>
    </nav>
    <a data-aos="zoom-in-left" data-aos-delay="1300" href="logout.php" class="btn">Logout</a>
</header>
<!-- header section ends -->
<div class="chat_icon">
<i class='far fa-comment  fa-border' style='color:#fff' ></i>
</div>
<div class="chat_box">
	<div class="my-conv-form-wrapper">
		<form action="" method="GET" class="hidden">
      <select data-conv-question="Hello! How can I help you" name="category">
        <option value="Trip" >Where You Want to go ?</option>
        <option value="Hotel and Restaurant">Need a hotel or a restaurant ?</option>
      </select>
      <div data-conv-fork="category">
        <div data-conv-case="Trip">
          <input type="text" name="domainName" data-conv-question="Please, tell me your place name">    
        </div>
        <div data-conv-case="Restaurant" data-conv-fork="first-question2">
          <input type="text" name="companyName" data-conv-question="What's Your Budget"> 
        </div>
      </div>
      <input type="text" name="name" data-conv-question="Please, Enter your name">
      <input type="text" data-conv-question="Hi {name}, <br> It's a pleasure to meet you." data-no-answer="true">
      <input data-conv-question="Enter your e-mail" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" type="email" name="email" required placeholder="What's your e-mail?">
      <select data-conv-question="Please Conform">
        <option value="Yes">Conform</option>
      </select>
  	</form>
	</div>
</div>
<!-- home section starts  -->
<section class="home" id="home">
    <div class="content">
        <br>
        <h3 data-aos="fade-up"  style ="color:lightseagreen; text-shadow: #000 0 2px 1px; font-weight: 600; font-family: Verdana, Geneva, Tahoma, sans-serif;" data-aos-delay="300">Welcome to Uttarakhand</h3>
        <p data-aos="fade-up" data-aos-delay="450"></p>
        <a data-aos="fade-up" data-aos-delay="600" style="color: #fff; background-color: #000;"  href="./payment/index.html" class="btn">book now</a>
    </div>
</section>
<!-- home section ends -->
<!-- booking form section starts  -->
<section class="book-form" id="book-form">
    <form action="">
        <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
            <span>where to?</span>
            <input type="text" placeholder="place name" value="">
        </div> -->
        <div data-aos="zoom-in" data-aos-delay="300" class="inputBox">
            <span>when?</span>
            <input type="date" value="">
        </div>
        <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
            <span>how many?</span>
            <input type="number" placeholder="number of travelers" value="">
        </div>
        <input data-aos="zoom-in" data-aos-delay="600" type="submit" value="find now" class="btn"> -->
    </form>
<!-- </section> -->
<!-- booking form section ends -->
<!-- about section starts  -->
<section class="about" id="about">
    <div class="video-container" data-aos="fade-right" data-aos-delay="300">
        <video src="images/kedarnath03.mp4" muted autoplay loop class="video" ></video>
        <div class="controls">
            <span class="control-btn" data-src="images/kedarnath03.mp4"></span>
            <span class="control-btn" data-src="images/kedarnath02.mp4"></span>
            <span class="control-btn" data-src="images/kedarnath.mp4"></span>
        </div>
    </div>
    <div class="content" data-aos="fade-left" data-aos-delay="600">
        <span>why choose us?</span>
        <h3>Nature's Majesty Awaits You</h3>
        <p>Uttarakhand is a state full of travel and tourism places where the god exists in every particle of soil</p>
        <a href="./blog/main.html" class="btn">read more</a>
    </div>
</section>
<!-- about section ends -->
<!-- destination section starts  -->
<section class="chardham" id="chardham">
    <div class="heading">
        <span>Travel to us</span>
        <h1>Char Dham</h1>
    </div>
    <div class="box-container">
        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <div class="image">
                <img src="images/yamnotri.jpg" alt="">
            </div>
            <div class="content">
                <h3>Yamnotri</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="./blog/yamuna.html">Explore More <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <div class="image">
                <img src="images/gangotri.jpg" alt="">
            </div>
            <div class="content">
                <h3>Gangotri</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="blog/ganga.html">Explore More <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <div class="image">
                <img src="images/kedarnath dham.jpg" alt="">
            </div>
            <div class="content">
                <h3>Kedarnath</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="blog/kedar.html">Explore More <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
      <div class="box" data-aos="fade-up" data-aos-delay="600">
            <div class="image">
                <img src="images/badrinath baba.jpg" alt="">
            </div>
            <div class="content">
                <h3>Badrinath</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="blog/badri.html">Explore More <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- destination section ends -->
<!-- gallery section starts  -->
<section class="gallery" id="gallery">
    <div class="heading">
        <span>our gallery</span>
        <h1>we record memories</h1>
    </div>
    <div class="box-container">
        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/auli.jpg" alt="">
            <span>travel spot</span>
            <h3>Auli</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/lansdowne.jpg" alt="">
            <span>travel spot</span>
            <h3>Lansdowne</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/dhanaulti.png" alt="">
            <span>travel spot</span>
            <h3>Dhanaulti</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/chakrata.png" alt="">
            <span>travel spot</span>
            <h3>Chakrata</h3>
        </div>
                <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                    <img src="images/kanatal.jpg" alt="">
                    <span>travel spot</span>
                    <h3>Kanatal</h3>
                </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/bhimtal.jpg" alt="">
            <span>travel spot</span>
            <h3>Bhimtal</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/nainital.png" alt="">
            <span>travel spot</span>
            <h3>Nainital</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/munsiyari.png" alt="">
            <span>travel spot</span>
            <h3>Munsiyari</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/rishi.jpg" alt="">
            <span>travel spot</span>
            <h3>Rishikesh</h3>
        </div>
    </div>
</section>
<!-- gallery section ends -->
<!-- services section starts  -->
<section class="services" id="services">
    <div class="heading">
        <span>our services</span>
        <h1>What we provides</h1>
    </div>
    <div class="box-container">
        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <i class="fas fa-globe"></i>
            <h3>Best Places</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <i class="fas fa-utensils"></i>
            <h3>food & drinks</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="600">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
            <i class="fas fa-wallet"></i>
            <h3>affordable price</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="900">
            <i class="fas fa-headset"></i>
            <h3>24/7 support</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>
    </div>
</section>
<!-- services section ends -->
<!-- banner section starts  -->
<div class="banner">
    <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
        <span>Start your adventures</span>
        <h3>Let's Explore Uttarakhand</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatum praesentium amet quibusdam quam officia suscipit odio.</p>
        <a href="payment/index.html" class="btn">book now</a>
    </div>
</div>
<!-- banner section ends -->
<div class="container">
    <div class="innerwrap">
        <section class="section1 clearfix">
            <div class="textcenter">
                <span class="shtext">Contact Us</span>
                <span class="seperator"></span>
                <h1>Drop Us a Mail</h1>
            </div>
        </section>
        <section class="section2 clearfix">
            <div class="col2 column1 first">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1767638.4481092459!2d78.19048526450844!3d30.08218869296418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3909dcc202279c09%3A0x7c43b63689cc005!2sUttarakhand!5e0!3m2!1sen!2sin!4v1647072938846!5m2!1sen!2sin"
                    width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col2 column2 last">
                <div class="sec2innercont">
                    <div class="sec2addr">
                        <p style="color: #fff">Welcome to uttarakhand tourism</p>
                        <p style="color: #fff"><span class="collig"style="color: #fff">Phone :</span > +91 9424989187</p>
                        <p style="color: #fff"><span class="collig"style="color: #fff">Email :</span > sandeeppatidar082@gmail.com</p>
                        <p style="color: #fff"><span class="collig"style="color: #fff">Fax :</span > +91 9424989187</p>
                    </div>
                </div>
                <div class="sec2contactform">
                    <h3 class="sec2frmtitle" style="font-size: 20px;">Want to Know More?? Drop Us a Mail</h3>
                    <form action="" method="post">
                        <div class="clearfix">
                            <input class="col2 first" name="name" type="text" placeholder="FirstName">
                            <input class="col2 last" name="lname" type="text" placeholder="LastName">
                        </div>
                        <div class="clearfix">
                            <input class="col2 first" name="email" type="Email" placeholder="Email">
                            <input class="col2 last" name="phone" type="text" placeholder="Contact Number">
                        </div>
                        <div class="clearfix">
                            <textarea  name="message" id="" cols="30" rows="7" placeholder="write a message here"></textarea>
                        </div>
                        <div class="clearfix"><input type="submit" name="submit" value="Send"></div>
                    </form>
                </div>
                    <?php
                    error_reporting(0);
                    include 'conn.php';
                    if(isset($_POST['submit']))
                    {
                        $name = $_POST['name'];
                        $lname = $_POST['lname'];
                        $email = $_POST['email'];
                        $phone = $_POST['phone']; 
                        $message = $_POST['message']; 
                        $iquery = "INSERT INTO `contact_us`(`first_name`, `last_name`, `email`, `phone`, `message`) VALUES ('$name',' $lname','$email','$phone','$message')";
                        $res = mysqli_query($conn,$iquery);
                    }
                    ?>
            </div>
        </section>
    </div>
</div>
<!-- footer section starts  -->
<section class="footer">
    <div class="box-container">
        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <a href="#" class="logo"> Uttarakhand</a>
            <p>Other Resources</p>
            <div class="share">
                <a href="https://www.facebook.com/arihant.gujrati.50" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/Subhithakur94?t=7rAF8l2gNsnnk0lIIEI_RA&s=08" class="fab fa-twitter"></a>
                <a href="https://instagram.com/i_m__the_devil_king?utm_medium=copy_link" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/posts/tejpal-singh-rajawat-767a74224_righteducation-usecasebasedlearning-projectbasedlearning-activity-6905891186872004608-5OxS" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <h3>quick links</h3>
            <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#chardham" class="links"> <i class="fas fa-arrow-right"></i> chardham </a>
            <a href="#gallery" class="links"> <i class="fas fa-arrow-right"></i> gallery </a>
            <!-- <a href="#hotel" class="links"> <i class="fas fa-arrow-right"></i> hotel </a> -->
            <a href="#services" class="links"> <i class="fas fa-arrow-right"></i> services </a>
            <a href="blog/badri.html" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <h3>contact info</h3>
            <p> <i class="fas fa-map"></i> Mandsaur, india </p>
            <p> <i class="fas fa-phone"></i> +91 9424989187 </p>
            <p> <i class="fas fa-envelope"></i> sandeeppatidar082@gmail.com </p>
            <p> <i class="fas fa-clock"></i> 7:00am - 10:00pm </p>
        </div>
        <!-- <div class="box" data-aos="fade-up" data-aos-delay="600">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <form action="">
                <input type="email" name="" placeholder="enter your email" class="email" id="">
                <input type="submit" value="subscribe" class="btn">
            </form>
        </div> -->
    </div>
</section>
<div class="credit">created by <span>The Anonymous</span> | all rights reserved!</div>
<!-- footer section ends -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        offset:150,
    });
</script>
<script src="js/script.js"></script>
</body>
</html>