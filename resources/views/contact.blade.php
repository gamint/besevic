@extends('layouts.app')

@section('content')
@section('title', 'Benue State e-Learning/Virtual Education ICT Resource Centre')

		<!--Topbar-->
		<div class="header-main">
            @include('layouts.nav')
				<!--Section-->
				<section>
					<div class="sptb-2 bannerimg">
						<div class="header-text mb-0">
							<div class="container">
								<div class="text-center text-white py-7">
									<h1 class="">Contact Us</h1>
									<ol class="breadcrumb text-center">
										<li class="breadcrumb-item"><a href="{{$appURL}}/">Home</a></li>
										<li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</section><!--/Section-->
			</div>
		</div>

		<!-- Shape Start -->
        <div class="relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmsns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="#fff"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->

		<!--Contact-->
		<div class="sptb bg-white contacts">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row text-white">
							<div class="col-lg-3 col-md-12">
								<div class="card border-0 mb-lg-0">
									<div class="support-service mb-0  text-center bg-primary">
										<i class="fa fa-phone"></i>
										<h5>+234 803 814 9323, <br> +234 903 319 2244</h5>
										<P>Free Support!</P>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-12">
								<div class="card border-0 mb-lg-0">
									<div class="support-service mb-0 text-center bg-secondary">
										<i class="fa fa-clock-o"></i>
										<h5>Monday - Friday <br> (8:00am-5:00pm)</h5>
										<p>Working Hours</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-12">
								<div class="card border-0 mb-lg-0">
									<div class="support-service mb-0 text-center bg-success">
										<i class="fa fa-map-marker"></i>
										<h5>#64, JS Tarka Way, Opposite Railway Market, <br> Makurdi, Benue State.</h5>
										
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-12">
								<div class="card border-0 mb-0">
									<div class="support-service mb-0 text-center bg-orange">
										<i class="fa fa-envelope-o"></i>
										<h5>info@besevirc.com</h5>
										<p>Support us!</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Contact-->

		<!--Contact-->
		<div class="sptb">
			<div class="container">
				<div class="row">
				    <div class="col-lg-7 col-xl-7 col-md-12 mx-auto">
						<div class="card mb-0 single-page customerpage contact">
							<div class="card-body wrapper wrapper2 box-shadow-0">
								<div class="mb-6 text-dark">
									<h5 class="fs-25 font-weight-semibold">Contact Us</h5>
									<p class="fs-16">Interested in discussing? Leave us a message</p>
								</div>
								<form id="" class="" tabindex="500">
									<div class="name">
										<label>Name</label>
										<input type="text" name="name">
									</div>
									<div class="mail">
										<label>Mail or Username</label>
										<input type="email" name="mail">
									</div>
									<div class="Message">
										<label>Message</label>
										<textarea name="example-textarea-input" rows="6" placeholder="Message"></textarea>
									</div>
									<div class="submit">
										<a href="javascript:void(0)" class="btn btn-primary">Send Message</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Contact-->

        @endsection