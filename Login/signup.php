<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIGN UP</title>
  
  <link rel="stylesheet" href="../public/css/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-dark">
  
  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="../index.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-light text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4" style="font-family: 'Dancing Script', cursive">Benchgrowth</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
        <li class="nav-item"> <a class="nav-link" href="/public/html/contact.html">Contact Us</a>  
              
        <li class="nav-item"><a class="nav-link" href="#" id="financial-news">Financial News</a>
        
      </ul>
    </header>
  </div>
  <main id="main-area">
    <!-- #registration area-->
    <section class="particleCont" id="register">
      <div class="partiku" id="particles-js"> </div>
      <div class="row m-0">
        <div class="col-lg-4 offset-lg-2">
          <div class="text-center pb-5">
          <h1 class="login-title text-light">Sign Up</h1>
          <span class="font-ubuntu text-light">I already have an account <a href="./login1.php">Login</a></span>
        </div>
        <div class="upload-profile-image d-flex justify-content-center pb-5">
          <div class="d-flex justify-content-center">

            <div class="text-center">
              <div class="d-flex justify-content-center">
                <img class="camera-icon" src="../public/images/camera-solid-svgrepo-com.svg" alt="camera" srcset="">
              </div>
              <img src="../public/images/avartar.png" style="width: 200px; height: 200px;" class="img rounded-circle" alt="profile" srcset="">
              <small class="form-text text-white-50">Choose Image</small>
              <input type="file" class="form-control-file" name="profileUpload" id="upload-profile">
            </div>
          </div>
          
        </div>
        <div class="d-flex justify-content-center">
            <form action="signup.php" method="post" enctype="multipart/form-data" id="reg-form" onSubmit="return checkPassword(this)">
            <div class="form-row">
              <div class="col">
                <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name">
              </div>
              <div class="col">
                <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name">
              </div>
            </div>

            <div class="form-row my-4">
              <div class="col">
                <input type="email" required name="email" class="form-control" id="email" placeholder="Email">
              </div>
            </div>
            <div class="form-row my-4">
              <div class="col">
                <input type="password" required name="password" class="form-control" id="password" placeholder="Password">
              </div>
            </div>
            <div class="form-row my-4">
              <div class="col">
                <input type="password" required name="confirm_pwd" class="form-control" id="confirm_pwd" placeholder="Confirm Password">
                <small id="confirm_error"class="text-danger"></small>
              </div>
            </div>
            <div class="form-check form-check-inline">
              <input type="checkbox" class="form-check-input" name="agreement" required>
              <label for="agreement" class="form-check-label font-ubuntu text-white-50">I agree<a href="#"> terms, conditons and policy</a>(*)</label>
            </div>
            <div class="submit-btn text-center my-5">
              <button class="btn btn-warning rounded-pill text-dark px-5" type="submit">Sign Up</button>
            </div>

            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- #registration area-->
  </main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="./main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script>
        particlesJS.load('particles-js', '../public/particle/particles.json');
    </script>
</body>
</html>