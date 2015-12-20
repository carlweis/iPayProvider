@extends('layouts.landing')
@section('before.content')
	@include('partials.errors')
	@include('partials.success')
@stop

@section('content')
<section id="features">
	
	{{-- <section id="features-mobile-slider">
		<ul>
			<li>
				<!-- <img src="http://placehold.it/1920x1200" class="img-responsive"> --> --> -->
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
	</section> --}}
	<aside id="features-left">
		<ul>
			<li>
				<h3>Identity Protection</h3>
				<p>
					You shouldn't have to give your social security number to everyone. So don't.
				</p>
			</li>
			<li>
				<h3>Your Always In Control</h3>
				<p>
					Secure, controlled access to your personal medical records, on your terms, with anyone.
				</p>
			</li>
			<li>
				<h3>Medical Cost Rationalized</h3>
				<p>
					Flat fee medical care per session. Because EVERYONE deserves to live.
				</p>
			</li>
			<li>
				<h3>All Providers One Payment</h3>
				<p>
					Inundated with medical bills? Consolidate it into one affordable monthly payment. Forever.
				</p>
			</li>
		</ul>
	</aside>
	<div id="features-slider">
		{{-- <ul>
			<li>
				<!-- <img src="http://placehold.it/1920x1200"> -->
			</li>
		</ul>
		<div class="features-pager">
			<ul>
				<li><span>&nbsp;</span></li>
				<li class="active"><span>&nbsp;</span></li>
				<li><span>&nbsp;</span></li>
				<li><span>&nbsp;</span></li>
			</ul>
		</div> --}}
		<header>
		<h2>We all want doctors who care, lets show them we care back.</h2>
	</header>
		<footer id="features-overview">
			<p>
				Did you ever stop to wonder why every medical facility redundantly asks for all your private information? ie: SS#, address, phone number, email. Doesn't seem very secure, does it? Then we wonder why there's so much identity theft. That's where we come in. By creating a platform where doctors can focus on your health. Not on how you're going to pay. We can not only, cultivate an environment where your health comes first, but also protect your identity.
			</p>
		</footer>
	</div>
	<aside id="features-right">
		<ul>
			<li>
				<h3>Symptom Tracking</h3>
				<p>
					Learn to better record and track your symptoms for active monitoring by the medical team of your choosing.
				</p>
			</li>
			<li>
				<h3>Add Local Doctors To Your Team</h3>
				<p>
					Customize a medical team of professionals to meet your specific needs.
				</p>
			</li>
			<li>
				<h3>Access Your Medical Team</h3>
				<p>
					We live in a modern age. Lets communicate that way. Request appointments, send messages, voice concerns.
				</p>
			</li>
			<li>
				<h3>Gift It Forward</h3>
				<p>
					Let others know your story. Recommend what worked for you. Donate to those in need in YOUR community.
				</p>
			</li>
		</ul>
	</aside>
</section>
<section id="coverage">
	<article>
		<h2>Know that the practice of medicine is helping you be healthier.</h2>
		<p class="lead">
			The practice of medicine has long been a group of people who care for others. 
			The vast medical knowledge we have today has come through extensive research and experimentation. 
		</p>
		<p class="lead">
			Now with technology we have the opportunity expand this knowledge even further by working together to make healthier future generations. We can all do our part by starting with healthier decisions. Join today, it's never too late to feel better.
		</p>
	{{-- 	<div>
			<a href="#register-form">
				Register Today
			</a>
		</div> --}}
	</article>
</section>
<section id="benefits">
	<div>
		<article>
			<h3>Say No To Paperwork</h3>
			<p>No need to fill out redundant paperwork at each office any longer. Just show your ID and take a photo. That's&nbsp;it.</p>
		</article>
		<article>
			<h3>Stay Up To Date</h3>
			<p>Check your dashboard to get the latest updates from your medical team. No reason to waste time on the hold.</p>
		</article>
		<article>
			<h3>Get The Most of Your Time</h3>
			<p>Always know when and where your medical appointments are located. Just as your doctor will know why your there.</p>
		</article>
		<article>
			<h3>Walk Right Out</h3>
			<p>No need to checkout after your visit. Your medical team is always monitoring your health.</p>
		</article>
	</div>
</section>
<section id="register-form">
	<header>
		<h2>Register for the Beta</h2>
		<p>Register for our closed private beta, and we will keep you posted on our progress to better your health.</p>
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