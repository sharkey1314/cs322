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
					<label for="usernamesignup" class="uname" data-icon="u">Your username</label>
					<input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="Username" />
				</p>
				<p>
					<label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
					<input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="email@gmail.com"/>
				</p>
				<p>
					<label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
					<input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
				</p>
				<p>
					<label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
					<input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
				</p>
				<p class="signin button">
					<input type="submit" value="Sign up"/>
				</p>
				<p class="change_link">
					Already a member ?
					<a href="#tologin" class="to_register"> Go and log in </a>
				</p>
			</form>
		</div>
	</div>  
</div>
@endsection
