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
                            

							<div class="row gy-5 g-xl-8">
								<div class="col-xl-12">
									<div class="card card-xl-stretch mb-5 mb-xl-8">
										<!--begin::Content-->
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-3 mb-1">Berita </span>
											</h3>
											
										</div>
										<!--end::Header-->
										<!--end::Content-->
										<!--begin::Separator-->
										<!-- <div class="separator separator-dashed mb-9"></div> -->
										<!--end::Separator-->
										<!--begin::Row-->
										<div class="row card-body g-10">
										@foreach($berita as $brt => $nw)
											<!--begin::Col-->
											<div class="col-md-3">
												<!--begin::Hot sales post-->
												<div class="card-xl-stretch me-md-6">
													<!--begin::Overlay-->
													@if($nw->tipe =='Daerah')
													<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="/gambar-file/{{ $nw->gambar }}">
													@else
													<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ $nw->link_gambar }}">
													@endif
														<!--begin::Image-->
														@if($nw->tipe =='Daerah')
														<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('/gambar-file/{{ $nw->gambar }}')"></div>
														@else
														<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{ $nw->link_gambar }}')"></div>
													
														@endif
														<!--end::Image-->
														<!--begin::Action-->
														<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
															<i class="ki-duotone ki-eye fs-2x text-white">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</div>
														<!--end::Action-->
													</a>
													<!--end::Overlay-->
													<!--begin::Body-->
													<div class="mt-5">
														<!--begin::Title-->
														<a href="#" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">{{ $nw->judul }}</a>
														<!--end::Title-->
														
														<!--begin::Text-->
														<div class="fs-6 fw-bold mt-5 d-flex flex-stack">
															<!--begin::Label-->
															<span class="badge border border-dashed fs-8 fw-bold text-dark p-2">
															<span class="fs-6 fw-semibold text-gray-400"></span>{{ $nw->tanggal }}</span>
															<!--end::Label-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-primary">{{ $nw->tipe }}</a>
															<!--end::Action-->
														</div>
														<!--end::Text-->
													</div>
													<!--end::Body-->
												</div>
												<!--end::Hot sales post-->
											</div>
											<!--end::Col-->
										@endforeach	
										{{ $berita->links() }}
											
										</div>
										<!--end::Row-->
									</div>
								</div>
								
							</div>

							
						
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