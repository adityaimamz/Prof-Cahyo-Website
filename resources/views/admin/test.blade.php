@extends('layouts/admin')

@section('content')
		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="title">
									<h4>Blog Detail</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Blog Detail
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="blog-wrap">
						<div class="container pd-0">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="blog-detail card-box overflow-hidden mb-30">
										<div class="blog-img">
											<img src="{{ asset('assets-admin/vendors/images/img1.jpg') }}" alt="" />
										</div>
										<div class="blog-caption">
											<h1 class="mb-10 mx-auto text">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit
											</h1>
                                            <h5 class="text-secondary my-4">14-12-2021</h5>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim veniam, quis
												nostrud exercitation ullamco laboris nisi ut aliquip ex
												ea commodo
											</p>
											<h5 class="mb-10">
												Lorem ipsum dolor sit amet, consectetur.
											</h5>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim veniam, quis
												nostrud exercitation ullamco laboris nisi ut aliquip ex
												ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu
												fugiat nulla pariatur. Excepteur sint occaecat cupidatat
												non proident, sunt in culpa qui officia deserunt mollit
												anim id est laborum.
											</p>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim veniam, quis
												nostrud exercitation ullamco laboris nisi ut aliquip ex
												ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu
												fugiat nulla pariatur. Excepteur sint occaecat cupidatat
												non proident, sunt in culpa qui officia deserunt mollit
												anim id est laborum.
											</p>
											<h5 class="mb-10">Unordered List</h5>
											<ul>
												<li>
													Duis aute irure dolor in reprehenderit in voluptate.
												</li>
												<li>
													Sunt in culpa qui officia deserunt mollit anim id est
													laborum.
												</li>
												<li>
													Ut enim ad minim veniam, quis nostrud exercitation
													ullamco laboris.
												</li>
												<li>
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit.
												</li>
												<li>
													Duis aute irure dolor in reprehenderit in voluptate.
												</li>
												<li>
													Sunt in culpa qui officia deserunt mollit anim id est
													laborum.
												</li>
												<li>
													Ut enim ad minim veniam, quis nostrud exercitation
													ullamco laboris.
												</li>
												<li>
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit.
												</li>
											</ul>
											<h5 class="mb-10">Ordered List</h5>
											<ol>
												<li>
													Duis aute irure dolor in reprehenderit in voluptate.
												</li>
												<li>
													Sunt in culpa qui officia deserunt mollit anim id est
													laborum.
												</li>
												<li>
													Ut enim ad minim veniam, quis nostrud exercitation
													ullamco laboris.
												</li>
												<li>
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit.
												</li>
												<li>
													Duis aute irure dolor in reprehenderit in voluptate.
												</li>
												<li>
													Sunt in culpa qui officia deserunt mollit anim id est
													laborum.
												</li>
												<li>
													Ut enim ad minim veniam, quis nostrud exercitation
													ullamco laboris.
												</li>
												<li>
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit.
												</li>
											</ol>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
@endsection
