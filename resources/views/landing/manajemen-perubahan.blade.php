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
						<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column me-3">
								<!--begin::Title-->
								<h1 class="d-flex text-white fw-bold my-1 fs-3">Manajemen Perubahan</h1>
								<!--end::Title-->
							</div>
							<!--end::Page title-->
							
						</div>
						<!--end::Container-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Container-->
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content">
							<!--begin::Navbar-->
							<div class="card mb-5 mb-xxl-8">
								<div class="card-body pt-9 pb-0">
									<!--begin::Details-->
									<div class="d-flex flex-wrap flex-sm-nowrap">
										<!--begin: Pic-->
										<div class="me-7 mb-4">
											<div class="  position-relative">
												<img src="assets/media/ptsp/zi.jpeg" alt="image" style="width: 100%;" />
											</div>
										</div>
										<!--end::Pic-->
										<!--begin::Info-->
										
										<!--end::Info-->
									</div>
									<!--end::Details-->
									<!--begin::Navs-->
									<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="/zi/manajemen-perubahan">Manajemen Perubahan</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5" href="/zi/penataan-tatalaksana">Penataan Tatalaksana</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5" href="/zi/manajemen-sdm">Penataan Manajemen SDM</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5" href="/zi/penguatan-akuntabilitas">Penguatan Akuntabilitas</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5" href="/zi/penguatan-pengawasan">Penguatan Pengawasan</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5" href="/zi/pelayanan-publik">Pelayanan Publik</a>
										</li>
										<!--end::Nav item-->
									</ul>
									<!--begin::Navs-->
								</div>
							</div>
							<!--end::Navbar-->
							<!--begin::Row-->
							<!--begin::Row-->
							<div class="row gx-5 gx-xl-10">
								<!--begin::Col-->
								<div class="col-xl-12 mb-5 mb-xl-10">
									<!--begin::Table widget 9-->
									<div class="card card-flush h-xl-100">
										<!--begin::Header-->
										<div class="card-header pt-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold text-gray-800">Evidence Manajemen Perubahan</span>
												<span class="text-gray-400 pt-1 fw-semibold fs-6">status bukti</span>
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<a href="#" class="btn btn-sm btn-light">Download</a>
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-3">
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table class="table table-row-dashed align-middle gs-0 gy-4">
													<!--begin::Table head-->
													<thead>
														<tr class="fs-7 fw-bold border-0 text-gray-400">
															<th class="min-w-150px" colspan="2">Nama Bukti</th>
															<th class="min-w-150px text-end pe-0" colspan="2">Status</th>
															<th class="text-end min-w-150px" colspan="2">File</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														<tr>
															<td class="" colspan="2">
																<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">SK Penetapan Kerja ZI</a>
															</td>
															<td class="pe-0" colspan="2">
																<div class="d-flex justify-content-end">
																	
																	<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">Belum Ada</span>
																</div>
															</td>
															<td class="" colspan="2">
																<div class="d-flex justify-content-end">
																	<a href="#" class="btn btn-sm btn-success">Buka</a>
																</div>
															</td>
														</tr>
														<tr>
															<td class="" colspan="2">
																<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Nota Dinas</a>
															</td>
															<td class="pe-0" colspan="2">
																<div class="d-flex justify-content-end">
																	
																	<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">Belum Ada</span>
																</div>
															</td>
															<td class="" colspan="2">
																<div class="d-flex justify-content-end">
																	<a href="#" class="btn btn-sm btn-success">Buka</a>
																</div>
															</td>
														</tr>
														<tr>
															<td class="" colspan="2">
																<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Daftar Hadir</a>
															</td>
															<td class="pe-0" colspan="2">
																<div class="d-flex justify-content-end">
																	
																	<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">Belum Ada</span>
																</div>
															</td>
															<td class="" colspan="2">
																<div class="d-flex justify-content-end">
																	<a href="#" class="btn btn-sm btn-success">Buka</a>
																</div>
															</td>
														</tr>
														<tr>
															<td class="" colspan="2">
																<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Notula</a>
															</td>
															<td class="pe-0" colspan="2">
																<div class="d-flex justify-content-end">
																	
																	<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">Belum Ada</span>
																</div>
															</td>
															<td class="" colspan="2">
																<div class="d-flex justify-content-end">
																	<a href="#" class="btn btn-sm btn-success">Buka</a>
																</div>
															</td>
														</tr>
														<tr>
															<td class="" colspan="2">
																<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Foto</a>
															</td>
															<td class="pe-0" colspan="2">
																<div class="d-flex justify-content-end">
																	
																	<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">Belum Ada</span>
																</div>
															</td>
															<td class="" colspan="2">
																<div class="d-flex justify-content-end">
																	<a href="#" class="btn btn-sm btn-success">Buka</a>
																</div>
															</td>
														</tr>
														<tr>
															<td class="" colspan="2">
																<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Dokumen Rencana Kerja</a>
															</td>
															<td class="pe-0" colspan="2">
																<div class="d-flex justify-content-end">
																	
																	<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">Belum Ada</span>
																</div>
															</td>
															<td class="" colspan="2">
																<div class="d-flex justify-content-end">
																	<a href="#" class="btn btn-sm btn-success">Buka</a>
																</div>
															</td>
														</tr>
														<tr>
															<td class="" colspan="2">
																<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Banner / Spanduk Komitmen Bersama</a>
															</td>
															<td class="pe-0" colspan="2">
																<div class="d-flex justify-content-end">
																	
																	<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">Belum Ada</span>
																</div>
															</td>
															<td class="" colspan="2">
																<div class="d-flex justify-content-end">
																	<a href="#" class="btn btn-sm btn-success">Buka</a>
																</div>
															</td>
														</tr>
														<tr>
															<td class="" colspan="2">
																<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Laporan Pelaksanaan ZI</a>
															</td>
															<td class="pe-0" colspan="2">
																<div class="d-flex justify-content-end">
																	
																	<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">Belum Ada</span>
																</div>
															</td>
															<td class="" colspan="2">
																<div class="d-flex justify-content-end">
																	<a href="#" class="btn btn-sm btn-success">Buka</a>
																</div>
															</td>
														</tr>
														<tr>
															<td class="" colspan="2">
																<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Laporan Monev</a>
															</td>
															<td class="pe-0" colspan="2">
																<div class="d-flex justify-content-end">
																	
																	<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">Belum Ada</span>
																</div>
															</td>
															<td class="" colspan="2">
																<div class="d-flex justify-content-end">
																	<a href="#" class="btn btn-sm btn-success">Buka</a>
																</div>
															</td>
														</tr>
														<tr>
															<td class="" colspan="2">
																<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Laporan RTL</a>
															</td>
															<td class="pe-0" colspan="2">
																<div class="d-flex justify-content-end">
																	
																	<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">Belum Ada</span>
																</div>
															</td>
															<td class="" colspan="2">
																<div class="d-flex justify-content-end">
																	<a href="#" class="btn btn-sm btn-success">Buka</a>
																</div>
															</td>
														</tr>
														<tr>
															<td class="" colspan="2">
																<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Laporan LHKPN</a>
															</td>
															<td class="pe-0" colspan="2">
																<div class="d-flex justify-content-end">
																	
																	<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">Belum Ada</span>
																</div>
															</td>
															<td class="" colspan="2">
																<div class="d-flex justify-content-end">
																	<a href="#" class="btn btn-sm btn-success">Buka</a>
																</div>
															</td>
														</tr>
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Table Widget 9-->
								</div>
								<!--end::Col-->
								
							</div>
							<!--end::Row-->
							<!--end::Row-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Container-->
					<!--begin::Footer-->
					@include('landing.parts.footer')
					<!--end::Footer-->
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