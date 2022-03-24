<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIGN UP</title>
  <link rel="stylesheet" href="../public/css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <main id="main-area">
    <!-- #registration area-->
    <section class="particleCont" id="register">
      <div class="partiku" id="particles-js"> </div>
      <div class="row m-0">
        <div class="col-lg-4 offset-lg-2">
          <div class="text-center pb-5">
          <h1 class="login-title text-dark">Sign Up</h1>
          <span class="font-ubuntu text-black">I already have an account <a href="./login1.php">Login</a></span>
        </div>
        <div class="upload-profile-image d-flex justify-content-center pb-5">
          <div class="d-flex justify-content-center">

            <div class="text-center">
              <div class="d-flex justify-content-center">
                <img class="camera-icon" src="../public/images/camera-solid-svgrepo-com.svg" alt="camera" srcset="">
              </div>
              <img src="../public/images/avartar.png" style="width: 200px; height: 200px;" class="img rounded-circle" alt="profile" srcset="">
              <small class="form-text text-black-50">Choose Image</small>
              <input type="file" class="form-control-file" name="profileUpload" id="upload-profile">
            </div>
          </div>
          
        </div>
        <div class="d-flex justify-content-center">
            <form action="register.php" method="post" enctype="multipart/form-data" id="reg-form">
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
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- #registration area-->
  </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="../public/Js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script>
        particlesJS.load('particles-js', '../public/particle/particles.json');
    </script>
</body>
</html>