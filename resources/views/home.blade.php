@extends('template')



{{-- Main content --}}
@section('content')
	@if(Session::has('status'))
	<div class="flash center-align ">
		<p>Thank you for contacting me {{ Session::get('name') }} ! {{ Session::get('status') }}</p>
	</div>	
	@endif
		
		
		
	
    <h1 class="center-align">Full Stack Web Developer - PHP Developer  - Laravel  Developer - Website creator</h1>
		<p class="center-align">
  			Here are the languages, frameworks & tools that I use. I always try to extend my knowledge panel !
  		</p>
  		
		<div class="carousel">
			<a class="carousel-item" href="#"><img alt="laravel logo" src="img/laravel_logo.png"></a>
			<a class="carousel-item" href="#"><img alt="wordpress logo" src="img/wordpress.png"></a>
			<a class="carousel-item" href="#"><img alt="php logo" src="img/php.png"></a>
		    <a class="carousel-item" href="#"><img alt="css logo" src="img/css.png"></a>
		    <a class="carousel-item" href="#"><img alt="html logo" src="img/html.png"></a>
		    <a class="carousel-item" href="#"><img alt="jquery logo" src="img/jquery.png"></a>
		    <a class="carousel-item" href="#"><img alt="javascript logo" src="img/js.png"></a>
		    <a class="carousel-item" href="#"><img alt="mysql logo" src="img/sql.png"></a>
		    <a class="carousel-item" href="#"><img alt="cloud9 logo" src="img/cloud9_logo.png"></a>
		    <a class="carousel-item" href="#"><img alt="bootstrap logo" src="img/bootstrap_logo.png"></a>
		    <a class="carousel-item" href="#"><img alt="materialize logo" src="img/materialize_logo.png"></a>
		    <a class="carousel-item" href="#"><img alt="git logo" src="img/git_logo.png"></a>
  		</div>
  		<section class="row hidden" id="scrollfire1">
  			<article class="col l4 offset-l1 m12 s12 center-align">
  				<img alt="Laravel Development" src="img/laravel_dev.png">
				<h4>Laravel PHP Developer</h4>
  				<p>Less code, fast development, good security.</p>
  			</article>
  			
  			<article class="col l4 offset-l2 m12 s12 center-align">
  				<img alt="css logo" src="img/responsive_dev.png">
  				<h4>Responsive development</h4>
  				<p>Every devices are importants.</p>
  			</article>
  			
  		</section>
  		<section class="row hidden" id="scrollfire2">
  			<article class="col l4 offset-l1 m12 s12 center-align">
  				<img alt="Laravel Development" src="img/fullstack_dev.png">
				<h4>Full Stack Developer</h4>
				<p>PHP, JavaScript, JQuery, Ajax, HTML and CSS : everything you need to make a good website.</p>
				
  				
  			</article>
  			
  			<article class="col l4 offset-l2 m12 s12 center-align">
  				<img alt="css logo" src="img/lightning.png">
  				<h4>Deadline respect</h4>
  				<p>Working with deadlines is one of my priorities.</p>
  			</article>
  			
  		</section>
	  		


@endsection



{{-- Scripts --}}
@section('script')

    <script>
        $(document).ready(function(){
            $('.carousel').carousel();
            
            
            var options = [
					    {selector: '#scrollfire1', offset:100, callback: function(el) {
					      $(el).show('slow', 'easeInCubic');
					    }},
					    {selector: '#scrollfire2', offset:100, callback: function(el) {
					      $(el).show('slow', 'easeInCubic');
					    }}
					    
					  ];
					  
			Materialize.scrollFire(options);

        });
        
        
        
        
    </script>

@endsection