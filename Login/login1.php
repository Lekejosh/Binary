<?php
include "helper.php"
?>

<?php

session_start();

$user = array();
require('mysql_connect.php');

if(isset($_SESSION['userID'])){
  $user = get_user_info($con,$_SESSION['userID']);
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    require('login-process.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIGN UP</title>
  
  <link rel="stylesheet" href="../public/css/styles1.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script>
      "use strict";
      
      !function() {
        var t = window.driftt = window.drift = window.driftt || [];
        if (!t.init) {
          if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
          t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
          t.factory = function(e) {
            return function() {
              var n = Array.prototype.slice.call(arguments);
              return n.unshift(e), t.push(n), t;
            };
          }, t.methods.forEach(function(e) {
            t[e] = t.factory(e);
          }), t.load = function(t) {
            var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
            o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
            var i = document.getElementsByTagName("script")[0];
            i.parentNode.insertBefore(o, i);
          };
        }
      }();
      drift.SNIPPET_VERSION = '0.3.1';
      drift.load('fk46idiedzz8');
      </script> 
</head>
<body class="text-center bg-dark particleCont">
<div class="partiku" id="particles-js"> </div>
<main class="form-signin">
    
  
      <h1 class="mb-4 text-light" style="font-family: 'Dancing Script', cursive">Benchgrowth</h1>
    <h3 class="h3 mb-3 text-lightx fw-normal">SIGN UP</h3>
    
<form action="login1.php" method="post" enctype="multipart/form-data" id="reg-form">
    
    <div class="form-row my-4">
              <div class="col">
                <input type="email" required name="email" class="form-control" id="email" placeholder="Email">
              </div>
            </div>
            <div class="row">
              
                <div class="col">
                  <input type="password" required name="password" class="form-control" id="password" placeholder="Password">
                </div>
            </div>
            
            
   <div class="submit-btn text-center my-5">
    <button class="w-100 btn btn-warning rounded-pill btn-lg btn-primary" type="submit">Sign in</button>
   </div>
   
    <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
  </form>
    
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script>
        particlesJS.load('particles-js', '../public/particle/particles.json');
    </script>
</body>
</html>