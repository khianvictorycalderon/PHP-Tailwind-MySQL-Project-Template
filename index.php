<?php

  // For database credentials and useful functions
  require_once("api/db.php");
  
?>

<!DOCTYPE html>
<html>
  <head>

    <!-- SEO -->
    <meta name="description" content="Description here..." />
    <meta name="keywords" content="keyword 1, keyword 2, keyword 3, and so on..." />
    <meta property="og:title" content="Title here...">
    <meta property="og:description" content="Description here...">
    <meta property="og:image" content="preview-image-path..."> 
	
    <!-- Forces the browser to load the latest version of this website -->
  	<meta http-equiv='cache-control' content='no-cache'> 
    <meta http-equiv='expires' content='0'> 
    <meta http-equiv='pragma' content='no-cache'>

    <!-- Misc -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png+jpg" href="icon-path">
    <script src="/assets/tailwind-3.4.17.js"></script>
    <script src="/assets/theme.js" defer></script> <!-- Optional: If user wants to change light and dark theme, by default, it uses light theme -->
    <script type="module" src="/assets/main.js"></script>
    
    <title>PHP + Tailwind CSS + MySQL Project Template</title>

  </head>
  <body>

    <div class="min-h-screen w-full 
        bg-neutral-50 text-neutral-900
        dark:bg-neutral-900 dark:text-neutral-50
        flex items-center justify-center
        ">
        
        <div class="flex flex-col gap-2 text-center">
            <h2 class="text-4xl font-bold text-center">PHP + Tailwind CSS + MySQL Project Template</h2>
            <p class="text-sm italic text-center">with Light and Dark theme compatibility</p>
            <p class="text-sm italic text-center">(saved to localstorate = persistent)</p>
            <button 
                onclick="toggleTheme();"
                class="px-6 py-2 rounded-md bg-green-600 text-neutral-50 font-semibold hover:bg-green-500 transition duration-300 cursor-pointer"
                >Toggle Theme</button>
        </div>
        
    </div>

  </body>
</html>