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
									<h1 class="">Login</h1>
									<ol class="breadcrumb text-center">
										<li class="breadcrumb-item"><a href="{{$appURL}}/">Home</a></li>
										<li class="breadcrumb-item active text-white" aria-current="page">Login</li>
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
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="#f5f4f9"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->

		<!--Login-Section-->
		<section class="sptb">
			<div class="container customerpage">
				<div class="row">
					<div class="col-lg-5 col-xl-5 col-md-6 d-block mx-auto">
						<div class="card">
							<div class="card-body p-6">
								<div class="mb-6">
									<h5 class="fs-25 font-weight-semibold">Login</h5>
									<p class="fs-16">Login now to start learning all subjects without limits.</p>
								</div>
								<div class="single-page customerpage">
									<div class="wrapper wrapper2 box-shadow-0">
										<form method="post" action="{{ route('login') }}" id="login" class="" tabindex="500">
										@csrf	
                                        <div class="mail">
												<label>Mail or Username</label>
												<input type="email" name="mail">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
											</div>
											<div class="passwd">
												<label>Password</label>
												<input type="password" name="password">
											</div>
											<div class="submit">
												<a class="btn btn-primary btn-block fs-16" href="/login">Login</a>
											</div>
											<div class="d-flex mb-0">
												<p class="mb-0"><a href="{{ route('password.request') }}" >Forgot Password</a></p>
												<p class="text-dark mb-0 ms-auto">Don't have account?<a href="{{$appURL}}/register" class="text-primary ms-1">Signup</a></p>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="card-body p-6 border-top">
								<div class="d-flex">
									<div>
										<h5 class="modal-title fs-20 font-weight-semibold">Login with Social</h5>
										<p class="fs-16">Login using your social network account</p>
										<div class="">
											<div class="btn-group mb-3 mb-lg-0">
												<a href="https://www.facebook.com/" class="social-button">
													<span class="fa fa-facebook"></span> Facebook
												</a>
											</div>
											<div class="btn-group mb-3 mb-lg-0">
												<a href="https://www.google.com/gmail/" class="social-button">
													<span class="fa fa-linkedin"></span> Linkedin
												</a>
											</div>
											<div class="btn-group mb-3 mb-lg-0">
												<a href="https://twitter.com/" class="social-button">
													<span class="fa fa-twitter"></span> Twitter
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--/Login-Section-->

@endsection



