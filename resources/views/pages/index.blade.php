@extends('layouts.landing')
@section('before.content')
	@include('partials.errors')
	@include('partials.success')
@stop

@section('content')
<section id="features">
	<header>
		<h2>We make it easy to pay for medical care<br>
		with a simple easy to use dashboard.</h2>
	</header>
	<section id="features-mobile-slider">
		<ul>
			<li>
				<img src="http://placehold.it/1920x1200" class="img-responsive">
			</li>
		</ul>
		<div class="features-pager">
			<ul>
				<li><span>&nbsp;</span></li>
				<li class="active"><span>&nbsp;</span></li>
				<li><span>&nbsp;</span></li>
				<li><span>&nbsp;</span></li>
			</ul>
		</div>
	</section>
	<aside id="features-left">
		<ul>
			<li>
				<h3>Information Protection</h3>
				<p>
					We protect your information by preventing demographic redundancy.
				</p>
			</li>
			<li>
				<h3>One Monthly Payment</h3>
				<p>
					All medical specialty balances paid in one monthly payment at an affordable rate.
				</p>
			</li>
			<li>
				<h3>All Providers One Bill</h3>
				<p>
					View and pay balances fro all providers in one place.
				</p>
			</li>
			<li>
				<h3>Your Always In Control</h3>
				<p>
					Control access to your personal medical records, on your terms.
				</p>
			</li>
		</ul>
	</aside>
	<div id="features-slider">
		<ul>
			<li>
				<img src="http://placehold.it/1920x1200">
			</li>
		</ul>
		<div class="features-pager">
			<ul>
				<li><span>&nbsp;</span></li>
				<li class="active"><span>&nbsp;</span></li>
				<li><span>&nbsp;</span></li>
				<li><span>&nbsp;</span></li>
			</ul>
		</div>
		<footer id="features-overview">
			<p>
				We help protect your identity, but not storing sensitive personal information. With affordable low
				monthly rates, between all medical specialties and no payments taken by the physicians office.
				Leaving you in control of your medical records and who there shared with.
			</p>
		</footer>
	</div>
	<aside id="features-right">
		<ul>
			<li>
				<h3>Symptom Tracking</h3>
				<p>
					Record and track your symptoms for review by your chosen physicians.
				</p>
			</li>
			<li>
				<h3>Find Local Doctors</h3>
				<p>
					Now you can easily find doctors and specialist in your area, all in one place.
				</p>
			</li>
			<li>
				<h3>Schedule Doctor Visits</h3>
				<p>
					It's never been easier to schedule a visit to your doctors office.
				</p>
			</li>
			<li>
				<h3>Secure Access</h3>
				<p>
					Now you have secure access to all of your medical records and documents, from all doctors.
				</p>
			</li>
		</ul>
	</aside>
</section>
<section id="coverage">
	<article>
		<h2>Know that your always covered</h2>
		<p>
			With one low monthly payment, your always covered with any doctor or
			specialist in our network. We make it easy for you to pay for your medical
			care, without all of the hasssle.
		</p>
		<div>
			<a href="#register-form">
				Register Today
			</a>
		</div>
	</article>
</section>
<section id="benefits">
	<div>
		<article>
			<h3>Identity Protection</h3>
			<p>We never ask or store sensitive personal information, so you are never at risk of identity theft.</p>
		</article>
		<article>
			<h3>Affordable Payments</h3>
			<p>No payment take by physicians office. Taking the collections out of medical offices, and giving back control to the patient.</p>
		</article>
		<article>
			<h3>Secure Medical Records</h3>
			<p>We use bank level encryption to keep your data safe. All data is always encrypted and stored on fully HIPPA compliant servers.</p>
		</article>
		<article>
			<h3>Always In Control</h3>
			<p>You decided who gets access to your medical history and records. Your always in control.</p>
		</article>
	</div>
</section>
<section id="register-form">
	<header>
		<h2>Register for the Beta</h2>
		<p>Register for our closed private beta, and we will inform you once we launch.</p>
	</header>
	<form action='/signup' method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div>
			<fieldset>
				<input type="text" name="fname" id="fname" placeholder="First name">
			</fieldset>
			<fieldset>
				<input type="text" name="lname" id="lname" placeholder="Last name">
			</fieldset>
		</div>
		<fieldset>
			<input type="email" name="email" id="email" placeholder="Email address">
		</fieldset>
		<fieldset>
			<input type="text" name="zip" id="zip" placeholder="Postal Code">
		</fieldset>
		
		<button type="submit">Register for the Beta</button>
	</form>
</section>
@stop