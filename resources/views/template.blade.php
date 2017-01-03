<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  	<title>D.E V Web Developer</title>
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
  	<link rel="stylesheet" href="css/font-awesome.min.css">

  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet"> 
  	<script src="js/jquery.min.js"></script>
	
	
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    @yield('css')
    
    
   
   
	
</head>
	@yield('script')
<body>
	<header>
		 <div class="grey lighten-3">
			<div class="container">
				<a href="portfolio" class="waves-effect waves-light btn-large red darken-3"><i class="fa fa-book" aria-hidden="true"></i>
				Portfolio</a>
				<span id="url" class="right hide-on-small-only">duschewen.com</span>
			</div>
		</div>
		<div class="logodev">
			<a class="black-text" href="/"><h1 class="center-align"><span class="grey-text ">D.E</span> V</h1></a>
		</div>
		
			 <nav>
    			<div class="nav-wrapper light-blue darken-3 sticky">
    				<a href="index" class="brand-logo right" id="logo"><span class="grey-text">D.E</span> V</a>
      				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      				<ul class="hide-on-med-and-down container">
        				<li>
	        				<a href="/">
	        				<i class="fa fa-home" aria-hidden="true"></i>
								Home</a>
						</li>
						<li>
							<a href="skills">
							<i class="fa fa-star" aria-hidden="true"></i>
							Skills</a>
						</li>
						<li>
							<a href="contact">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							Contact</a>
						</li>
						<li>
							<a href="about">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
							About Me </a>
						</li>
     				</ul>
     				<ul class="side-nav" id="mobile-demo">
     					<li>
	     					<a href="portfolio-web" class="waves-effect waves-light btn red darken-3">
							Portfolio
							</a>
						</li>
				        <li><a href="index">Home</a></li>
				        <li><a href="skills">Skills</a></li>
						<li><a href="contact">Contact</a></li>
						<li><a href="about">About Me </a></li>
      				</ul>
    			</div>
 			 </nav>
 			 
 			 
		
	</header>
	<main class="container">
	  	@yield('content')
	</main>

    <footer class="page-footer light-blue darken-3">
        <div class="container">
            <div class="row">
            	<div class="col l6 s12">
                	<h5 class="white-text">Contact me for any propositions</h5>
                	<p class="grey-text text-lighten-4"><strong> DUSCH EWEN FULL STACK WEB DEVELOPER - PHP DEVELOPER - WEBSITE CREATOR - LARAVEL  DEVELOPER</strong></p>
                	<p class="grey-text text-lighten-4">Check my Portfolio to see  all my creations.</p>
                	<a href="portfolio" class="waves-effect waves-light btn-large red darken-3">
                		<i class="fa fa-book" aria-hidden="true"></i>
				Portfolio</a>
					<a href="contact" class="waves-effect waves-light btn-large red darken-3">
						<i class="fa fa-envelope" aria-hidden="true"></i>
				Contact</a>
              	</div>
              	<div class="col l4 offset-l2 s12">
                	<h5 class="white-text">Follow me on :</h5>
	                <ul>
	                  <li><a class="grey-text text-lighten-3" href="https://fr.linkedin.com/in/ewen-dusch-980a41135">
	                  <i class="fa fa-linkedin-square" aria-hidden="true"></i>
	                  LinkedIn</a></li>
	                  <li><a class="grey-text text-lighten-3" href="https://github.com/ewendu">
	                  <i class="fa fa-github" aria-hidden="true"></i>

	                  GitHub</a></li>
	                  <li><a class="grey-text text-lighten-3" href="https://twitter.com/ewendev">
	                  <i class="fa fa-twitter" aria-hidden="true"></i>
	                  Twitter</a></li>

	                  
	                </ul>
              	</div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
            © 2016 Copyright DUSCH Ewen
            <a class="grey-text text-lighten-4 right" href="https://laravel.com/">Website created with Laravel 5.3</a>
            </div>
        </div>
        </footer>
            
            
        
	<script>
	$(document).ready(function()
	{
		
		$(".button-collapse").sideNav();	
		$(window).scroll(function()
		{
			var scroll = $(window).scrollTop();
			if (scroll >= 280){
				$(".sticky").addClass('smaller');
								} 
			else { 
				$(".sticky").removeClass("smaller");
			} 
		});
		
	});
	
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-89650532-1', 'auto');
	  ga('send', 'pageview');


	
	</script>
		
</body>
</html>