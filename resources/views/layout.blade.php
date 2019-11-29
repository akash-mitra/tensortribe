<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>TensorTribe LLP - Home Page</title>
	<meta name="description" content="Official Homepage of TensorTribe, LLP.">
	<meta name="keywords" content="tensortribe, webtheory, folioline">
	
	<!-- favicons -->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png" />
	
	<!-- <link rel="mask-icon" href="../safari-pinned-tab.svg" color="#5bbad5"> -->
	<meta name="msapplication-TileColor" content="#00aba9">
	<meta name="theme-color" content="#3b7977">


	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://tensortribe.com/">
	<meta property="og:title" content="Official Homepage of TensorTribe, LLP.">
	<meta property="og:description" content="Company description, contact page and Product details for TensorTribe, LLP.">
	<meta property="og:image" content="https://tensortribe.com/social.png">

	<!-- Twitter -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@tensorsky">
	<meta property="twitter:url" content="https://tensortribe.com/">
	<meta property="twitter:title" content="Official Homepage of TensorTribe, LLP.">
	<meta property="twitter:description" content="Company description, contact page and Product details for TensorTribe, LLP.">
	<meta property="twitter:image" content="https://tensortribe.com/social.png">
    
	<!-- css -->
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
	
	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap&text=TensorTribe" rel="stylesheet"> 
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
	
	
</nav>




@yield('content')


<!--Footer-->
<footer class="bg-white p-6 shadow-inner border-t border-purple-300">

    <div class="w-full flex justify-center mb-2">
			
        <a class=""  href="/"> 
            <img class="w-16 h-16" src="images/logo.svg">    
        </a>

        
    </div>
    <p class="w-full text-center font-serif text-purple-800 text-3xl mb-2">TensorTribe</p>

    <ul class="flex list-reset justify-center mb-4">
        <li class="mt-2 inline-block mx-6">
            <a href="/terms" class="no-underline hover:underline text-purple-700 hover:text-orange-500">Terms</a>
        </li>
        <li class="mt-2 inline-block mx-6">
            <a href="/privacy" class="no-underline hover:underline text-purple-700 hover:text-orange-500">Privacy</a>
        </li>

        <li class="mt-2 inline-block mx-6">
            <a href="/sitemap.xml" class="no-underline hover:underline text-purple-700 hover:text-orange-500">Sitemap</a>
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