
@extends('layouts.app')

@section('content')
@section('title', 'Benue State e-Learning/Virtual Education ICT Resource Centre')

		<div class="header-main">
        @include('layouts.nav')
		<!--Topbar-->
		
				<!--Section-->
				<section>
					<div class="sptb-2 bannerimg">
						<div class="header-text mb-0">
							<div class="container">
								<div class="text-center text-white py-7">
									<h1 class="">Forgot Password</h1>
									<ol class="breadcrumb text-center">
										<li class="breadcrumb-item"><a href="{{$appURL}}/">Home</a></li>
										<li class="breadcrumb-item active text-white" aria-current="page">Forgot Password</li>
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

		<!--Forgot password-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
						<div class="single-page w-100 p-0" >
							<div class="wrapper wrapper2">
								<form id="forgotpsd" class="card-body">
									<div class="mail">
										<label>Mail or Username</label>
										<input type="email" name="mail">
									</div>
									<div class="submit">
										<a class="btn btn-primary btn-block" href="javascript:void(0)">Send</a>
									</div>
									<div class="text-center text-dark mb-0">
										Forget it, <a href="index.html" class="text-primary">send me back</a> to the sign in.
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--/Forgot password-->

		
@endsection