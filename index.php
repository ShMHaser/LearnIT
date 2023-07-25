<!DOCTYPE html>
<html>
  <head>
    <title>Learn It</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  </head>
  <body>
    <div class="Wed">

      <!-- For navigation -->
      <nav class="nav">

            <img src="images/logo.png" class="logo" />
            <h3 class="title">Learn It</h3>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="courses.php">Courses</a></li>
              <li><a href="#">Resources</a></li>
              <li><a href="#">Teachers</a></li>
              <li><a href="#">About LearnIt</a></li>
              <li><a href="LogIn.php">Login</a></li>
              <li><a href="#">Sign-up</a></li>
              <li>
                <div class="search-box">
                  <input id="textbox" type="text" placeholder="Search.." />
                  <a href="#"><i class="fas fa-search"></i></a>
                </div>
              </li>
            </ul>
            <a href="admin.html"> <img src="images/admin.png" class="admin" /></a>
        </nav>
    </div>


      <!-- For background video -->

      <video autoplay loop muted plays inline class="background-video">
        <source src="images/bg.mp4" type="video/mp4">
      </video>

      <!-- For background video -->



      <!-- For content -->
      <div class="banner-content">
        <p>It's time to Learn, <span> To your hearts content</span></p>
        <button class="start-button"><a href="courses.html" class="s-button">Get Started</a></button>
      </div>

      <!-- For login form -->
      <div class="log">
        <input type="checkbox" id="show" />
        <div class="container">
          <div class="text">Login Form</div>
          <form action="#">
            <div class="data">
              <label>Email or phone</label>
              <input type="text" required />
            </div>
            <div class="data">
              <label>Password</label>
              <input type="password" required />
            </div>
            <div class="forget-pass"><a href="#">Forget Password?</a></div>
            <div class="btn">
              <button type="submit">LOGIN</button>
            </div>
            <div class="link">New here? <a href="#">Sign up Now</a></div>
          </form>
        </div>
      </div>

      <!-- For login form end-->


      <!-- For Sign-up form -->
      <div class="Sign-up">
        <input type="checkbox" id="view" />
        <div class="container">
          <div class="text">Sign up Form</div>
          <form action="#">
            <div class="data">
              <label>First name</label>
              <input type="text" required />
            </div>
            <div class="data">
              <label>Last name</label>
              <input type="text" required />
            </div>
            <div class="data">
              <label>Email or phone</label>
              <input type="text" required />
            </div>
            <div class="data">
              <label>Password</label>
              <input type="password" required />
            </div>
            <div class="data">
              <label>Confirm Password</label>
              <input type="password" required />
            </div>
            <div class="btn">
              <button type="submit">SIGN UP</button>
            </div>
            <div class="link"><a href="#">Already have an account?</a></div>
          </form>
        </div>
      </div>
    </div>
      <!-- For Sign-up form end -->

  <!-- about us start -->
  <section class="aboutUs">
    <div class="about-us">
      <div class="a-container">
          <h1>About Us</h1>
          <p class="a-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum, eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi neque voluptates sit deleniti autem error eos totam nisi neque.
          </p>
          <div class="a-skills">
              <span>Interactive tutorial</span>
              <span>Expert Solutions</span>
          </div>
      </div>
    </div>
  </section>
  <!-- about us end -->

<main>
  <!-- footer start -->
  <footer class="footer">
    <div class="f-container">
      <div class="f-wrapper">
        <div class="footer-widget">
          <a href="#">
            <img src="images/logo.png" class="f-logo" />
          </a>
          <p class="f-description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos
            deserunt magni recusandae ut! Natus?
          </p>
          <ul class="f-socials">
            <li>
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="footer-widget">
          <h6>Quick Links</h6>
          <ul class="f-links">
            <li><a href="#">home</a></li>
            <li><a href="#">about</a></li>
            <li><a href="#">courses</a></li>
            <li><a href="#">contact</a></li>
          </ul>
        </div>
        <div class="footer-widget">
          <h6>Courses</h6>
          <ul class="f-links">
            <li><a href="#">Physics</a></li>
            <li><a href="#">Chemistry</a></li>
            <li><a href="#">Learn Javascript</a></li>
          </ul>
        </div>
        <div class="footer-widget">
          <h6>Help &amp; Support</h6>
          <ul class="f-links">
            <li><a href="#">support center</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">terms &amp; conditions</a></li>
          </ul>
        </div>
      </div>
      <div class="copyright-wrapper">
      </div>
    </div>
  </footer>
  <!-- footer end -->

</main>





  <script>

    var prev = document.getElementById("prev");
    var next = document.getElementById("next");
    var thumbnail = document.getElementsByClassName("slider-thumbnail");
    var hero = document.getElementById("hero");

    var backgroundImg = new Array(
      "images/bg1.jpg",
      "images/bg2.jpg",
      "images/bg3.jpg",
      "images/bg4.jpg",
      "images/bg5.jpg"
    );

    //for next button

    let i = 0;
    next.onclick = function(){
      if(i < 4){
        hero.style.backgroundImage = 'url("'+backgroundImg[i+1]+'")';   //to change background into next image
        thumbnail[i+1].classList.add("active");   //to add active status to current image
        thumbnail[i].classList.remove("active");  //to remove active status from previous image
        i++;
      }
    }

    //for previous button

    prev.onclick = function(){
      if(i > 0){
        hero.style.backgroundImage = 'url("'+backgroundImg[i-1]+'")';
        thumbnail[i-1].classList.add("active");
        thumbnail[i].classList.remove("active");
        i--;
      }
    }


  </script>



  </body>
</html>
