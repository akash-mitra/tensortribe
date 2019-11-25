<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>TensorTribe LLP - Home Page</title>
	<meta name="description" content="Official Homepage of TensorTribe, LLP.">
	<meta name="keywords" content="tensortribe, webtheory, folioline">
	
    
	<!-- <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
	<link rel="manifest" href="../site.webmanifest"> -->
	<link rel="mask-icon" href="../safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#00aba9">
	<meta name="theme-color" content="#3b7977">


	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.tailwindtoolbox.com/">
	<meta property="og:title" content="Tailwind Toolbox - Free Starter Templates and Components for Tailwind CSS">
	<meta property="og:description" content="Free open source Tailwind CSS starter Templates and Components to get you started quickly to creating websites in Tailwind CSS!">
	<meta property="og:image" content="https://www.tailwindtoolbox.com/social.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://www.tailwindtoolbox.com/">
	<meta property="twitter:title" content="Tailwind Toolbox - Free Starter Templates and Components for Tailwind CSS">
	<meta property="twitter:description" content="Free open source Tailwind CSS starter Templates and Components to get you started quickly to creating websites in Tailwind CSS!">
	<meta property="twitter:image" content="https://www.tailwindtoolbox.com/social.png">


	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap&text=TensorTribe" rel="stylesheet"> 
    

	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
	<!--Replace with your tailwind.css once created-->

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700&display=swap" rel="stylesheet">

	<!-- Define your gradient here - use online tools to find a gradient matching your branding-->
	<style>
		.gradient {
			background: linear-gradient(90deg, #fff 0%, #805ad5 100%);"
		}
    </style>
    
    @yield('css')

</head>


<body class="leading-normal tracking-normal gradient text-indigo-900 font-sans">

<!--Nav-->
<nav id="header" class="fixed w-full z-30 top-0">

	<div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
			
		<div class="pl-4 flex items-center">
			<a class="p-2 rounded-full flex items-center justify-center"  href="/"> 
				
				<img class="w-10 h-10" src="images/logo.svg">
                <span class="font-serif text-3xl pl-6"> TensorTribe</span>
                
			</a>
		</div>

		<div class="block lg:hidden pr-4">
			<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-900 border-gray-900 hover:text-purple-900 appearance-none focus:outline-none">
				<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
			</button>
		</div>

		<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
			<ul class="list-reset lg:flex justify-end flex-1 items-center">
				<li class="mr-3">
					<a class="inline-block py-2 px-4 text-black font-bold no-underline" href="/">Home</a>
				</li>
				<li class="mr-3">
					<a class="inline-block text-black no-underline hover:text-purple-900 hover:text-underline py-2 px-4" href="/#about">About</a>
				</li>
				<li class="mr-3">
					<a class="inline-block text-black no-underline hover:text-purple-900 hover:text-underline py-2 px-4" href="/#contact">Contact</a>
                </li>
                
			</ul>
			<a href="/#products" id="navAction" class="mx-auto lg:mx-0 cursor-pointer bg-white text-purple-900 font-bold rounded-full mt-12 lg:mt-0 py-2 lg:py-4 px-4 lg:px-8 shadow opacity-75">Products</a>
		</div>
	</div>
	
	<!-- <hr class="border-b border-gray-100 opacity-25 my-0 py-0" /> -->
</nav>




@yield('content')


<!--Footer-->
<footer class="bg-white p-6 shadow-inner border-t border-purple-300">

    <div class="w-full flex justify-center mb-2">
			
        <a class=""  href="/"> 
            <img class="w-16 h-16" src="images/logo.svg">    
        </a>

        
    </div>
    <p class="w-full text-center font-serif text-purple-800 text-3xl mb-2"> TensorTribe</p>

    <ul class="flex list-reset justify-center mb-4">
        <li class="mt-2 inline-block mx-6">
            <a href="/terms" class="no-underline hover:underline text-purple-700 hover:text-orange-500">Terms</a>
        </li>
        <li class="mt-2 inline-block mx-6">
            <a href="/privacy" class="no-underline hover:underline text-purple-700 hover:text-orange-500">Privacy</a>
        </li>

        <li class="mt-2 inline-block mx-6">
            <a href="/sitemap" class="no-underline hover:underline text-purple-700 hover:text-orange-500">Sitemap</a>
        </li>
    </ul>

</footer>



<script>

	var scrollpos = window.scrollY;
	var header = document.getElementById("header");
	var navcontent = document.getElementById("nav-content");
	var navaction = document.getElementById("navAction");
	var brandname = document.getElementById("brandname");
	var toToggle = document.querySelectorAll(".toggleColour");

	document.addEventListener('scroll', function() {

	/*Apply classes for slide in bar*/
	scrollpos = window.scrollY;

    if(scrollpos > 10){
      header.classList.add("bg-white");
	  navaction.classList.remove("bg-white");
	  navaction.classList.add("bg-purple-800");
	  navaction.classList.remove("text-purple-900");
	  navaction.classList.add("text-white");
	  //Use to switch toggleColour colours
  	  for (var i = 0; i < toToggle.length; i++) {
	     toToggle[i].classList.add("text-purple-900");
		 toToggle[i].classList.remove("text-white");
	  }
	  header.classList.add("shadow");
	  navcontent.classList.remove("bg-gray-100");
	  navcontent.classList.add("bg-white");
    }
    else {
	  header.classList.remove("bg-white");
	  navaction.classList.remove("bg-purple-800");
	  navaction.classList.add("bg-white");
	  navaction.classList.remove("text-white");
	  navaction.classList.add("text-purple-900");
	  //Use to switch toggleColour colours
  	  for (var i = 0; i < toToggle.length; i++) {
	     toToggle[i].classList.add("text-white");
		 toToggle[i].classList.remove("text-purple-900");
	  }
	  
	  header.classList.remove("shadow");
	  navcontent.classList.remove("bg-white");
	  navcontent.classList.add("bg-gray-100");
	  
    }

	});

	
</script>

<script>
	
	
	/*Toggle dropdown list*/
	/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/
	
	var navMenuDiv = document.getElementById("nav-content");
	var navMenu = document.getElementById("nav-toggle");
	
	document.onclick = check;
	function check(e){
	  var target = (e && e.target) || (event && event.srcElement);
	  
	  //Nav Menu
	  if (!checkParent(target, navMenuDiv)) {
		// click NOT on the menu
		if (checkParent(target, navMenu)) {
		  // click on the link
		  if (navMenuDiv.classList.contains("hidden")) {
			navMenuDiv.classList.remove("hidden");
		  } else {navMenuDiv.classList.add("hidden");}
		} else {
		  // click both outside link and outside menu, hide menu
		  navMenuDiv.classList.add("hidden");
		}
	  }
	  
	}
	function checkParent(t, elm) {
	  while(t.parentNode) {
		if( t == elm ) {return true;}
		t = t.parentNode;
	  }
	  return false;
	}
</script>


</body>

</html>