@extends('template')

@section('css')
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<link rel="stylesheet" href="../../css/style.css" type="text/css" />

@endsection

@section('content')

<section class="about">
    <h1 class="center-align line"><strong>404 : Page not found !</strong></h1>
    
    <p class="center-align"><strong>Oh, looks like you lost yourself in the web :/ Simply pick an option from the list below, and you'll find your way back home. :)</strong></p>
    <ul class="align-left">
        <li>Hit the “back” button on your browser. It’s perfect for situations like this !</li>
        <li>Go back to the <a href='home'>Homepage</a></li>
        <li>Maybe you want to <a href='contact'>contact me ?</a></li>
        <li>Or you want to know more <a href="about">about me ?</a></li>
    </ul>
</section> 

@endsection