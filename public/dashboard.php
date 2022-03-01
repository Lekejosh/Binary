<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Benchgrowth</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet"> 
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cyan-500 dark:bg-gradient-to-r from-indigo-500 to-black transition-colors duration-300">

<!-- Navbar -->
<header class="text-black text-1xl dark:text-white body-font ">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <nav class="flex lg:w-2/5 flex-wrap items-center md:ml-auto">
                <a class="mr-5" href="./index.html">Home</a>  
                
                <a class="mr-5" href="./dashboard.php">Dashboard</a>  
                <a class="mr-5" href="./plans.php">My Plans</a>      
                <a class="mr-5" href="./invest.php">Invest</a>  
                <a class="mr-5" href="./trans.php" >Transactions</a> 
                <a class="mr-5" href="./withdraw.php">Withdraw</a>  
                      
            </nav>
            <a class="flex order-first lg:order-none lg:w-1/5 text-xl font-medium items-center text-gray-900 dark:text-white lg:items-center lg:justify-center mb-4 md:mb-0" href="#">
                <span style="font-family: 'Dancing Script', cursive">Benchgrowth</span>
            </a>
            <div class="lg:w-2/5 inline-flex dark:text-black lg:justify-end ml-5 lg:ml-0">
              <a href="./logout.php">
                <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Logout
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
</body>
</html>