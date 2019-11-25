@extends('layout')

@section('content')



<!--Hero-->
<div class="pt-24">

	<div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
		<!--Left Col-->
		<div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
			<p class="uppercase tracking-loose w-full"></p>
			@if(session()->has('success'))
			<div class="w-full p-6 bg-green-200 text-green-700 rounded-lg mb-2 shadow-lg">
				Thanks for your queries. We will get back to you shortly.
			</div>
			@endif

			@if ($errors->any())
			<div class="w-full p-6 bg-yellow-200 text-orange-700 rounded-lg mb-2 shadow-lg">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
				<a class="block mt-1 text-blue-700" href="/#contact">Check again</a>
			</div>
			@endif

			<h1 class="my-4 text-4xl font-bold leading-tight">We are on a mission to make software products delightful.</h1>
			<p class="leading-normal text-2xl mb-8">We build powerful consumer experience by striving on simplicity and by bringing cutting-edge web, cloud and machine learning technologies.</p>
		
			

			<a href="/#products" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg">Products</a>
			
		</div>
		<!--Right Col-->
		<div class="w-full md:w-3/5 py-6 text-center">
			<img class="w-full md:w-4/5 z-50" src="/images/hero.png">
		</div>
		
	</div>

</div>


<div class="relative -mt-12 lg:-mt-24">
	@include('embed.wave')
	<a name="products"></a> 
</div>



<section class="bg-white border-b py-8">

	<div class="container max-w-5xl mx-auto m-8">
		<h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-purple-800">Products</h1>
		<div class="w-full mb-4">	
			<div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
		</div>
	
		<div class="flex flex-wrap">
			<div class="w-5/6 sm:w-1/2 p-6">
				<h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">WebTheory</h3>
				<p class="text-gray-600 mb-8">The Web Superiority Platform for Web Artisans. Born out of frustration of popular CMS platforms, WebTheory is a analytics-based advanced content creation platform that vertically integrates all the services from cloud hosting to CMS to social media integration.<br /><br />
				
				<a class="text-purple-600 underline" href="https://undraw.co/">Find out more</a></p>
				
			</div>
			<div class="w-full sm:w-1/2 p-6">
				@include('embed.webtheory-svg')

			</div>
		</div>
		
		
		<div class="flex flex-wrap flex-col-reverse sm:flex-row">	
			<div class="w-full sm:w-1/2 p-6 mt-6">
                
                @include('embed.folioline-svg')
				
			</div>
			<div class="w-full sm:w-1/2 p-6 mt-6">
				<div class="align-middle">
					<h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">FolioLine</h3>
					<p class="text-gray-600 mb-8">Watch your money grow under a single pane-of-glass that integrates your stocks, mutual fund, bonds and gold investments so that you can holistically plan, optimize and rebalance your portfolio in a transparent and unbiased way.<br /><br />
					<a class="text-purple-600 underline" href="https://folionline.com/">Find out more</a></p>
				</div>
			</div>

		</div>
	</div>
</section>
		
		
		

<section class="bg-white border-b py-8">
	
	<div class="container mx-auto flex flex-wrap pt-4 pb-12">
	
		<h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">Focus</h1>
		<div class="w-full mb-4">	
			<div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
		</div>
	
		<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
			<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-xl">
				<a href="#" class="flex flex-wrap no-underline hover:no-underline">
					<p class="w-full text-gray-600 text-xs md:text-sm px-6 py-2 uppercase">Bleeding-Edge Tech</p>
					<div class="w-full font-bold text-xl text-gray-800 px-6">Machine Learning & Artificial Intelligence</div>
					<p class="text-gray-800 text-base px-6 my-4">
						We leverage advanced Machine learning and AI technologies to build predictive edge on all of our products
					</p>
				</a>
			</div>
			<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-xl p-6">
				@include('embed.ai-svg')
			</div>
		</div>
		
		
		
		<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
			<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-xl">
				<a href="#" class="flex flex-wrap no-underline hover:no-underline">
					<p class="w-full text-gray-600 text-xs md:text-sm px-6 py-2 uppercase">Powerful Platform</p>
					<div class="w-full font-bold text-xl text-gray-800 px-6">Cutting-edge Web & Cloud Technologies</div>
					<p class="text-gray-800 text-base px-6 my-4">
						We use containerization technology for cloud hosting and develop our products with amazing software such as Laravel and Vue.
					</p>
				</a>
			</div>
			<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-xl p-6">
				@include('embed.platform-svg')
				
			</div>
		</div>
		
		
		
		<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
			<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-xl">
				<a href="#" class="flex flex-wrap no-underline hover:no-underline">
					<p class="w-full text-gray-600 text-xs md:text-sm px-6 py-2 uppercase">Customer Centricity</p>
					<div class="w-full font-bold text-xl text-gray-800 px-6">Obsessive focus on Simplicity and UX</div>
					<p class="text-gray-800 text-base px-6 my-4">
						We are obsessively focused at keeping things simple and in building unparallel user experience (UX) for our customers.
					</p>
				</a>
			</div>
			<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-xl p-6">
				@include('embed.ui-svg')
				
			</div>
		</div>
		
		
	</div>
	<a name="about"></a> 
</section>

<section class="bg-gray-100 py-8 shadow-inner">


	
	<div class="container mx-auto px-2 pt-12 pb-12 text-gray-800">

		<h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">About Us</h1>
		<div class="w-full mb-4">	
			<div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
		</div>
	
	
		
		<div class="max-w-5xl mx-auto flex flex-col sm:flex-row justify-center pt-12 my-12 sm:my-4 text-center text-3xl">
			
            At TensorTribe, our goal is to create an innovative, profitable and long-lasting organisation that provides opportunities for individuals to maximise their human potentials. We dwell at the crossroads of arts and technologies to seek inspiration for building beautiful products for humans.

		</div>
		
	</div>
		
		
</section>


<a name="contact"></a> 
<!-- Change the colour #f8fafc to match the previous section colour -->
@include('embed.bottom-wave', ['bgcolor' => '#f8fafc'])

<section class="container mx-auto text-center py-6 mb-12">

	<h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">Contact Us</h1>
	<div class="w-full mb-4">	
		<div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
	</div>

	<form method="post" action="/queries">
	<div class="flex flex-col mx-auto max-w-3xl px-6  justify-center">
		
		<h3 class="my-4 text-3xl leading-tight">Leave your details below and we will reach out to you</h3>	

			<input type="hidden" value="{{ csrf_token() }}" name="_token">
		
			<input type="email" name="email" value="" class="my-4 mx-auto w-full max-w-md bg-purple-200 p-3 rounded shadow-2xl focus:border-none placeholder-purple-800 border-purple-300 border" placeholder="Your email">

			<textarea name="query" class="my-4 mx-auto w-full max-w-md bg-purple-200 p-3 rounded shadow-2xl focus:border-none placeholder-purple-800 border-purple-300 border h-32" placeholder="Your Query"></textarea>

			<button class="mx-auto max-w-md hover:text-purple-700 bg-white text-purple-900 font-bold rounded-full my-6 py-4 px-8 shadow-lg">Send</button>
		
	</div>
	</form>
</section>

@endsection