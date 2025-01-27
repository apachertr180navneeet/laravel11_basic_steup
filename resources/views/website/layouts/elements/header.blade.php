<!--====================  header area ====================-->
<div class="header-area header-area--default">
	<!-- Header Bottom Wrap Start -->
	<div class="header-bottom-wrap header-sticky">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="header default-menu-style position-relative">
						<!-- brand logo -->
						<div class="header__logo">
							<a href="{{route('website.home')}}">
								<img src="{{asset('website/assets/images/logo/logo-dark.webp')}}" aria-label="Mitech Logo" width="160" height="48" class="img-fluid" alt="" />
							</a>
						</div>

						<!-- header midle box  -->
						<div class="header-midle-box">
							<div class="header-bottom-wrap d-md-block d-none">
								<div class="header-bottom-inner">
									<div class="header-bottom-left-wrap">
										<!-- navigation menu -->
										<div class="header__navigation d-none d-xl-block">
											<nav class="navigation-menu primary--menu">
												<ul>
													<li class="{{ request()->routeIs('website.home') ? 'active' : '' }}">
														<a href="{{ route('website.home') }}"><span>Home</span></a>
													</li>
													<li class="{{ request()->routeIs('website.about.us') ? 'active' : '' }}">
														<a href="{{ route('website.about.us') }}"><span>About Us</span></a>
													</li>													
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- header right box -->
						<div class="header-right-box">
							<div class="header-right-inner" id="hidden-icon-wrapper">
								
							</div>

							<!-- mobile menu -->
							<div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
								<i></i>
							</div>
							<!-- hidden icons menu -->
							<div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
								<a href="javascript:void(0)">
									<i class="far fa-ellipsis-h-alt"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Header Bottom Wrap End -->
</div>
<!--====================  End of header area  ====================-->