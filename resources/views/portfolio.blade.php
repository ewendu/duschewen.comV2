@extends('template')

@section('content')
<article class="center-align">
	<h1 class="center-align line"><strong>Portfolio Web</strong></h1>
	<h3 class="grey-text text-darken-2 line"><strong>Website creation </strong></h3>
	
	<section class="center-align portfolio">
		<img alt="screenDEV" src="img/portfolio/screen_DEV.png">
		<p>The whole creation of this website, using Laravel 5.3 and Materialize.</p>
		
	</section>

	<h3 class="grey-text text-darken-2 line"><strong>App development projects</strong> </h3>
	
	<section class="center-align portfolio">
		<img alt="screenMagicSlate" src="img/portfolio/screen_magicslate.PNG">
		<p>A Magic Slate using Canvas / Objects Oriented JavaScript.</p>
		<a class="check"  href="https://ewendu.github.io/Magic-Slate-V2/">Check it out !</a>
	</section>
	
	<h3 class="center-align">More coming soon ... </h3>
</article>
    

@endsection

