@extends('layouts.app')

@section('content')
@section('title', 'Benue State e-Learning/Virtual Education ICT Resource Centre')

		<div class="header-main">
        @include('layouts.nav')
				<!--Section-->
				<section>
					<div class="sptb-2 bannerimg">
						<div class="header-text mb-0">
							<div class="container">
								<div class="text-center text-white py-7">
									<h1 class="">Register</h1>
									<ol class="breadcrumb text-center">
										<li class="breadcrumb-item"><a href="{{$appURL}}/">Home</a></li>
										<li class="breadcrumb-item active text-white" aria-current="page">Register</li>
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

		<!--Register-section-->
		<section class="sptb">
			<div class="container customerpage">
				<div class="row">
					<div class="col-lg-5 col-xl-5 col-md-6 d-block mx-auto">
						<div class="card">
							<div class="card-body p-6">
								<div class="mb-6">
									<h5 class="fs-25 font-weight-semibold">Register</h5>
									<p class="fs-16">Register now to start learning all subjects without limits.</p>
								</div>
								<div class="single-page customerpage">
									<div class="wrapper wrapper2 box-shadow-0">
										<form method="post" action="{{ route('register') }}" id="register" class="" tabindex="500">
                                        @csrf
                                            <div class="name">
												<label>Name</label>
												<input type="text" name="name">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
											</div>
											<div class="mail">
												<label>Mail or Username</label>
												<input type="email" name="mail">
											</div>
											<div class="passwd">
												<label>Password</label>
												<input type="password" name="password">
											</div>
											<div class="submit">
												<a class="btn btn-primary btn-block" href="javascript:void(0)">Register</a>
											</div>
											<p class="text-dark mb-0">Already have an account?<a href="{{$appURL}}/login" class="text-primary ms-1">Sign In</a></p>
										</form>
									</div>
								</div>
							</div>
							<div class="card-body p-6 border-top">
								<div class="d-flex">
									<div>
										<h5 class="modal-title fs-20 font-weight-semibold">Register with Social Media</h5>
										<p class="fs-16">Register using your social network account</p>
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
		</section><!--/Register-section-->


@endsection

