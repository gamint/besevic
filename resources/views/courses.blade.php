@extends('layouts.app')

@section('content')
@section('title', 'Benue State e-Learning/Virtual Education ICT Resource Centre')

	
	<!--Topbar-->
		<div class="header-main">
			
            @include('layouts.nav')

			
				
				<!--Section-->
				<div>
					<div class="sptb-1">
						<div class="header-text1 mb-0">
							<div class="container">
								<div class="row">
									<div class="col-xl-9 col-lg-12 col-md-12 d-block mx-auto">
										<div class="text-center text-white text-property">
											<h1 class=""><span class="font-weight-bold">2000+</span> Courses Available Here!</h1>
										</div>
										<div class="search-background bg-transparent">
											<div class="form row g-0 ">
												<div class="form-group  col-xl-9 col-lg-9 col-md-12 mb-0 bg-white">
													<input type="text" class="form-control input-xl br-te-md-0 br-be-md-0" id="text4" placeholder="Search Courses.....">
												</div>
												
												
												<div class="col-xl-2 col-lg-3 col-md-12 mb-0">
													<a href="javascript:void(0)" class="btn btn-xl btn-block btn-secondary br-ts-md-0 br-bs-md-0">Search Here</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- /header-text -->
					</div>
				</div>
                <!--/Section-->
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

		<!--Section-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="row blog-grid">
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card p-5">
									
                                    <div class="product-slider">
                                        <ul class="list-unstyled video-list-thumbs">
                                            <li class="mb-0">
                                                <a data-bs-toggle="modal" data-bs-target="#homeVideo" class="class-video p-0">
                                                    <img src="assets/images/media/0-13.jpg" alt="img" class="img-responsive  border br-7">
                                                    <span class="fa fa-play-circle text-white class-icon"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

									<div class="card-body pt-4 pb-0 ps-0 pe-0">
										<div class="mb-3">
											<span class="item-card-badge mb-2">Primary 1</span>
											<a href="javascript:void(0)" class=""><h3 class="font-weight-semibold fs-16">English Language</h3></a>
											<p class="">Register now to start learning your favourite subjects.</p>
										</div>
										<div class="d-flex align-items-center pt-2 mt-auto">
											
											<div>
												<a href="javascript:void(0)" class="text-default font-weight-bold">Ngueavese Ter-Ikpom</a>
												<small class="d-block text-muted"> English Teacher</small>
											</div>
											<div class="ms-auto text-muted">
												<a href="javascript:void(0)" class=""><i class="fa fa-book"></i> Lesson Note</a>
											</div>
										</div>
										
									</div>
								</div>
							</div>

							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card p-5">

								 <div class="product-slider">
                                        <ul class="list-unstyled video-list-thumbs">
                                            <li class="mb-0">
                                                <a data-bs-toggle="modal" data-bs-target="#homeVideo" class="class-video p-0">
                                                    <img src="assets/images/media/0-13.jpg" alt="img" class="img-responsive  border br-7">
                                                    <span class="fa fa-play-circle text-white class-icon"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

									<div class="card-body pt-4 pb-0 ps-0 pe-0">
										<div class="mb-3">
											<span class="item-card-badge mb-2">Primary 1</span>
											<a href="javascript:void(0)" class=""><h3 class="font-weight-semibold fs-16">Basic Science</h3></a>
											<p class="">Register now to start learning your favourite subjects.</p>
										</div>
										<div class="d-flex align-items-center pt-2 mt-auto">
											
											<div>
												<a href="javascript:void(0)" class="text-default font-weight-bold">Lawrence Abozwar</a>
												<small class="d-block text-muted">Basic Science Teacher</small>
											</div>
											<div class="ms-auto text-muted">
												<a href="javascript:void(0)" class=""><i class="fa fa-book"></i> Lesson Note</a>
											</div>
										</div>
										
									</div>
								</div>
							</div>

							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card p-5">

									 <div class="product-slider">
                                        <ul class="list-unstyled video-list-thumbs">
                                            <li class="mb-0">
                                                <a data-bs-toggle="modal" data-bs-target="#homeVideo" class="class-video p-0">
                                                    <img src="assets/images/media/0-13.jpg" alt="img" class="img-responsive  border br-7">
                                                    <span class="fa fa-play-circle text-white class-icon"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

									<div class="card-body pt-4 pb-0 ps-0 pe-0">
										<div class="mb-3">
											<span class="item-card-badge mb-2">Primary 1</span>
											<a href="javascript:void(0)" class=""><h3 class="font-weight-semibold fs-16">Mathematics</h3></a>
											<p class="">Register now to start learning your favourite subjects.</p>
										</div>
										<div class="d-flex align-items-center pt-2 mt-auto">
											
											<div>
												<a href="javascript:void(0)" class="text-default font-weight-bold">Heke David Loho</a>
												<small class="d-block text-muted">Mathematics Teacher</small>
											</div>
											<div class="ms-auto text-muted">
												<a href="javascript:void(0)" class=""><i class="fa fa-book"></i> Lesson Note</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card p-5">

								 <div class="product-slider">
                                        <ul class="list-unstyled video-list-thumbs">
                                            <li class="mb-0">
                                                <a data-bs-toggle="modal" data-bs-target="#homeVideo" class="class-video p-0">
                                                    <img src="assets/images/media/0-13.jpg" alt="img" class="img-responsive  border br-7">
                                                    <span class="fa fa-play-circle text-white class-icon"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

									<div class="card-body pt-4 pb-0 ps-0 pe-0">
										<div class="mb-3">
											<span class="item-card-badge mb-2">Primary 1</span>
											<a href="javascript:void(0)" class="text-dark  fs-16 font-weight-semibold"><h3 class="font-weight-semibold"> Social Studies</h3></a>
											<p>Register now to start learning your favourite subjects.</p>
										</div>
										<div class="d-flex align-items-center pt-2 mt-auto">
											
											<div>
												<a href="javascript:voide(0)" class="text-default font-weight-bold">Lawrence Abozwar</a>
												<small class="d-block text-muted">Social Studies Teacher</small>
											</div>
											<div class="ms-auto text-muted">
												<a href="javascript:void(0)" class=""><i class="fa fa-book"></i> Lesson Note</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card p-5">
									 <div class="product-slider">
                                        <ul class="list-unstyled video-list-thumbs">
                                            <li class="mb-0">
                                                <a data-bs-toggle="modal" data-bs-target="#homeVideo" class="class-video p-0">
                                                    <img src="assets/images/media/0-13.jpg" alt="img" class="img-responsive  border br-7">
                                                    <span class="fa fa-play-circle text-white class-icon"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

									<div class="card-body pt-4 ps-0 pe-0 pb-0">
										<div class="mb-3">
											<span class="item-card-badge mb-2">Primary 1</span>
											<a href="javascript:void(0)" class="text-dark  fs-16 font-weight-semibold"><h3 class="font-weight-semibold">Agric. Science</h3></a>
											<p>Register now to start learning your favourite subjects.</p>
										</div>
										<div class="d-flex align-items-center pt-2 mt-auto">
											
											<div>
												<a href="profile.html" class="text-default font-weight-bold">Heke David Loho</a>
												<small class="d-block text-muted">Agric. Science Teacher</small>
											</div>
											<div class="ms-auto text-muted">
												<a href="javascript:void(0)" class=""><i class="fa fa-book"></i> Lesson Note</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card p-5">
									 <div class="product-slider">
                                        <ul class="list-unstyled video-list-thumbs">
                                            <li class="mb-0">
                                                <a data-bs-toggle="modal" data-bs-target="#homeVideo" class="class-video p-0">
                                                    <img src="assets/images/media/0-13.jpg" alt="img" class="img-responsive  border br-7">
                                                    <span class="fa fa-play-circle text-white class-icon"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

									<div class="card-body pt-4 ps-0 pe-0 pb-0">
										<div class="mb-3">
											<span class="item-card-badge mb-2">Primary 1</span>
											<a href="javascript:void(0)" class="text-dark  fs-16 font-weight-semibold"><h3 class="font-weight-semibold">French</h3></a>
											<p>Register now to start learning your favourite subjects.</p>
										</div>
										<div class="d-flex align-items-center pt-2 mt-auto">
											
											<div>
												<a href="javascript:void(0)" class="text-default font-weight-bold">Tina Tamen</a>
												<small class="d-block text-muted">French Teacher</small>
											</div>

											<div class="ms-auto text-muted">
												<a href="javascript:void(0)" class=""><i class="fa fa-book"></i> Lesson Note</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="center-block text-center">
							<ul class="pagination mb-0">
								<li class="page-item page-prev disabled">
									<a class="page-link" href="javascript:void(0)" tabindex="-1">Prev</a>
								</li>
								<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
								<li class="page-item page-next">
									<a class="page-link" href="javascript:void(0)">Next</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Section-->

		 <!-- Video Modal -->
		 <div class="modal fade" id="homeVideo" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<button type="button" class="btn btn-default" data-bs-dismiss="modal"><i class="fa fa-times"></i></button>
					<div class="embed-responsive embed-responsive-16by9">
						<video id="gossVideo" class="embed-responsive-item" controls="controls">
							<source src="assets/video/english.mp4" type="video/mp4">
						</video>
					</div>
				</div>
			</div>
		</div>
		<!-- /Video Modal -->


	@endsection