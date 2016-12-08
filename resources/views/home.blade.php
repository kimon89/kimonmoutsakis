@extends('app')
@section('content')
	<div class="container">
		<div class="page-header">
		  <h1>Kimon Moutsakis</h1>
		  <h2 class="lead">Software Engineer</h2>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-6"><h3>Hello, there!</h3></div>
			<div class="col-xs-12 col-sm-12"><p>I am Kimon and I am a software engineer based in London,UK </br>
				I have almost 3 years of professional experience with a high traffic website with more than 100 million registered users.
				I have been writting scallable code in PHP and MySQL for an API used by hundreds of online games with thousands of concurent users.
				Highly experienced in PHP, MySQL and Javascript. With a very solid understanding of OOP and design patterns. I have exposure on the Yii2 and Laravel frameworks and have been using tools such as Git,Sourcetree,Stash,Bamboo,Jira on a daily basis.</p></div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12"><h3>Want to talk?</h3></div>
			<div class="col-xs-6 col-sm-6 contact-container">
				<div class="alert alert-success" id='thank-you' style="display:none">Thank you! I will get back to you as soon as possible.</div>
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
					<li><a href="https://www.linkedin.com/in/kimonmoutsakis"><img src="{{ asset('/images/linkedin.png') }}" alt="Kimon Moutsakis linkedin"></a></li>
					<li><a href="https://github.com/kimon89"><img src="{{ asset('/images/github.png') }}" alt=""></a></li>
					<li><a href="http://stackoverflow.com/users/1248752/kimon-moutsakis"><img src="{{ asset('/images/stackoverflow.png') }}" alt=""></a></li>
				</ul>
		  </div>
		</div>
	</div>

@endsection
@section('footer')
<hr>
<span></span>
@endsection