@extends('template')

@section('main')
<div id="homepage">
	<h2><center>About</center></h2>
	<p class="tagline" style="color:#000;">PT. Sinergi Multicipta adalah perusahaan yang selalu
		mengedepankan komitmen memberikan karya yang lebih dari mitra harapkan
		(More Than Your Expectation). Sinergisitas antara pengetahuan, pengalaman
		dan kompetensi SDM dari CV. Surya Pratama Mandiri dan Yayasan Dewi Sartika
		serta dibangunnya sistem manajemen terstruktur dan terukur menjadikan PT.
		Sinergi sebagai perusahaan terpercaya dalam menjalin kerjasama kemitraan
		 dengan prinsip mutualisme.<br><br></p>

		 <div class="section light-bg" id="features">
				 <div class="container">

						 <div class="section-title">
								 <small>HIGHLIGHTS</small>
								 <h3>Features you love</h3>
						 </div>


						 <div class="row">
								 <div class="col-12 col-lg-4">
										 <div class="card features">
												 <div class="card-body">
														 <div class="media">
																 <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
																 <div class="media-body">
																		 <h4 class="card-title">Simple</h4>
																		 <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
																 </div>
														 </div>
												 </div>
										 </div>
								 </div>
								 <div class="col-12 col-lg-4">
										 <div class="card features">
												 <div class="card-body">
														 <div class="media">
																 <span class="ti-settings gradient-fill ti-3x mr-3"></span>
																 <div class="media-body">
																		 <h4 class="card-title">Customize</h4>
																		 <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
																 </div>
														 </div>
												 </div>
										 </div>
								 </div>
								 <div class="col-12 col-lg-4">
										 <div class="card features">
												 <div class="card-body">
														 <div class="media">
																 <span class="ti-lock gradient-fill ti-3x mr-3"></span>
																 <div class="media-body">
																		 <h4 class="card-title">Secure</h4>
																		 <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
																 </div>
														 </div>
												 </div>
										 </div>
								 </div>
						 </div>
				 </div>
		 </div>
</div>
@stop

@section('footer')
	@include('footer')
@stop
