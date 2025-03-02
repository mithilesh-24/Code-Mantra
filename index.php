<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
}
  $username = $_SESSION['username']; 
?>
<html>
    <head>
        <title>Code Mantra</title>
        <link rel="stylesheet" href="index.css" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <header>
            <div class="topnav">
                <div class="code">Code Mantra</div>
                <a class="active" href="index.php"> Home</a>
                <a href="tp.php">Terms and Condition</a>
                <a href="courses.php">Courses</a>
                <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
                    <input type="text" placeholder="Search.." name="search2">
                    <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                      </svg></i></button>
                </form>
                <a href="Login.php" style="float: right;">Log-out</a>
                <a href="profile.php" style="float: right;">Profile</a>
            </div>
        </header>
        <section class="hero">
            <h1>Welcome <?php echo htmlspecialchars($username)?></h1>
            <h1>Master Programming at Your Own Pace</h1>
            <p>Whether you're just starting out or want to level up your skills, we have a course for you!</p>
            <a href="courses.php" class="button">Explore Courses</a>
        </section>
        <h2 style="text-align: center;">Programming Language you will learn</h2>
        <section class="featured-courses">
            <div class="course-card">
                <img src="photos/cpp.jpg">
                <h3>C++ Programming</h3>
                <p>C++ makes it easy to shoot yourself in the foot.</p>
            </div>
            <div class="course-card">
                <img src="photos/Python.jpg">
                <h3>Python Programming</h3>
                <p>Start your programming journey with Python and unlock endless possibilities.</p><br>
            </div>
            <div class="course-card">
                <img src="photos/PHP.png">
                <h3>Php Scripting</h3>
                <p>Connect your web page to data base by learning php scripting.</p>
            </div>
            <div class="course-card">
                <img src="photos/Java.png">
                <h3>Java programming</h3>
                <p> The language that writes the future. The backbone of the digital world.</p>
            </div>
        </section>
        <section>
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="photos/ph1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
                  </div>
                  <div class="carousel-item">
                    <img src="photos/ph2.png" alt="Chicago" class="d-block" style="width:100%">
                  </div>
                  <div class="carousel-item">
                    <img src="photos/ph3.png" alt="New York" class="d-block" style="width:100%">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>
        </section>
        <section class="about-us">
            <h2>Click here to know about us</h2>
            <a href="" class="button">About-us</a>
        </section>
        <footer class="contact" style="transition: width 1s;">
            <h2>Contact Us</h2>
            <p>Have any questions? Feel free to reach out to us at</p><br>
            <p><b>Gmail :</b><a href="mailto:mithileshbr.24cse@kongu.edu" class="hrefdes"> mithileshbr.24cse@kongu.edu</a></p>
            <b>Phno :</b> <span style="color: blue;">9025722457</span>
        </footer>
    </body>
</html>
