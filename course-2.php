<?php 
  session_start(); 
  
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course-2</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="home.php" class="logo"> <i class="fas fa-graduation-cap"></i> Multiverse </a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a href="home.php">home</a></li>
            <li><a href="about.php">about</a></li>
            <li><a href="#">courses +</a>
                <ul>
                    <li><a href="course-1.php">course 01</a></li>
                    <li><a href="course-2.php">course 02</a></li>
                    <li><a href="course-3.php">course 03</a></li>
                </ul>
            </li>
            <li><a href="#">pages +</a>
                <ul>
                    <li><a href="teachers.php">teachers</a></li>
                    <li><a href="blog.php">blogs</a></li>
                </ul>
            </li>
            <li><a href="contact.php">contact</a></li>
            <li><a href="home.php?logout='1'" >logout</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<section class="heading">
    <h3>course 02</h3>
    <p> <a href="home.php">home >></a> course-2 </p>
</section>

<!-- course-2 section starts  -->

<section class="course-2">

    <div class="box">
        <div class="image">
            <img src="images/main-course-1.png" alt="">
        </div>
        <div class="content">
            <span>business</span>
            <h3>learning is what makes you perfect</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quam.</p>
            <a href="https://www.coursera.org/browse/business" class="btn">read more</a>
            <div class="icons">
                <a href="#"> <i class="fas fa-book"></i> 12 modules </a>
                <a href="#"> <i class="fas fa-clock"></i> 6 hours </a>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/main-course-2.png" alt="">
        </div>
        <div class="content">
            <span>language</span>
            <h3>learning is what makes you perfect</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quam.</p>
            <a href="https://www.edx.org/learn/language" class="btn">read more</a>
            <div class="icons">
                <a href="#"> <i class="fas fa-book"></i> 12 modules </a>
                <a href="#"> <i class="fas fa-clock"></i> 6 hours </a>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/main-course-3.png" alt="">
        </div>
        <div class="content">
            <span>development</span>
            <h3>learning is what makes you perfect</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quam.</p>
            <a href="https://www.udemy.com/courses/development/" class="btn">read more</a>
            <div class="icons">
                <a href="#"> <i class="fas fa-book"></i> 12 modules </a>
                <a href="#"> <i class="fas fa-clock"></i> 6 hours </a>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/main-course-4.png" alt="">
        </div>
        <div class="content">
            <span>teaching</span>
            <h3>learning is what makes you perfect</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quam.</p>
            <a href="https://www.futurelearn.com/subjects/teaching-courses" class="btn">read more</a>
            <div class="icons">
                <a href="#"> <i class="fas fa-book"></i> 12 modules </a>
                <a href="#"> <i class="fas fa-clock"></i> 6 hours </a>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/main-course-5.png" alt="">
        </div>
        <div class="content">
            <span>designing</span>
            <h3>learning is what makes you perfect</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quam.</p>
            <a href="https://www.udemy.com/courses/design/" class="btn">read more</a>
            <div class="icons">
                <a href="#"> <i class="fas fa-book"></i> 12 modules </a>
                <a href="#"> <i class="fas fa-clock"></i> 6 hours </a>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/main-course-6.png" alt="">
        </div>
        <div class="content">
            <span>speaking</span>
            <h3>learning is what makes you perfect</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quam.</p>
            <a href="https://www.edx.org/learn/public-speaking" class="btn">read more</a>
            <div class="icons">
                <a href="#"> <i class="fas fa-book"></i> 12 modules </a>
                <a href="#"> <i class="fas fa-clock"></i> 6 hours </a>
            </div>
        </div>
    </div>

</section>

<!-- course-2 section ends -->














<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>explore</h3>
            <a href="home.php"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="about.php"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="course-1.php"> <i class="fas fa-arrow-right"></i> course-1 </a>
            <a href="course-2.php"> <i class="fas fa-arrow-right"></i>course-2 </a>
            <a href="course-3.php"> <i class="fas fa-arrow-right"></i> course-3 </a>
            <a href="teachers.php"> <i class="fas fa-arrow-right"></i> teachers </a>
            <a href="blog.php"> <i class="fas fa-arrow-right"></i> blog </a>
            <a href="contact.php"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>categories</h3>
            <a href="https://www.coursera.org/courses?query=web%20design"> <i class="fas fa-arrow-right"></i> web design </a>
            <a href="https://www.udemy.com/topic/graphic-design/"> <i class="fas fa-arrow-right"></i> graphic design</a>
            <a href="https://www.udemy.com/course/ui-ux-web-design-using-adobe-xd/"> <i class="fas fa-arrow-right"></i> UI / UX design</a>
            <a href="https://moz.com/beginners-guide-to-seo"> <i class="fas fa-arrow-right"></i> seo marketing</a>
            <a href="https://www.simplilearn.com/advanced-digital-marketing-certification-training-course"> <i class="fas fa-arrow-right"></i> digital marketing</a>
            <a href="https://neilpatel.com/blog/beginners-guide-email-marketing/"> <i class="fas fa-arrow-right"></i> email marketing</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> all courses</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> my account </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> feedback </a>
            <a href="contact.php"> <i class="fas fa-arrow-right"></i> help center </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> certificates </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> newsletter </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="https://twitter.com/explore"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://www.linkedin.com/home"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="https://in.pinterest.com/"> <i class="fab fa-pinterest"></i> pinterest </a>
            <a href="https://github.com/"> <i class="fab fa-github"></i> github </a>
        </div>

    </div>

    <div class="credit"> created by <span>MULTIVERSE</span></div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>