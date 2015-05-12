@extends('app')

@section('content')
	<header>

		<div id="logo-container">
			<div id="logo"><a href="/">Kimon Moutsakis</a></div>
			<div id="subtitle">Software Engineer</div>
		</div>
<!-- 		<nav>
			<ul>
				<li><a href="#">Link 1</a></li>
				<li><a href="#">Link 2</a></li>
				<li><a href="#">Link 3</a></li> 
				<li><a href="mailto:your@address.com" class="bordered">Contact</a></li>
			</ul>
		</nav> -->

	</header>

	<div id="content">

		<section class="intro">
			<p>
				Test Test Test Test Test Test
			</p>
		</section>

		<section class="row">
			<div class="col-full">
				<h2>Example title</h2>
				<p>
					Test Test Test Test Test Test
				</p>
			</div>
		</section>

		<section class="row">
			<div class="photo-grid">
				<a href="img/example-photo-b.jpg" rel="lightbox" class="col-2"><img src="img/example-photo-b.jpg" alt="Example photo"></a>
				<a href="img/example-photo-c.jpg" rel="lightbox" class="col-2"><img src="img/example-photo-c.jpg" alt="Example photo"></a>
				<a href="img/example-photo-a.jpg" rel="lightbox" class="col-1"><img src="img/example-photo-a.jpg" alt="Example photo"></a>
			</div>
		</section>


		<section class="row">
			<div class="col">
				<h2>Contact</h2>
				<p>
					Want to talk ? <a href="mailto:#">email</a>.
				</p>
			</div>
			<div class="col">
				<h2>Follow us</h2>
				<p>
					Find me on <a href="http://twitter.com/">Twitter</a>, <a href="http://dribbble.com/">Dribbble</a> and <a href="http://instagram.com/">Instagram</a>.
				</p>
			</div>
		</section>
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>
	if (!window.jQuery) 
	{
	    document.write('<script src="js/vendor/jquery.1.11.min.js"><\/script>');
	}
	</script>

	<script src="/js/jquery.fluidbox.min.js"></script>
	<script>
		$(document).ready(function() {

			$("body").addClass("loaded");

			$(function () {
				$('a[rel="lightbox"]').fluidbox();
			})

		});
	</script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'YOUR_GOOGLE_ANALYTICS_ID', 'auto');
	  ga('send', 'pageview');

	</script>

@endsection
