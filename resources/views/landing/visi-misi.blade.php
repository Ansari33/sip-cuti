<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.2.0
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	@include('landing.parts.head')
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header align-items-stretch mb-5 mb-lg-10" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container-xxl d-flex align-items-center">
							<!--begin::Heaeder menu toggle-->
							<div class="d-flex topbar align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
								<div class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
									<i class="ki-duotone ki-abstract-14 fs-1">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
							</div>
							<!--end::Heaeder menu toggle-->
							<!--begin::Header Logo-->
							<div class="header-logo me-5 me-md-10 flex-grow-1 flex-lg-grow-0">
								<a href="../../demo2/dist/index.html">
									<img alt="Logo" src="assets/media/logos/logok.png" class="logo-default h-25px" />
									<img alt="Logo" src="assets/media/logos/logok.png" class="logo-sticky h-25px" />
								
                                    </a>
                                
							</div>
							<!--end::Header Logo-->
							<!--begin::Wrapper-->
							<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
								<!--begin::Navbar-->
								@include('landing.parts.navbar')
								<!--end::Navbar-->
								<!--begin::Toolbar wrapper-->
								@include('landing.parts.toolbar')
								<!--end::Toolbar wrapper-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Toolbar-->
				
					<!--end::Toolbar-->
					<!--begin::Container-->
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content">                         
                            <div class="row gy-5 g-xl-8mb-5">
                                <div class="col-lg-9">
                                <!--begin::List widget 14-->
									<div class="card ">
										<!--begin::Header-->
										<div class="card-header pt-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold text-dark">Visi dan Misi</span>
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
													<i class="ki-duotone ki-dots-square fs-1 text-gray-400 me-n1">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Ticket</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Customer</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
														<!--begin::Menu item-->
														<a href="#" class="menu-link px-3">
															<span class="menu-title">New Group</span>
															<span class="menu-arrow"></span>
														</a>
														<!--end::Menu item-->
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Admin Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Staff Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Member Group</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">New Contact</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3 py-3">
															<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-6">
                                            <!--begin::Top-->
											<div class="text-center mb-18">
												<!--begin::Title-->
												<h3 class="fs-2hx text-dark mb-6">Visi</h3>
												<!--end::Title-->
												<!--begin::Text-->
												<div class="fs-5 text-gray-800 fw-semibold">“Kementerian Agama yang profesional dan andal dalam membangun masyarakat
                                                    yang saleh, moderat, cerdas dan unggul untuk mewujudkan Indonesia maju yang
                                                    berdaulat, mandiri, dan berkepribadian berdasarkan gotong royong”.
											    </div>
												<!--end::Text-->
											</div>
											<!--end::Top-->


                                            <!--begin::Top-->
											<div class="text-center mb-18">
												<!--begin::Title-->
												<h3 class="fs-2hx text-dark mb-6">Misi</h3>
												<!--end::Title-->
												
											</div>
                                            <!--begin::Table-->
											<table  class="table table-row-dashed align-left fs-6 gy-4 my-0 pb-3" >
												
												<tbody>
													<tr>
														<td class="min-w-175px">
															<div class="position-relative ps-6 pe-3 py-2">
																<div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-info"></div>
																<a href="#" class="mb-1 text-dark text-hover-primary fw-bold">Meningkatkan kualitas kesalehan umat beragama;</a>
																
															</div>
														</td>
														
													</tr>
													<tr>
														<td class="min-w-175px">
															<div class="position-relative ps-6 pe-3 py-2">
																<div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-warning"></div>
																<a href="#" class="mb-1 text-dark text-hover-primary fw-bold">Memperkuat moderasi umat beragama dan kerukunan umat beragama;</a>
															</div>
														</td>
														
													</tr>
													<tr>
														<td class="min-w-175px">
															<div class="position-relative ps-6 pe-3 py-2">
																<div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-success"></div>
																<a href="#" class="mb-1 text-dark text-hover-primary fw-bold">Meningkatkan layanan keagamaan yang adil, mudah dan merata;</a>
															</div>
														</td>
														
													</tr>
													<tr>
														<td class="min-w-175px">
															<div class="position-relative ps-6 pe-3 py-2">
																<div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-danger"></div>
																<a href="#" class="mb-1 text-dark text-hover-primary fw-bold">Meningkatkan layanan pendidikan yang merata dan berkualitas;
                                                                </a>
															</div>
														</td>
														
														
													</tr>
													<tr>
														<td class="min-w-175px">
															<div class="position-relative ps-6 pe-3 py-2">
																<div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-primary"></div>
																<a href="#" class="mb-1 text-dark text-hover-primary fw-bold">Meningkatkan produktivitas dan daya saing pendidikan;
                                                                </a>
															</div>
														</td>
														
													</tr>
                                                    <tr>
														<td class="min-w-175px">
															<div class="position-relative ps-6 pe-3 py-2">
																<div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-info"></div>
																<a href="#" class="mb-1 text-dark text-hover-primary fw-bold">Memantapkan tata kelola pemerintahan yang baik (Good Governance). </a>
																
															</div>
														</td>
														
													</tr>
												</tbody>
												<!--end::Table-->
											</table>
											<!--end::Table-->
											<!--end::Top-->

                                           
											
										</div>
										<!--end: Card Body-->
									</div>
									<!--end: List widget 14-->
                                </div>
                                <div class="col-lg-3">
                                    <!--begin::User menu-->
									<div class="card mb-5 mb-xl-8">
										<!--begin::Body-->
										<div class="card-body pt-15 px-0">
											<!--begin::Member-->
											<div class="d-flex flex-column text-center mb-9 px-9">
												<!--begin::Photo-->
												<div class="symbol symbol-80px symbol-lg-150px mb-4">
													<img src="assets/media/ptsp/kantor.jpeg" class="" alt="" />
												</div>
												<!--end::Photo-->
												<!--begin::Info-->
												<div class="text-center">
													<!--begin::Name-->
													<a href="../../demo2/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary fs-4">Kantor Kementerian Agama Kabupaten Sumba Timur</a>
													<!--end::Name-->
													<!--begin::Position-->
													
													<!--end::Position-->
												</div>
												<!--end::Info-->
											</div>
											<!--end::Member-->
											<!--begin::Row-->
											
											<!--end::Row-->
											<!--begin::Navbar-->
											<div class="m-0">
												<!--begin::Navs-->
												<ul class="nav nav-pills nav-pills-custom flex-column border-transparent fs-5 fw-bold">
													<!--begin::Nav item-->
													<li class="nav-item mt-5">
														<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0 " href="/profil/sejarah">
														<i class="ki-duotone ki-row-horizontal fs-3 text-muted me-3">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>Sejarah
														<!--begin::Bullet-->
														<span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
														<!--end::Bullet--></a>
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item mt-5">
														<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0 active" href="/profil/visi-misi">
														<i class="ki-duotone ki-chart-simple-2 fs-3 text-muted me-3">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>Visi Misi
														<!--begin::Bullet-->
														<span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
														<!--end::Bullet--></a>
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item mt-5">
														<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="/profil/tugas-fungsi">
														<i class="ki-duotone ki-profile-circle fs-3 text-muted me-3">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>Tugas & Fungsi
														<!--begin::Bullet-->
														<span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
														<!--end::Bullet--></a>
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item mt-5">
														<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="/profil/kepala-kantor">
														<i class="ki-duotone ki-setting-2 fs-3 text-muted me-3">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>Kepala Kantor
														<!--begin::Bullet-->
														<span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
														<!--end::Bullet--></a>
													</li>
													<!--end::Nav item-->
												</ul>
												<!--begin::Navs-->
											</div>
											<!--end::Navbar-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::User menu-->
                                    </div>
                            </div>
			

						</div>
						<!--end::Post-->
					</div>
					<!--end::Container-->
					<!--begin::Footer Section-->
					<div class="mb-0">
						<!--begin::Curve top-->
						
						<!--end::Curve top-->
						<!--begin::Wrapper-->
						<div class="landing-dark-bg pt-20">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Row-->
								<div class="row py-10 py-lg-20">
									<!--begin::Col-->
									<div class="col-lg-5 pe-lg-16 mb-10 mb-lg-0">
										<!--begin::Block-->
										<div class="rounded landing-dark-border p-9 mb-10">
											<!--begin::Title-->
											<h2 class="text-white">Kantor Kementerian Agama Kabupaten Sumba Timur</h2>
											<!--end::Title-->
											<!--begin::Text-->
											<span class="fw-normal fs-4 text-gray-700">
											<i class="ki-map"></i><a href="https://keenthemes.com/support" class="text-white opacity-50 text-hover-primary">Jalan L.D Dapawole No.14b Waingapu</a></span>
											<!--end::Text-->
										</div>
										<!--end::Block-->
										<!--begin::Block-->
										<div class="rounded landing-dark-border p-9">
											<!--begin::Title-->
											<h2 class="text-white">Kontak Kami</h2>
											<!--end::Title-->
											<!--begin::Text-->
											<span class="fw-normal fs-4 text-gray-700"><i class="ki-duotone ki-phone"></i>
											<a href="../../demo2/dist/pages/user-profile/overview.html" class="text-white opacity-50 text-hover-primary"><i class="ki-duotone ki-telephone"></i> 0387614614</a></span><br>
											<span class="fw-normal fs-4 text-gray-700">
											<a href="../../demo2/dist/pages/user-profile/overview.html" class="text-white opacity-50 text-hover-primary">038762620</a></span><br>
											<span class="fw-normal fs-4 text-gray-700">
											<a href="../../demo2/dist/pages/user-profile/overview.html" class="text-white opacity-50 text-hover-primary">kabsumtimur@kemenag.go.id</a></span>
											<!--end::Text-->
										</div>
										<!--end::Block-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-lg-6 ps-lg-16">
										<!--begin::Navs-->
										<div class="d-flex justify-content-center">
											<!--begin::Links-->
											<div class="d-flex fw-semibold flex-column me-20">
												<!--begin::Subtitle-->
												<h4 class="fw-bold text-gray-400 mb-6">More for Metronic</h4>
												<!--end::Subtitle-->
												<!--begin::Link-->
												<a href="https://keenthemes.com/faqs" class="text-white opacity-50 text-hover-primary fs-5 mb-6">FAQ</a>
												<!--end::Link-->
												<!--begin::Link-->
												<a href="https://preview.keenthemes.com/html/metronic/docs" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Documentaions</a>
												<!--end::Link-->
												<!--begin::Link-->
												<a href="https://www.youtube.com/c/KeenThemesTuts/videos" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Video Tuts</a>
												<!--end::Link-->
												<!--begin::Link-->
												<a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Changelog</a>
												<!--end::Link-->
												<!--begin::Link-->
												<a href="https://devs.keenthemes.com/" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Support Forum</a>
												<!--end::Link-->
												<!--begin::Link-->
												<a href="https://keenthemes.com/blog" class="text-white opacity-50 text-hover-primary fs-5">Blog</a>
												<!--end::Link-->
											</div>
											<!--end::Links-->
											<!--begin::Links-->
											<div class="d-flex fw-semibold flex-column ms-lg-20">
												<!--begin::Subtitle-->
												<h4 class="fw-bold text-gray-400 mb-6">Stay Connected</h4>
												<!--end::Subtitle-->
												<!--begin::Link-->
												<a href="https://www.facebook.com/keenthemes" class="mb-6">
													<img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt="" />
													<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
												</a>
												<!--end::Link-->
												<!--begin::Link-->
												<a href="https://github.com/KeenthemesHub" class="mb-6">
													<img src="assets/media/svg/brand-logos/github.svg" class="h-20px me-2" alt="" />
													<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</span>
												</a>
												<!--end::Link-->
												<!--begin::Link-->
												<a href="https://twitter.com/keenthemes" class="mb-6">
													<img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt="" />
													<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
												</a>
												<!--end::Link-->
												<!--begin::Link-->
												<a href="https://dribbble.com/keenthemes" class="mb-6">
													<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px me-2" alt="" />
													<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Dribbble</span>
												</a>
												<!--end::Link-->
												<!--begin::Link-->
												<a href="https://www.instagram.com/keenthemes" class="mb-6">
													<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2" alt="" />
													<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
												</a>
												<!--end::Link-->
											</div>
											<!--end::Links-->
										</div>
										<!--end::Navs-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Container-->
							<!--begin::Separator-->
							<div class="landing-dark-separator"></div>
							<!--end::Separator-->
							<!--begin::Container-->
							<div class="container">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
									<!--begin::Copyright-->
									<div class="d-flex align-items-center order-2 order-md-1">
										<!--begin::Logo-->
										<a href="../../demo2/dist/landing.html">
											<img alt="Logo" src="assets/media/logos/landing.svg" class="h-15px h-md-20px" />
										</a>
										<!--end::Logo image-->
										<!--begin::Logo image-->
										<span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1" href="https://keenthemes.com">&copy; 2023 Keenthemes Inc.</span>
										<!--end::Logo image-->
									</div>
									<!--end::Copyright-->
									<!--begin::Menu-->
									<ul class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
										<li class="menu-item">
											<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
										</li>
										<li class="menu-item mx-5">
											<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
										</li>
										<li class="menu-item">
											<a href="" target="_blank" class="menu-link px-2">Purchase</a>
										</li>
									</ul>
									<!--end::Menu-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Wrapper-->
					</div>
			
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		
        @include('landing.parts.bottom')

		<!--begin::Modals-->
		
		<!--end::Modals-->
		<!--begin::Javascript-->
		@include('landing.parts.js')
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>