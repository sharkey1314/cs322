@extends('layout.template')

@section('content')
<div id="container_demo" >
	<!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
	<a class="hiddenanchor" id="toregister"></a>
	<div id="wrapper">

		<div id="register" class="animate form">
			<form method = "POST" action="/posts" autocomplete="on">
				{{ csrf_field() }}
				<h1> Sign up </h1>
				<p>
					<label for="username" class="uname" data-icon="u">Your username</label>
					<input id="username" name="username" required="required" type="text" placeholder="Username" />
				</p>
				<p>
					<label for="email" class="youmail" data-icon="e" > Your email</label>
					<input id="email" name="email" required="required" type="email" placeholder="email@gmail.com"/>
				</p>
				<p>
					<label for="password" class="youpasswd" data-icon="p">Your password </label>
					<input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
				</p>
				<p>
					<label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
					<input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
				</p>
				<p class="signin button">
					<input type="submit" value="Sign up"/>
				</p>
				
			</form>
			@if(count($errors))
				<div class="alert alert-danger">
  				<ul>
    			@foreach($errors->all() as $error)
    			<li>
      				{{$error}}
    			</li>
   				 @endforeach
  				</ul>
				</div>
			@endif
		</div>
	</div>  
</div>
@endsection
