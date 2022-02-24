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
									<h1 class="">About Us</h1>
									<ol class="breadcrumb text-center">
										<li class="breadcrumb-item"><a href="{{$appURL}}/">Home</a></li>
										<li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
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

		<!--section-->
		<section class="sptb position-relative">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 text-center mb-5">
						<h1 class="mb-4 font-weight-bold">Welcome To BESEVIC</h1>
						<p class="leading-normal lead-1">...to Digitalize & Make Seeking Education Easy & Accessible</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<p class="leading-normal  fs-16">BESEVIC is a Benue State Government owned e-Learning/Virtual Education and ICT Resource Centre established through Public-Private Partnership (PPP) with Gamint Corporate Ltd. in line with 
						Federal Ministry of Education Policy on ICT in Education 2019 to support and finance ICT software and Hardware Infrastructure in Benue State Education sector under the leadership of His Excellency, Dr. Samuel Ortom, 
						Executive Governor of Benue State and supervised by the Benue State Ministry of Education (MOE) with the core objectives to;</p>
						<p class="leading-normal  fs-16">1. Provide mandatory e-Learning/Virtual Education platform and content development for both public and private schools in Benue State.</p>
						<p class="leading-normal  fs-16">2. Support ICT infrastructure development and maintenance in all schools within Benue State both public and private.</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="text-justify">
							<p class="leading-normal fs-16">3. Undertake training and capacity building of teachers and stakeholders in the education sector on ICT in line with National Policy on ICT in Education.</p>
							<p class="leading-normal fs-16">4. Implement Benue State Ministry of Education mandatory e-learning and learning management system curriculum for Basic, Post-Basic and Tertiary Education.</p>
							<p class="leading-normal fs-16">5. Provide Software as a Service (SAAS), Platform as a Service (PAAS) and Infrastructure as a Service (IAAS) to all schools and stakeholders in education sector in Benue State.</p>
						</div>
					</div>
					<div class="aboutlink">
						<a href="#sec1" class="">
							<i class="fa fa-angle-double-down"></i>
						</a>
						
					</div>
				</div>
			</div>
		</section>
		<!--/section-->

		
		<!--Section-->
		<section>
			<div class="cover-image about-widget sptb bg-background-color" data-bs-image-src="{{asset('assets/images/banners/banner4.jpg')}}">
				<div class="content-text mb-0">
					<div class="container">
						<div class="text-center text-white ">
							<h2 class="mb-2 text-white font-weight-400">Join With Us Today To Achieve Your Goals...</h2>
							<div class="mt-5">
								<a href="course-list.html" class="btn btn-lg btn-secondary">Take Course Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--/Section-->

		
		<!--Section-->
		<section>
			<div class="about-1 cover-image sptb bg-background-color" data-bs-image-src="{{asset('assets/images/banners/banner5.jpg')}}">
				<div class="content-text mb-0 text-white info">
					<div class="container">
						<div class="row text-center">
							<div class="col-lg-3 col-md-6">
								<div class="counter-status md-mb-0">
									<div class="counter-icon">
										<i class="fa fa-users"></i>
									</div>
									<h5>Total Learners</h5>
									<h2 class="counter mb-0">15529</h2>
								</div>
							</div>
							
							
							<div class="col-lg-3 col-md-6">
								<div class="counter-status status">
									<div class="counter-icon text-success">
										<i class="fa fa-graduation-cap"></i>
									</div>
									<h5>Total Courses</h5>
									<h2 class="counter mb-0">10253</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Section-->

	


@endsection