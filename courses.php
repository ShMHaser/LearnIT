<!DOCTYPE html>

<html>

  <head>

    <title>Learn It</title>

    <link href="course.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="http://fonts.cdnfonts.com/css/lovelyn" rel="stylesheet">

  </head>

  <body>

    <div class="Wed">

      <!-- For navigation -->
      <nav class="nav">

            <img src="images/logo.png" class="logo" />
            <h3 class="title">Learn It</h3>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="courses.html">Courses</a></li>
              <li><a href="#">Resources</a></li>
              <li><a href="#">Teachers</a></li>
              <li><a href="#">About LearnIt</a></li>
              <li><label>Login</label></li>
              <li><label>Sign Up</label></li>
              <li>
                <div class="search-box">
                  <input id="textbox" type="text" placeholder="Search.." />
                  <a href="#"><i class="fas fa-search"></i></a>
                </div>
              </li>
            </ul>
            <a href="#"> <img src="images/admin.png" class="admin" /></a>
        </nav>
    </div>

    <!-- For background video -->

    <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="images/education.jpg" style="width:100%">
        <div class="text">Education</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="images/study.jpg" style="width:100%">
        <div class="text">Study</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="images/teach.jpg" style="width:100%">
        <div class="text">Teach</div>
      </div>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>

    <!-- For content -->

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

    <div class="background">
      <!--Our Services-->
      <div class="ourservices">

        <div class="serviceText">
          <h1>Our Courses</h1>
        </div>

        <div class="servicedetails">
          <img class="serviceImage" src="images/apple.jpg" alt="">
          <p>
            "LOREM ipsum"
          </p>
        </div>

      </div>

      <br>
      <br>
      <br>
      <br>

      <!-- Grand Wedding -->
      <div id="container">

        <div class="package">

	          <h1>Physics</h1>

			      <p class="information">
              <br>
              "Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum"
            </p>

            <div class="buttonControl">

	             <button class="button">
	                <span class="price">000000 Tk.</span>
                  <span class="buy">Get now</span>
               </button>

            </div>

        </div>

            <div class="packageImage">

	            <img src="images/physics.jpg" alt="">

              <div class="info">
	               <h2>Package Details</h2>
	                <ul>
		                  <li>Sample Text</li>
		                  <li>Sample Text</li>
		                  <li>Sample Text</li>
                  </ul>
                </div>
            </div>

        </div>

        <br>
        <br>
        <br>
        <br>
        <!-- Paint it Yellow -->
        <div id="container">

          <div class="package">

              <h1>Maths</h1>

              <p class="information">
                <br>
                "Lorem Ipsum"
              </p>

              <div class="buttonControl">

                 <button class="button">
                    <span class="price">000 Tk.</span>
                    <span class="buy">Get now</span>
                 </button>

              </div>

          </div>

              <div class="packageImage">

                <img src="images/maths.jpg" alt="">

                <div class="info">
                   <h2>Package Details</h2>
                    <ul>
                        <li>Sample Text</li>
		                <li>Sample Text</li>
		                <li>Sample Text</li>
                    </ul>
                  </div>
              </div>

          </div>

          <br>
          <br>
          <br>
          <br>
          <!-- Engaged for Eternity -->
          <div id="container">

            <div class="package">

                <h1>Chemistry</h1>

                <p class="information">
                  <br>
                  "Lorem Ipsum"
                </p>

                <div class="buttonControl">

                   <button class="button">
                      <span class="price">000 Tk.</span>
                      <span class="buy">Get now</span>
                   </button>

                </div>

            </div>

                <div class="packageImage">

                  <img src="images/chemistry.jpg" alt="">

                  <div class="info">
                     <h2>Package Details</h2>
                      <ul>

                        <li>Sample Text</li>
		                <li>Sample Text</li>
		                <li>Sample Text</li>li>

                      </ul>
                  </div>

                </div>

        </div>

        <br>
        <br>
        <br>
        <br>

        <!-- Customized Services -->
        <div class="ourservices">

          <div class="customizedService">
            <h1>
              <br>
              Custom Program
            </h1>
          </div>

          <div class="customizedservicedetails">

            <p>
              "Make Your Own Plan"
            </p>

            <button class="button">
               <span class="price">Over here</span>
               <span class="buy">Click now</span>
            </button>

          </div>

        </div>

    </div>

    <!-- footer start -->
    <footer class="footer">
      <div class="f-container">
        <div class="f-wrapper">
          <div class="footer-widget">
            <a href="#">
              <img src="#" class="f-logo" />
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
              <li><a href="#">Home</a></li>
              <li><a href="#">Courses</a></li>
              <li><a href="#">Teachers</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="footer-widget">
            <h6>Courses</h6>
            <ul class="f-links">
              <li><a href="#">Lorem Ipsum</a></li>
              <li><a href="#">Lorem Ipsum</a></li>
              <li><a href="#">Lorem Ipsum</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer end -->

    <script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
  </body>

</html>
