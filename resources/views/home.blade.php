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

		  </div>
		</div>
	</div>
@endsection
