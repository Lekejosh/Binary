<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: dashboard.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Benchgrowth</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet"> 
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="./loader.css">
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
<body class="bg-gradient-to-r from-indigo-500 to-black transition-colors duration-300" onload="move()">
<div >
    <div id="preloader">
      <div id="percent">1%</div>
      <div id="bar">
          <div id="barconfrm"></div>
      </div>
  
  </div>
  <script>
      const tll = gsap.timeline({
          paused: "true"
      });
      tll.to("#percent, #bar",{
          duration:.2,
          opacity: 0,
          zIndex: -1
      });
      tll.to("#preloader",{
          duration: .8,
          width: "0%"
      });
      tll.from(".container",{
          duration: 1.5,
          y: "-150%"
      },"-=.2");
      tll.to(".container h1",{
          opacity:1,
          textShadow: "12px 20px rgba(255,255,255,0.23)",
          skewY: 10,
          y: "10%",
          stagger: {
              amount: .4
          }
      });
      var width = 1;
      var bar = document.getElementById("barconfrm");
      var id;
      function move(){
          id = setInterval(frame,10);
  
      }
      function frame(){
          if(width>=100){
              clearInterval(id);
              tll.play();
          }
          else{
              width++;
              bar.style.width = width + "%";
              document.getElementById("percent").innerHTML = width + "%";
          }
      }
  </script>
    <header class="text-1xl text-white body-font ">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <nav class="flex lg:w-2/5 flex-wrap items-center md:ml-auto">
                <a class="mr-5" href="./index.html">Home</a>  
                
                <a class="mr-5" href="./contact.html">Contact Us</a>  
                <a class="mr-5" href="./fn.html" id="financial-news">Financial News</a>                
            </nav>
            <a class="flex order-first lg:order-none lg:w-1/5 text-xl font-medium items-center text-white lg:items-center lg:justify-center mb-4 md:mb-0" href="#">
                <span style="font-family: 'Dancing Script', cursive">Benchgrowth</span>
            </a>
            <div class="lg:w-2/5 inline-flex text-black lg:justify-end ml-5 lg:ml-0">
              <a href="./login.php">
                <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Login/Signup
                </button></a>
            </div>
            
        </div>
        <hr>
    </header>
    <section class="text-gray-200 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
          <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
            <h1 class="title-font font-medium text-3xl text-white">Login Page</h1>
            <p class="leading-relaxed mt-4">For help or Assistance, please <a href="./contact.html">Contact Us</a>.</p>
          </div>
          <form class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0" method="post">
            <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Login Up</h2>
            <div class="relative mb-4">
              <label for="full-name" class="leading-7 text-sm text-gray-600">User Name</label>
              <input type="text" id="user_name" name="user_name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
            </div>
            <div class="relative mb-4">
              <label for="password" class="leading-7 text-sm text-gray-600">Password</label>
              <input type="password" id="password" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            
            <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" type="submit" id="button" value="Login">Sign In</button>
            <p class="text-xl text-gray-500 mt-3">Not Registered Yet? <a href="./signup.php">Sign Up</a> </p>
</form>
        </div>
      </section>
      <footer class="text-gray-100 body-font">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-10" href="index.html">
        
        <span style="font-family: 'Dancing Script', cursive">Benchgrowth</span>
      </a>
      <p class="text-sm text-gray-100 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2022 Benchgrowth 
       
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-grey-100">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-grey-100">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-grey-100">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-grey-100">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </footer>
</body>
</html>
