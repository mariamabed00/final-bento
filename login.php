<?php 
   include ('connection.php') ; ?>
<?php



if(isset($_POST['login'])){
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,md5($_POST['password']));
$row= mysqli_fetch_array (mysqli_query ($con,"SELECT * FROM 'users' WHERE 'email'='$email'"));
if(isset($row) && $password == $row["password"]){
    $_SESSION["id"] = $row["id"];
     header("location:login.php");
     exit();
}
else{
    echo ("<script>alert('Invalid Email or Password')</script>");
}
}
?>
<!DOCTYPE html>
<html>
<head>
        <title>Log In</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styling.css">
        <link rel=”stylesheet” href=”css/bootstrap.css”>
        <link rel=”stylesheet” href=”css/bootstrap-responsive.css”>
        <link rel="stylesheet" href="./css/bootstrap.css">
	      <script src="./js/jquery-3.6.0.js"></script>
        <script src="./js/bootstrap.js"></script>
       <script src="./js/java.js"></script>
        <script src="https://kit.fontawesome.com/aa3edc3ef9.js" crossorigin="anonymous"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Quicksand&display=swap');
          </style>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body class="signup-body">
        <div id="banner">   
        </div>

        <nav class="navbar navbar-expand-lg">
        <div class="container-fluid navbar-a">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="#"><img src="logo-pink.png" width="60px"></a>
                  </li>
              <li class="nav-item">
                <a class="nav-link" href="bentohome.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="recipes.html">Recipes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.html">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="hidden.html">Hidden Allergens</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.html">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger" href="login.html">Log In</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="submit.html">Submit Recipe</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-brands fa-instagram"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-brands fa-facebook"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-brands fa-twitter"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

        <section class="vh-100 bg-image form-section">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container-form h-100">
      <div class="row d-flex justify-content-center align-items-center h-100" id="form-items">
        <div class="col-12 col-md-9 col-lg-7 col-xl -6" id="form-items-child">
          <div class="card">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Welcome back</h2>

              <form class="signup-form" method="POST" action="login.php" autocomplete: off>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">Email</label>
                  <input type="email"  name="email" id="form3Example3cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" name="login"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" id="signup-btn">Log In</button><br>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Don't have an account? <a href="account.php"
                    class="fw-bold text-body login-here">Sign Up</a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="text-center text-lg-start text-white">
                <div class="container p-4 pb-0">
                  <section class="">
                    <div class="row">
                      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 vision">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                          BENTO
                        </h6>
                        <p>
                          We want to be global to help all the people struggling, regardless of anything.
                        </p>
          
                        <p>Download our mobile app</p>
                        <a class="download-app">
                          <img src="googleplay.svg" alt="Google Play">
                        </a><br><br>
                        <a class="download-app">
                          <img src="appstore.svg" alt="App Store">
                        </a>
                      </div>
            
                      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Services</h6>
                        <p>
                          <a class="footer-links">Recipes</a>
                        </p>
                        <p>
                          <a class="footer-links">Blog</a>
                        </p>
                        <p>
                          <a class="footer-links">Shop</a>
                        </p>
                        <p>
                          <a class="footer-links">Hidden Allergens</a>
                        </p>
                      </div>
            
                      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact Us</h6>
                        <p><i class="fas fa-home mr-3"></i> Zahraa Madinet Nasr, Cairo, Egypt</p>
                        <p><i class="fas fa-envelope mr-3"></i>  bento.webapp@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> +20 0111 255 2668</p>
                      </div>
            
                      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>
          
                        <a class="btn btn-primary btn-floating m-1 social-icon"
                           style="background-color: #3b5998; border: none"
                           href="#!"
                           role="button"
                           ><i class="fab fa-facebook-f"></i
                          ></a>
            
                        <a
                           class="btn btn-primary btn-floating m-1 social-icon"
                           style="background-color: #55acee; border: none"
                           href="#!"
                           role="button"
                           ><i class="fab fa-twitter"></i
                          ></a>
            
                        <a
                           class="btn btn-primary btn-floating m-1 social-icon"
                           style="background-color: #ac2bac; border: none"
                           href="#!"
                           role="button"
                           ><i class="fab fa-instagram"></i
                          ></a>
                      </div>
                    </div>
                  </section>
                </div>
                <br>
                <div class="text-center p-3">
                  © 2020 Copyright:
                  <a class="text-white footer-links" href="https://bento.com/">bento.com</a>
                </div>
              </footer>

    </body>
    </html> 