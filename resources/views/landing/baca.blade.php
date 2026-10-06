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
							@include('landing.parts.logo')
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
					<div class="toolbar py-5 pb-lg-15" id="kt_toolbar">
						<!--begin::Container-->
						
						<!--end::Container-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Container-->
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content">
							<!--begin::Post card-->
							<div class="card">
								<!--begin::Body-->
								<div class="card-body p-lg-20 pb-lg-0">
									<!--begin::Layout-->
									<div class="d-flex flex-column flex-xl-row">
										<!--begin::Content-->
										<div class="flex-lg-row-fluid me-xl-15">
											<!--begin::Post content-->
											<div class="mb-17">
												<!--begin::Wrapper-->
												<div class="mb-8">
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-6">
														<!--begin::Item-->
														<div class="me-9 my-1">
															<!--begin::Icon-->
															<i class="ki-duotone ki-element-11 text-primary fs-2 me-1">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
															<!--end::Icon-->
															<!--begin::Label-->
															<span class="fw-bold text-gray-400">{{ $berita->tanggal}}</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="me-9 my-1">
															<!--begin::Icon-->
															<i class="ki-duotone ki-briefcase text-primary fs-2 me-1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
															<!--end::Icon-->
															<!--begin::Label-->
															<span class="fw-bold text-gray-400">{{ $berita->tipe }}</span>
															<!--begin::Label-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														
														<!--end::Item-->
													</div>
													<!--end::Info-->
													<!--begin::Title-->
													<a href="#" class="text-dark text-hover-primary fs-2 fw-bold">{{ $berita->judul }}
													<span class="fw-bold text-muted fs-5 ps-1"></span></a>
													<!--end::Title-->
													<!--begin::Container-->
													<div class="overlay mt-8">
														<!--begin::Image-->
													
														<div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px" style="background-image:url('{{ '/gambar-file/' . $berita->gambar }}')"></div>
														
														<!--end::Image-->
														
													</div>
													<!--end::Container-->
												</div>
												<!--end::Wrapper-->
												<!--begin::Description-->
												<div class="fs-5 fw-semibold text-gray-600">
													 {!! $berita->isi !!}
												</div>
												<!--end::Description-->
												
											</div>
											<!--end::Post content-->
										</div>
										<!--end::Content-->
										<!--begin::Sidebar-->
										<div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
											<!--begin::Search blog-->
											
											<!--end::Search blog-->
											<!--begin::Catigories-->
											<div class="mb-16">
												<h4 class="text-dark mb-7">Jenis Berita</h4>
												<!--begin::Item-->
												<div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
													<!--begin::Text-->
													<a href="#" class="text-muted text-hover-primary pe-2">Pusat</a>
													<!--end::Text-->
													<!--begin::Number-->
													<div class="m-0">24</div>
													<!--end::Number-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
													<!--begin::Text-->
													<a href="#" class="text-muted text-hover-primary pe-2">Wilayah</a>
													<!--end::Text-->
													<!--begin::Number-->
													<div class="m-0">152</div>
													<!--end::Number-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
													<!--begin::Text-->
													<a href="#" class="text-muted text-hover-primary pe-2">Daerah</a>
													<!--end::Text-->
													<!--begin::Number-->
													<div class="m-0">52</div>
													<!--end::Number-->
												</div>
												<!--end::Item-->
												
											</div>
											<!--end::Catigories-->
											<!--begin::Recent posts-->
											<div class="m-0">
												<h4 class="text-dark mb-7">Berita Terkini</h4>
												@foreach ($recent as $item => $it)
												<!--begin::Item-->
												<div class="d-flex flex-stack mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-60px symbol-2by3 me-4">
														<div class="symbol-label" style="background-image: url('{{ Storage::url('gambar/' . $it->gambar) }}')"></div>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="m-0">
														<a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $it->judul }}</a>
														<span class="text-gray-600 fw-semibold d-block pt-1 fs-7">{{ $it->tanggal }}</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												@endforeach
											</div>
											<!--end::Recent posts-->
										</div>
										<!--end::Sidebar-->
									</div>
									<!--end::Layout-->
								
								</div>
								<!--end::Body-->
							</div>
							<!--end::Post card-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Container-->
				
					<!--begin::Footer Section-->
					@include('landing.parts.footer')
                    <!--end::Footer Section-->
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