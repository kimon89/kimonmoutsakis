@extends('app')
@section('content')
	<div class="container">
		<div class="page-header">
		  <h1>Kimon Moutsakis</h1>
		  <h2 class="lead">Software Engineer</h2>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-6"><h3>Hello, there!</h3></div>
			<div class="col-xs-12 col-sm-12"><p>I am Kimon and I am a software engineer based in London,UK</p></div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12"><h3>Want to talk ?</h3></div>
			<div class="col-xs-6 col-sm-6">
				<div class="alert alert-success" id='thank-you' style="display:none">Thank you!</div>
				<form id="contact-form" method="POST" action="/contact/message">
					<div class="form-group">
					  <label for="exampleInputEmail1">Name</label>
					  <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
					</div>
					<div class="form-group">
					  <label for="exampleInputPassword1">Email</label>
					  <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
					</div>
					<div class="form-group">
					  <label for="exampleInputFile">Message</label>
					  <textarea name="message" class="form-control" rows="3"></textarea>
					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		  <div class="col-xs-6 col-sm-6">
				<ul class="social">
					<li><a href="https://uk.linkedin.com/pub/kimon-moutsakis/45/398/471"><img src="{{ asset('/icons/linkedin.png') }}" alt=""></a></li>
					<li><a href="https://github.com/kimon89"><img src="{{ asset('/icons/github.png') }}" alt=""></a></li>
					<li><a href="http://stackoverflow.com/users/1248752/kimon-moutsakis"><img src="{{ asset('/icons/stackoverflow.png') }}" alt=""></a></li>
					<li><a href="http://steamcommunity.com/profiles/76561198027226295/"><img src="{{ asset('/icons/steam.png') }}" alt=""></a></li>
				</ul>
		  </div>
		</div>
	</div>

@endsection
