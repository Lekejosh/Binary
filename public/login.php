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
						header("Location: user.php");
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
</head>
<body class="bg-cyan-500 dark:bg-gradient-to-r from-indigo-500 to-black transition-colors duration-300">
    <header class="text-black text-1xl dark:text-white body-font ">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <nav class="flex lg:w-2/5 flex-wrap items-center md:ml-auto">
                <a class="mr-5" href="./index.html">Home</a>  
                
                <a class="mr-5" href="./contact.html">Contact Us</a>  
                <a class="mr-5" href="./fn.html" id="financial-news">Financial News</a>                
            </nav>
            <a class="flex order-first lg:order-none lg:w-1/5 text-xl font-medium items-center text-gray-900 dark:text-white lg:items-center lg:justify-center mb-4 md:mb-0" href="#">
                <span style="font-family: 'Dancing Script', cursive">Benchgrowth</span>
            </a>
            <div class="lg:w-2/5 inline-flex dark:text-black lg:justify-end ml-5 lg:ml-0">
              <a href="./login.html">
                <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Login/Signup
                </button></a>
            </div>
            <button class="absolute top-7 right-9 lg:top-5 lg:right-5 w-10 h-5 md:w-12 md:h-6 rounded-2xl bg-white flex items-center transition duration-300 focus:outline-none shadow" onclick="toggleTheme()">
                <div id="switch-toggle" class="w-6 h-6 md:w-7 md:h-7 relative rounded-full transition duration-500 transform bg-yellow-500 -translate-x-2 p-1 text-white ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
            </button>
        </div>
        <hr>
    </header>
    <section class="text-gray-600 dark:text-gray-200 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
          <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
            <h1 class="title-font font-medium text-3xl text-gray-900 dark:text-white">Slow-carb next level shoindcgoitch ethical authentic, poko scenester</h1>
            <p class="leading-relaxed mt-4">Poke slow-carb mixtape knausgaard, typewriter street art gentrify hammock starladder roathse. Craies vegan tousled etsy austin.</p>
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
</body>
</html>
