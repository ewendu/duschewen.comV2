@extends('template')


@section('content')
    
    <div>
    <h1 class="center-align line"><strong>Contact </strong></h1>
    <p>Could you please fill this form, i'll answer as fast as possible. Ewen Dusch - Full Stack Web Developer - Web creator - Laravel 5 Developer</p>
    </div>
    
    <form action="/contact" method="POST">
        {{ csrf_field() }}
        	<div class="row">
        		<div class="input-field col s12">
        		    <input value"{{ old('name') }}"  id="first_name" type="text" class="validate" name="name" >
                    <label for="first_name">Name <span class="red-text">*</span></label>
                    {!! $errors->first('name', '<small class="red-text">:message</small>') !!}
                </div>
                
        	</div>
        	<div class="row">
        		<div class="input-field col s12">
                  <input value"{{ old('email') }}" id="email" type="email" class="validate" name="email" >
                  <label for="email" data-error="wrong" data-success="right">Email <span class="red-text">*</span></label> 
                  {!! $errors->first('email', '<small class="red-text">:message</small>') !!}
             	</div>
        	</div>
        	<p class="center-align blue-text text-darken-3">What are your needs ?</p>
        	<div class="row">
        	    
        		<div class="col s6 m6 l2 offset-l1">
        		<input type="radio" id="dev" name="needs" value="ContactDevelopement"/>
              	<label for="dev">Development</label>
              	</div>
              	<div class="col s6 m6 l2">
        		<input type="radio" id="crea" name="needs" value="ContactWebsiteCreation"/>
              	<label for="crea">Website creation</label>
              	</div>
              	<div class="col s6 m6 l2">
        		<input type="radio" id="rework" name="needs" value="ContactWebsiteRework"/>
              	<label for="rework">Website rework</label>
              	</div>
              	<div class="col s6 m6 l2">
        		<input type="radio" id="laravel" name="needs" value="ContactLaravel"/>
              	<label for="laravel">Laravel 5</label>
              	</div>
              	<div class="col s6 m6 l2">
        		<input type="radio" id="else" name="needs" value="ContactElse"/>
              	<label for="else">Else</label>
              	</div>
        	</div>
        	<div class="row">
                <div class="input-field col s12">
                  <textarea id="textarea1" class="materialize-textarea validate" name="message" >{{ old('message') }}</textarea>
                  <label for="textarea1">Your message <span class="red-text">*</span></label>
                  {!! $errors->first('message', '<small class="red-text">:message</small>') !!}
                </div>
            </div>
                <small class="center-align"><span class="red-text">*</span> Required fields</small>

            <div class="row center-align">
            <button class="waves-effect waves-light btn-large blue darken-1" type="submit">Send</button>
            </div>
    </form>
    

@endsection

@section('script')
    <script>
        $(document).ready(function()
        {
            $('#textarea1').trigger('autoresize');
            Materialize.updateTextFields();
        });
    </script>
@endsection