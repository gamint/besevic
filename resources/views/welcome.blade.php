@extends('layouts.app')

@section('content')
@section('title', 'Benue State e-Learning/Virtual Education ICT Resource Centre')

<!--Section-->
<div class="banner1 relative banner-top">
			<!-- Carousel -->
			<div class="owl-carousel bannner-owl-carousel slider slider-header ">
				<div class="item cover-image" data-bs-image-src="">
					<img  alt="first slide" src="{{asset('assets/images/banners/slide-1.jpg')}}" >
				</div>
				<div class="item">
					<img  alt="first slide" src="{{asset('assets/images/banners/silde-2.jpg')}}" >
				</div>
				<div class="item">
					<img  alt="first slide" src="{{asset('assets/images/banners/slide-3.jpg')}}" >
				</div>
			</div>
			@include('layouts.home_nav')

			<!--Section-->
			<section>
				<div class="slider-images">
					<div class="container-fuild">
						<div class="header-text slide-header-text mt-0 mb-0">
							<div class="col-xl-7 col-lg-8 col-md-8 d-block mx-auto">
								<div class=" -background bg-transparent input-field">
									<div class="text-center text-white mb-7">
										<h1 class="mb-1 font-weight-semibold fs-50">BESEVIC Lessons</h1>
										<p class="d-none d-md-block fs-18 text-white-80">...to Digitalize & Make Seeking Education Easy & Accessible</p>
									</div>
									<div class="form row g-0">
										<div class="form-group col-xl-9 col-lg-9 col-md-12 mb-0">
											<input type="text" class="form-control input-xl br-te-md-0 br-be-md-0" placeholder="Search Courses...." data-min-length="1" list="courses" name="courses">
										</div>
										<div class="col-xl-3 col-lg-3 col-md-12 mb-0">
											<a href="javascript:void(0)" class="btn btn-xl btn-block btn-primary br-ts-md-0 br-bs-md-0">Search Here</a>
										</div>
									</div>
									<div class="recent-classes text-center mt-5">
										<a class="recent-course" href="select-class.html">
										<small>Kinder<br>garten</small>
										</a>
										</a><a class="recent-course" href="select-class.html">
										<small>Primary Schools</small>
										</a>
										<a class="recent-course" href="select-class.html">
										<small>Secondary Schools</small>
										</a>
										<a class="recent-course" href="select-class.html">
										<small>Tertiary Instituions</small>
										</a>
										<a class="recent-course" href="select-class.html">
											<small>Vocational & Tech. Edu.</small>
											</a>
											<a class="recent-course" href="select-class.html">
											<small>Special Education</small>
											</a>
									</div>
								</div>
							</div>
						</div><!-- /header-text -->
					</div>
				</div>
			</section><!--/Section-->
		</div><!--/Section-->
			

		<!--Section-->
		<section class="sptb bg-white">
			<div class="container">
				<div class="section-title">
					<h2>Our Partners</h2>
					<p class="fs-18 lead">Meet our dedicated partners</p>
				</div>
				<div id="small-categories" class="owl-carousel client-carousel">
					<div class="item">
						<div class="p-4 border br-7">
							<img src="{{asset('assets/images/clients/1.png')}}" alt="img">
						</div>
					</div>
					<div class="item">
						<div class="p-4 border br-7">
							<img src="{{asset('assets/images/clients/2.png')}}" alt="img">
						</div>
					</div>
					<div class="item">
						<div class="p-4 border br-7">
							<img src="{{asset('assets/images/clients/3.png')}}" alt="img">
						</div>
					</div>
					<div class="item">
						<div class="p-4 border br-7">
							<img src="{{asset('assets/images/clients/4.png')}}" alt="img">
						</div>
					</div>
					<div class="item">
						<div class="p-4 border br-7">
							<img src="{{asset('assets/images/clients/8.png')}}" alt="img">
						</div>
					</div>
					<div class="item">
						<div class="p-4 border br-7">
							<img src="{{asset('assets/images/clients/6.png')}}" alt="img">
						</div>
					</div>
					<div class="item">
						<div class="p-4 border br-7">
							<img src="{{asset('assets/images/clients/7.png')}}" alt="img">
						</div>
					</div>
					<div class="item">
						<div class="p-4 border br-7">
							<img src="{{asset('assets/images/clients/5.png')}}" alt="img">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Section-->



        @endsection