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
				
					<!--end::Toolbar-->
					<!--begin::Container-->
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content">

							<!--begin::Row-->
							<div class="row gy-5 g-xl-10">
								<!--begin::Col-->
								<div class="col-xl-12 mb-xl-10">
								<!--begin::List widget 10-->
								<div class="card card-flush h-lg-100">
									<!--begin::Header-->
									<div class="card-header pt-7">
									<!--begin::Title-->
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bold text-gray-800"
										>Lembaga Pendidikan </span
										>
										
									</h3>
									<!--end::Title-->
									<!--begin::Toolbar-->
									<div class="card-toolbar">
										<a
										href="#"
										class="btn btn-sm btn-light"
										data-bs-toggle="tooltip"
										data-bs-dismiss="click"
										data-bs-custom-class="tooltip-inverse"
										title="Logistics App is coming soon"
										>View All</a
										>
									</div>
									<!--end::Toolbar-->
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body">
									<!--begin::Nav-->
									<ul
										class="nav nav-pills nav-pills-custom row position-relative mx-0 mb-9"
									>
										<!--begin::Item-->
										<li class="nav-item col-3 mx-0 p-0">
										<!--begin::Link-->
										<a
											class="nav-link active d-flex justify-content-center w-100 border-0 h-100"
											data-bs-toggle="pill"
											href="#kt_list_widget_10_tab_1"
										>
											<!--begin::Subtitle-->
											<span
											class="nav-text text-gray-800 fw-bold fs-6 mb-3"
											>Islam
											</span>
											<!--end::Subtitle-->
											<!--begin::Bullet-->
											<span
											class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"
											></span>
											<!--end::Bullet-->
										</a>
										<!--end::Link-->
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item col-3 mx-0 px-0">
										<!--begin::Link-->
										<a
											class="nav-link d-flex justify-content-center w-100 border-0 h-100"
											data-bs-toggle="pill"
											href="#kt_list_widget_10_tab_2"
										>
											<!--begin::Subtitle-->
											<span
											class="nav-text text-gray-800 fw-bold fs-6 mb-3"
											>Kristen</span>
											<!--end::Subtitle-->
											<!--begin::Bullet-->
											<span
											class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"
											></span>
											<!--end::Bullet-->
										</a>
										<!--end::Link-->
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item col-3 mx-0 px-0">
										<!--begin::Link-->
										<a
											class="nav-link d-flex justify-content-center w-100 border-0 h-100"
											data-bs-toggle="pill"
											href="#kt_list_widget_10_tab_3"
										>
											<!--begin::Subtitle-->
											<span
											class="nav-text text-gray-800 fw-bold fs-6 mb-3"
											>Katolik</span>
											<!--end::Subtitle-->
											<!--begin::Bullet-->
											<span
											class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"
											></span>
											<!--end::Bullet-->
										</a>
										<!--end::Link-->
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item col-3 mx-0 px-0">
										<!--begin::Link-->
										<a
											class="nav-link d-flex justify-content-center w-100 border-0 h-100"
											data-bs-toggle="pill"
											href="#kt_list_widget_10_tab_4"
										>
											<!--begin::Subtitle-->
											<span
											class="nav-text text-gray-800 fw-bold fs-6 mb-3"
											>Hindu</span>
											<!--end::Subtitle-->
											<!--begin::Bullet-->
											<span
											class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"
											></span>
											<!--end::Bullet-->
										</a>
										<!--end::Link-->
										</li>
										<!--end::Item-->

										<!--begin::Bullet-->
										<span
										class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"
										></span>
										<!--end::Bullet-->
									</ul>
									<!--end::Nav-->
									<!--begin::Tab Content-->
									<div class="tab-content">
										<!--begin::Tap pane-->
										<div class="tab-pane fade show active"
										id="kt_list_widget_10_tab_1"
										>
										<!--begin::Item-->
										
									<!--begin::Separator-->
																		<span class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
																		<!--end::Separator-->
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table
											class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4"
											>
											<!--begin::Table head-->
											<thead>
												<tr class="fw-bold text-muted">
												<th class="min-w-200px">Tingkat Pendidikan</th>
												<th class="min-w-150px">Swasta</th>
												<th class="min-w-150px">Negeri</th>
												<th class="min-w-100px">Jumlah Siswa</th>
												<th class="min-w-100px">Jumlah Guru</th>
												
												</tr>
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody>
												<tr>
												<td>
													<div class="d-flex align-items-center">
													<div
														class="d-flex justify-content-start flex-column"
													>
														<a
														href="#"
														class="text-dark fw-bold text-hover-primary fs-6"
														>Raudlatul Athfal</a
														>
													</div>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-primary me-2 fs-7 fw-bold"
														>119215</span
													>
													</div>
												</td>
												<td class="text-end">
													<div
													class="text-success d-flex flex-column w-100 me-2"
													>
													<div class="d-flex flex-stack mb-2">
														<span class="me-2 fs-7 fw-bold"
														>18457</span
														>
													</div>
													<!-- <div class="progress h-6px w-100">
																						<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div> -->
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span class="text-info me-2 fs-7 fw-bold"
														>5127</span
													>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-warning me-2 fs-7 fw-bold"
														>227</span
													>
													</div>
												</td>
												
												</tr>
												<tr>
												<td>
													<div class="d-flex align-items-center">
													<div
														class="d-flex justify-content-start flex-column"
													>
														<a
														href="#"
														class="text-dark fw-bold text-hover-primary fs-6"
														>Madrasah Ibtidaiyah</a
														>
													</div>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-primary me-2 fs-7 fw-bold"
														>119215</span
													>
													</div>
												</td>
												<td class="text-end">
													<div
													class="text-success d-flex flex-column w-100 me-2"
													>
													<div class="d-flex flex-stack mb-2">
														<span class="me-2 fs-7 fw-bold"
														>18457</span
														>
													</div>
													<!-- <div class="progress h-6px w-100">
																						<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div> -->
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span class="text-info me-2 fs-7 fw-bold"
														>5127</span
													>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-warning me-2 fs-7 fw-bold"
														>227</span
													>
													</div>
												</td>
												
												</tr>
												<tr>
												<td>
													<div class="d-flex align-items-center">
													<div
														class="d-flex justify-content-start flex-column"
													>
														<a
														href="#"
														class="text-dark fw-bold text-hover-primary fs-6"
														>Madrasah Tsanawiyah</a
														>
													</div>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-primary me-2 fs-7 fw-bold"
														>119215</span
													>
													</div>
												</td>
												<td class="text-end">
													<div
													class="text-success d-flex flex-column w-100 me-2"
													>
													<div class="d-flex flex-stack mb-2">
														<span class="me-2 fs-7 fw-bold"
														>18457</span
														>
													</div>
													<!-- <div class="progress h-6px w-100">
																						<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div> -->
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span class="text-info me-2 fs-7 fw-bold"
														>5127</span
													>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-warning me-2 fs-7 fw-bold"
														>227</span
													>
													</div>
												</td>
												
												</tr>
												
												<tr>
												<td>
													<div class="d-flex align-items-center">
													<div
														class="d-flex justify-content-start flex-column"
													>
														<a
														href="#"
														class="text-dark fw-bold text-hover-primary fs-6"
														>Madrasah Aliyah</a
														>
													</div>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-primary me-2 fs-7 fw-bold"
														>119215</span
													>
													</div>
												</td>
												<td class="text-end">
													<div
													class="text-success d-flex flex-column w-100 me-2"
													>
													<div class="d-flex flex-stack mb-2">
														<span class="me-2 fs-7 fw-bold"
														>18457</span
														>
													</div>
													<!-- <div class="progress h-6px w-100">
																						<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div> -->
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span class="text-info me-2 fs-7 fw-bold"
														>5127</span
													>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-warning me-2 fs-7 fw-bold"
														>227</span
													>
													</div>
												</td>
												
												</tr>
											</tbody>
											<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Table container-->
										<!--end::Item-->
										</div>
										<!--end::Tap pane-->
										<!--begin::Tap pane-->
										<div class="tab-pane fade" id="kt_list_widget_10_tab_2">
											<!--begin::Item-->
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table
												class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4"
												>
												<!--begin::Table head-->
												<thead>
													<tr class="fw-bold text-muted">
													<th class="min-w-200px">Tingkat Pendidikan</th>
													<th class="min-w-150px">Swasta</th>
													<th class="min-w-150px">Negeri</th>
													<th class="min-w-100px">Jumlah Siswa</th>
													<th class="min-w-100px">Jumlah Guru</th>
													
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>SDTK</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>SMPTK</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>SMAK</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>SMTK</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
												</tbody>
												<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
											<!--end::Item-->
										</div>
										<!--end::Tap pane-->
										<!--begin::Tap pane-->
										<div class="tab-pane fade" id="kt_list_widget_10_tab_3">
											<!--begin::Item-->
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table
												class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4"
												>
												<!--begin::Table head-->
												<thead>
													<tr class="fw-bold text-muted">
													<th class="min-w-200px">Tingkat Pendidikan</th>
													<th class="min-w-150px">Swasta</th>
													<th class="min-w-150px">Negeri</th>
													<th class="min-w-100px">Jumlah Siswa</th>
													<th class="min-w-100px">Jumlah Guru</th>
													
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Taman Seminari</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Sekolah Menengah Agama Katolik</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													
												</tbody>
												<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
											<!--end::Item-->
										</div>
										<!--end::Tap pane-->
										<!--begin::Tap pane-->
										<div class="tab-pane fade" id="kt_list_widget_10_tab_4">
											<!--begin::Item-->
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table
												class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4"
												>
												<!--begin::Table head-->
												<thead>
													<tr class="fw-bold text-muted">
													<th class="min-w-200px">Tingkat Pendidikan</th>
													<th class="min-w-150px">Swasta</th>
													<th class="min-w-150px">Negeri</th>
													<th class="min-w-100px">Jumlah Siswa</th>
													<th class="min-w-100px">Jumlah Guru</th>
													
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Pasrman</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Pratama Widyalaya</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Adi Widyalaya</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													
												</tbody>
												<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
											<!--end::Item-->
										</div>
										<!--end::Tap pane-->
									</div>
									<!--end::Tab Content-->
									</div>
									<!--end: Card Body-->
								</div>
								<!--end::List widget 10-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->

							<!--begin::Row-->
							<div class="row gy-5 g-xl-10">
								<!--begin::Col-->
								<div class="col-xl-12 mb-xl-10">
								<!--begin::List widget 10-->
								<div class="card card-flush h-lg-100">
									<!--begin::Header-->
									<div class="card-header pt-7">
									<!--begin::Title-->
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bold text-gray-800"
										>Kualifikasi Kepala Sekolah / Madrasah </span
										>
										
									</h3>
									<!--end::Title-->
									<!--begin::Toolbar-->
									<div class="card-toolbar">
										<a
										href="#"
										class="btn btn-sm btn-light"
										data-bs-toggle="tooltip"
										data-bs-dismiss="click"
										data-bs-custom-class="tooltip-inverse"
										title="Logistics App is coming soon"
										>View All</a
										>
									</div>
									<!--end::Toolbar-->
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body">
									<!--begin::Nav-->
									<ul
										class="nav nav-pills nav-pills-custom row position-relative mx-0 mb-9"
									>
										<!--begin::Item-->
										<li class="nav-item col-3 mx-0 p-0">
										<!--begin::Link-->
										<a
											class="nav-link active d-flex justify-content-center w-100 border-0 h-100"
											data-bs-toggle="pill"
											href="#kt_list_kepsek_tab_1"
										>
											<!--begin::Subtitle-->
											<span
											class="nav-text text-gray-800 fw-bold fs-6 mb-3"
											>Islam
											</span>
											<!--end::Subtitle-->
											<!--begin::Bullet-->
											<span
											class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"
											></span>
											<!--end::Bullet-->
										</a>
										<!--end::Link-->
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item col-3 mx-0 px-0">
										<!--begin::Link-->
										<a
											class="nav-link d-flex justify-content-center w-100 border-0 h-100"
											data-bs-toggle="pill"
											href="#kt_list_kepsek_tab_2"
										>
											<!--begin::Subtitle-->
											<span
											class="nav-text text-gray-800 fw-bold fs-6 mb-3"
											>Kristen</span>
											<!--end::Subtitle-->
											<!--begin::Bullet-->
											<span
											class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"
											></span>
											<!--end::Bullet-->
										</a>
										<!--end::Link-->
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item col-3 mx-0 px-0">
										<!--begin::Link-->
										<a
											class="nav-link d-flex justify-content-center w-100 border-0 h-100"
											data-bs-toggle="pill"
											href="#kt_list_kepsek_tab_3"
										>
											<!--begin::Subtitle-->
											<span
											class="nav-text text-gray-800 fw-bold fs-6 mb-3"
											>Katolik</span>
											<!--end::Subtitle-->
											<!--begin::Bullet-->
											<span
											class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"
											></span>
											<!--end::Bullet-->
										</a>
										<!--end::Link-->
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item col-3 mx-0 px-0">
										<!--begin::Link-->
										<a
											class="nav-link d-flex justify-content-center w-100 border-0 h-100"
											data-bs-toggle="pill"
											href="#kt_list_kepsek_tab_4"
										>
											<!--begin::Subtitle-->
											<span
											class="nav-text text-gray-800 fw-bold fs-6 mb-3"
											>Hindu</span>
											<!--end::Subtitle-->
											<!--begin::Bullet-->
											<span
											class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"
											></span>
											<!--end::Bullet-->
										</a>
										<!--end::Link-->
										</li>
										<!--end::Item-->

										<!--begin::Bullet-->
										<span
										class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"
										></span>
										<!--end::Bullet-->
									</ul>
									<!--end::Nav-->
									<!--begin::Tab Content-->
									<div class="tab-content">
										<!--begin::Tap pane-->
										<div class="tab-pane fade show active"
										id="kt_list_kepsek_tab_1"
										>
										<!--begin::Item-->
										
									<!--begin::Separator-->
																		<span class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
																		<!--end::Separator-->
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table
											class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4"
											>
											<!--begin::Table head-->
											<thead>
												<tr class="fw-bold text-muted">
												<th class="min-w-200px">Tingkat Pendidikan</th>
												<th class="min-w-150px"> Dibawah S1</th>
													<th class="min-w-150px">S1</th>
													<th class="min-w-100px">S2</th>
													<th class="min-w-100px">S3</th>
												
												</tr>
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody>
												<tr>
												<td>
													<div class="d-flex align-items-center">
													<div
														class="d-flex justify-content-start flex-column"
													>
														<a
														href="#"
														class="text-dark fw-bold text-hover-primary fs-6"
														>Raudlatul Athfal</a
														>
													</div>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-primary me-2 fs-7 fw-bold"
														>119215</span
													>
													</div>
												</td>
												<td class="text-end">
													<div
													class="text-success d-flex flex-column w-100 me-2"
													>
													<div class="d-flex flex-stack mb-2">
														<span class="me-2 fs-7 fw-bold"
														>18457</span
														>
													</div>
													<!-- <div class="progress h-6px w-100">
																						<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div> -->
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span class="text-info me-2 fs-7 fw-bold"
														>5127</span
													>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-warning me-2 fs-7 fw-bold"
														>227</span
													>
													</div>
												</td>
												
												</tr>
												<tr>
												<td>
													<div class="d-flex align-items-center">
													<div
														class="d-flex justify-content-start flex-column"
													>
														<a
														href="#"
														class="text-dark fw-bold text-hover-primary fs-6"
														>Madrasah Ibtidaiyah</a
														>
													</div>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-primary me-2 fs-7 fw-bold"
														>119215</span
													>
													</div>
												</td>
												<td class="text-end">
													<div
													class="text-success d-flex flex-column w-100 me-2"
													>
													<div class="d-flex flex-stack mb-2">
														<span class="me-2 fs-7 fw-bold"
														>18457</span
														>
													</div>
													<!-- <div class="progress h-6px w-100">
																						<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div> -->
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span class="text-info me-2 fs-7 fw-bold"
														>5127</span
													>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-warning me-2 fs-7 fw-bold"
														>227</span
													>
													</div>
												</td>
												
												</tr>
												<tr>
												<td>
													<div class="d-flex align-items-center">
													<div
														class="d-flex justify-content-start flex-column"
													>
														<a
														href="#"
														class="text-dark fw-bold text-hover-primary fs-6"
														>Madrasah Tsanawiyah</a
														>
													</div>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-primary me-2 fs-7 fw-bold"
														>119215</span
													>
													</div>
												</td>
												<td class="text-end">
													<div
													class="text-success d-flex flex-column w-100 me-2"
													>
													<div class="d-flex flex-stack mb-2">
														<span class="me-2 fs-7 fw-bold"
														>18457</span
														>
													</div>
													<!-- <div class="progress h-6px w-100">
																						<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div> -->
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span class="text-info me-2 fs-7 fw-bold"
														>5127</span
													>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-warning me-2 fs-7 fw-bold"
														>227</span
													>
													</div>
												</td>
												
												</tr>
												
												<tr>
												<td>
													<div class="d-flex align-items-center">
													<div
														class="d-flex justify-content-start flex-column"
													>
														<a
														href="#"
														class="text-dark fw-bold text-hover-primary fs-6"
														>Madrasah Aliyah</a
														>
													</div>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-primary me-2 fs-7 fw-bold"
														>119215</span
													>
													</div>
												</td>
												<td class="text-end">
													<div
													class="text-success d-flex flex-column w-100 me-2"
													>
													<div class="d-flex flex-stack mb-2">
														<span class="me-2 fs-7 fw-bold"
														>18457</span
														>
													</div>
													<!-- <div class="progress h-6px w-100">
																						<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div> -->
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span class="text-info me-2 fs-7 fw-bold"
														>5127</span
													>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-warning me-2 fs-7 fw-bold"
														>227</span
													>
													</div>
												</td>
												
												</tr>
											</tbody>
											<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Table container-->
										<!--end::Item-->
										</div>
										<!--end::Tap pane-->
										<!--begin::Tap pane-->
										<div class="tab-pane fade" id="kt_list_kepsek_tab_2">
											<!--begin::Item-->
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table
												class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4"
												>
												<!--begin::Table head-->
												<thead>
													<tr class="fw-bold text-muted">
													<th class="min-w-200px">Tingkat Pendidikan</th>
													<th class="min-w-150px"> Dibawah S1</th>
													<th class="min-w-150px">S1</th>
													<th class="min-w-100px">S2</th>
													<th class="min-w-100px">S3</th>
													
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>SDTK</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>SMPTK</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>SMAK</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>SMTK</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
												</tbody>
												<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
											<!--end::Item-->
										</div>
										<!--end::Tap pane-->
										<!--begin::Tap pane-->
										<div class="tab-pane fade" id="kt_list_kepsek_tab_3">
											<!--begin::Item-->
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table
												class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4"
												>
												<!--begin::Table head-->
												<thead>
													<tr class="fw-bold text-muted">
													<th class="min-w-200px">Tingkat Pendidikan</th>
													<th class="min-w-150px"> Dibawah S1</th>
													<th class="min-w-150px">S1</th>
													<th class="min-w-100px">S2</th>
													<th class="min-w-100px">S3</th>
													
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Taman Seminari</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Sekolah Menengah Agama Katolik</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													
												</tbody>
												<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
											<!--end::Item-->
										</div>
										<!--end::Tap pane-->
										<!--begin::Tap pane-->
										<div class="tab-pane fade" id="kt_list_kepsek_tab_4">
											<!--begin::Item-->
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table
												class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4"
												>
												<!--begin::Table head-->
												<thead>
													<tr class="fw-bold text-muted">
													<th class="min-w-200px">Tingkat Pendidikan</th>
													<th class="min-w-150px"> Dibawah S1</th>
													<th class="min-w-150px">S1</th>
													<th class="min-w-100px">S2</th>
													<th class="min-w-100px">S3</th>
													
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Pasrman</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Pratama Widyalaya</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Adi Widyalaya</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													
												</tbody>
												<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
											<!--end::Item-->
										</div>
										<!--end::Tap pane-->
									</div>
									<!--end::Tab Content-->
									</div>
									<!--end: Card Body-->
								</div>
								<!--end::List widget 10-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->

							<!--begin::Row-->
							<div class="row gy-5 g-xl-10">
								<!--begin::Col-->
								<div class="col-xl-12 mb-xl-10">
								<!--begin::List widget 10-->
								<div class="card card-flush h-lg-100">
									<!--begin::Header-->
									<div class="card-header pt-7">
									<!--begin::Title-->
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bold text-gray-800"
										>Status Kepegawaian dan Kualifikasi Pendidikan Guru </span
										>
										
									</h3>
									<!--end::Title-->
									<!--begin::Toolbar-->
									<div class="card-toolbar">
										<a
										href="#"
										class="btn btn-sm btn-light"
										data-bs-toggle="tooltip"
										data-bs-dismiss="click"
										data-bs-custom-class="tooltip-inverse"
										title="Logistics App is coming soon"
										>View All</a
										>
									</div>
									<!--end::Toolbar-->
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body">
									<!--begin::Nav-->
									<ul
										class="nav nav-pills nav-pills-custom row position-relative mx-0 mb-9"
									>
										<!--begin::Item-->
										<li class="nav-item col-3 mx-0 p-0">
										<!--begin::Link-->
										<a
											class="nav-link active d-flex justify-content-center w-100 border-0 h-100"
											data-bs-toggle="pill"
											href="#kt_list_guru_tab_1"
										>
											<!--begin::Subtitle-->
											<span
											class="nav-text text-gray-800 fw-bold fs-6 mb-3"
											>Islam
											</span>
											<!--end::Subtitle-->
											<!--begin::Bullet-->
											<span
											class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"
											></span>
											<!--end::Bullet-->
										</a>
										<!--end::Link-->
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item col-3 mx-0 px-0">
										<!--begin::Link-->
										<a
											class="nav-link d-flex justify-content-center w-100 border-0 h-100"
											data-bs-toggle="pill"
											href="#kt_list_guru_tab_2"
										>
											<!--begin::Subtitle-->
											<span
											class="nav-text text-gray-800 fw-bold fs-6 mb-3"
											>Kristen</span>
											<!--end::Subtitle-->
											<!--begin::Bullet-->
											<span
											class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"
											></span>
											<!--end::Bullet-->
										</a>
										<!--end::Link-->
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item col-3 mx-0 px-0">
										<!--begin::Link-->
										<a
											class="nav-link d-flex justify-content-center w-100 border-0 h-100"
											data-bs-toggle="pill"
											href="#kt_list_guru_tab_3"
										>
											<!--begin::Subtitle-->
											<span
											class="nav-text text-gray-800 fw-bold fs-6 mb-3"
											>Katolik</span>
											<!--end::Subtitle-->
											<!--begin::Bullet-->
											<span
											class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"
											></span>
											<!--end::Bullet-->
										</a>
										<!--end::Link-->
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item col-3 mx-0 px-0">
										<!--begin::Link-->
										<a
											class="nav-link d-flex justify-content-center w-100 border-0 h-100"
											data-bs-toggle="pill"
											href="#kt_list_guru_tab_4"
										>
											<!--begin::Subtitle-->
											<span
											class="nav-text text-gray-800 fw-bold fs-6 mb-3"
											>Hindu</span>
											<!--end::Subtitle-->
											<!--begin::Bullet-->
											<span
											class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"
											></span>
											<!--end::Bullet-->
										</a>
										<!--end::Link-->
										</li>
										<!--end::Item-->

										<!--begin::Bullet-->
										<span
										class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"
										></span>
										<!--end::Bullet-->
									</ul>
									<!--end::Nav-->
									<!--begin::Tab Content-->
									<div class="tab-content">
										<!--begin::Tap pane-->
										<div class="tab-pane fade show active"
										id="kt_list_guru_tab_1"
										>
										<!--begin::Item-->
										
										<!--begin::Separator-->
										<span class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
										<!--end::Separator-->
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table
											class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4"
											>
											<!--begin::Table head-->
											<thead>
												<tr class="fw-bold text-muted">
													<th class="min-w-200px">Tingkat Pendidikan</th>
													<th class="min-w-150px">PNS</th>
													<th class="min-w-150px">PPPK</th>
													<th class="min-w-100px">NON ASN</th>
													<th class="min-w-150px"> Dibawah S1</th>
													<th class="min-w-150px">S1</th>
													<th class="min-w-100px">S2</th>
													<th class="min-w-100px">S3</th>
												
												</tr>
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody>
												<tr>
												<td>
													<div class="d-flex align-items-center">
													<div
														class="d-flex justify-content-start flex-column"
													>
														<a
														href="#"
														class="text-dark fw-bold text-hover-primary fs-6"
														>Raudlatul Athfal</a
														>
													</div>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-primary me-2 fs-7 fw-bold"
														>119215</span
													>
													</div>
												</td>
												<td class="text-end">
													<div
													class="text-success d-flex flex-column w-100 me-2"
													>
													<div class="d-flex flex-stack mb-2">
														<span class="me-2 fs-7 fw-bold"
														>18457</span
														>
													</div>
													<!-- <div class="progress h-6px w-100">
																						<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div> -->
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span class="text-info me-2 fs-7 fw-bold"
														>5127</span
													>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-warning me-2 fs-7 fw-bold"
														>227</span
													>
													</div>
												</td>
												
												</tr>
												<tr>
												<td>
													<div class="d-flex align-items-center">
													<div
														class="d-flex justify-content-start flex-column"
													>
														<a
														href="#"
														class="text-dark fw-bold text-hover-primary fs-6"
														>Madrasah Ibtidaiyah</a
														>
													</div>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-primary me-2 fs-7 fw-bold"
														>119215</span
													>
													</div>
												</td>
												<td class="text-end">
													<div
													class="text-success d-flex flex-column w-100 me-2"
													>
													<div class="d-flex flex-stack mb-2">
														<span class="me-2 fs-7 fw-bold"
														>18457</span
														>
													</div>
													<!-- <div class="progress h-6px w-100">
																						<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div> -->
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span class="text-info me-2 fs-7 fw-bold"
														>5127</span
													>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-warning me-2 fs-7 fw-bold"
														>227</span
													>
													</div>
												</td>
												
												</tr>
												<tr>
												<td>
													<div class="d-flex align-items-center">
													<div
														class="d-flex justify-content-start flex-column"
													>
														<a
														href="#"
														class="text-dark fw-bold text-hover-primary fs-6"
														>Madrasah Tsanawiyah</a
														>
													</div>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-primary me-2 fs-7 fw-bold"
														>119215</span
													>
													</div>
												</td>
												<td class="text-end">
													<div
													class="text-success d-flex flex-column w-100 me-2"
													>
													<div class="d-flex flex-stack mb-2">
														<span class="me-2 fs-7 fw-bold"
														>18457</span
														>
													</div>
													<!-- <div class="progress h-6px w-100">
																						<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div> -->
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span class="text-info me-2 fs-7 fw-bold"
														>5127</span
													>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-warning me-2 fs-7 fw-bold"
														>227</span
													>
													</div>
												</td>
												
												</tr>
												
												<tr>
												<td>
													<div class="d-flex align-items-center">
													<div
														class="d-flex justify-content-start flex-column"
													>
														<a
														href="#"
														class="text-dark fw-bold text-hover-primary fs-6"
														>Madrasah Aliyah</a
														>
													</div>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-primary me-2 fs-7 fw-bold"
														>119215</span
													>
													</div>
												</td>
												<td class="text-end">
													<div
													class="text-success d-flex flex-column w-100 me-2"
													>
													<div class="d-flex flex-stack mb-2">
														<span class="me-2 fs-7 fw-bold"
														>18457</span
														>
													</div>
													<!-- <div class="progress h-6px w-100">
																						<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div> -->
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span class="text-info me-2 fs-7 fw-bold"
														>5127</span
													>
													</div>
												</td>
												<td>
													<div class="d-flex flex-stack mb-2">
													<span
														class="text-warning me-2 fs-7 fw-bold"
														>227</span
													>
													</div>
												</td>
												
												</tr>
											</tbody>
											<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Table container-->
										<!--end::Item-->
										</div>
										<!--end::Tap pane-->
										<!--begin::Tap pane-->
										<div class="tab-pane fade" id="kt_list_guru_tab_2">
											<!--begin::Item-->
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table
												class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4"
												>
												<!--begin::Table head-->
												<thead>
													<tr class="fw-bold text-muted">
													<th class="min-w-200px">Tingkat Pendidikan</th>
													<th class="min-w-150px">PNS</th>
													<th class="min-w-150px">PPPK</th>
													<th class="min-w-100px">NON ASN</th>
													<th class="min-w-150px"> Dibawah S1</th>
													<th class="min-w-150px">S1</th>
													<th class="min-w-100px">S2</th>
													<th class="min-w-100px">S3</th>
													
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>SDTK</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>SMPTK</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>SMAK</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>SMTK</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
												</tbody>
												<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
											<!--end::Item-->
										</div>
										<!--end::Tap pane-->
										<!--begin::Tap pane-->
										<div class="tab-pane fade" id="kt_list_guru_tab_3">
											<!--begin::Item-->
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table
												class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4"
												>
												<!--begin::Table head-->
												<thead>
													<tr class="fw-bold text-muted">
														<th class="min-w-200px">Tingkat Pendidikan</th>
														<th class="min-w-150px">PNS</th>
														<th class="min-w-150px">PPPK</th>
														<th class="min-w-100px">NON ASN</th>
														<th class="min-w-150px"> Dibawah S1</th>
														<th class="min-w-150px">S1</th>
														<th class="min-w-100px">S2</th>
														<th class="min-w-100px">S3</th>
													
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Taman Seminari</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Sekolah Menengah Agama Katolik</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													
												</tbody>
												<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
											<!--end::Item-->
										</div>
										<!--end::Tap pane-->
										<!--begin::Tap pane-->
										<div class="tab-pane fade" id="kt_list_guru_tab_4">
											<!--begin::Item-->
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table
												class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4"
												>
												<!--begin::Table head-->
												<thead>
													<tr class="fw-bold text-muted">
														<th class="min-w-200px">Tingkat Pendidikan</th>
														<th class="min-w-150px">PNS</th>
														<th class="min-w-150px">PPPK</th>
														<th class="min-w-100px">NON ASN</th>
														<th class="min-w-150px"> Dibawah S1</th>
														<th class="min-w-150px">S1</th>
														<th class="min-w-100px">S2</th>
														<th class="min-w-100px">S3</th>
													
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Pasrman</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Pratama Widyalaya</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Adi Widyalaya</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													
												</tbody>
												<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
											<!--end::Item-->
										</div>
										<!--end::Tap pane-->
									</div>
									<!--end::Tab Content-->
									</div>
									<!--end: Card Body-->
								</div>
								<!--end::List widget 10-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							
							<!--begin::Row-->
							<div class="row gy-5 g-xl-10">
								<!--begin::Col-->
								<div class="col-xl-12 mb-xl-10">
								<!--begin::List widget 10-->
								<div class="card card-flush h-lg-100">
									<!--begin::Header-->
									<div class="card-header pt-7">
									<!--begin::Title-->
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bold text-gray-800"
										>Jumlah  Guru Pendidikan Agama Tiap jenjang Sekolah  & Kualifikasi Pendidikan</span
										>
										
									</h3>
									<!--end::Title-->
									<!--begin::Toolbar-->
									<div class="card-toolbar">
										<a
										href="#"
										class="btn btn-sm btn-light"
										data-bs-toggle="tooltip"
										data-bs-dismiss="click"
										data-bs-custom-class="tooltip-inverse"
										title="Logistics App is coming soon"
										>View All</a
										>
									</div>
									<!--end::Toolbar-->
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body">
									<!--begin::Nav-->
									<ul
										class="nav nav-pills nav-pills-custom row position-relative mx-0 mb-9"
									>
										<!--begin::Item-->
										<li class="nav-item col-3 mx-0 p-0">
										<!--begin::Link-->
										<a
											class="nav-link active d-flex justify-content-center w-100 border-0 h-100"
											data-bs-toggle="pill"
											href="#kt_list_guru_agama_tab_1"
										>
											<!--begin::Subtitle-->
											<span
											class="nav-text text-gray-800 fw-bold fs-6 mb-3"
											>Jenjang Penempatan
											</span>
											<!--end::Subtitle-->
											<!--begin::Bullet-->
											<span
											class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"
											></span>
											<!--end::Bullet-->
										</a>
										<!--end::Link-->
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="nav-item col-3 mx-0 px-0">
										<!--begin::Link-->
										<a
											class="nav-link d-flex justify-content-center w-100 border-0 h-100"
											data-bs-toggle="pill"
											href="#kt_list_guru_agama_tab_2"
										>
											<!--begin::Subtitle-->
											<span
											class="nav-text text-gray-800 fw-bold fs-6 mb-3"
											>Kualifikasi Pendidikan</span>
											<!--end::Subtitle-->
											<!--begin::Bullet-->
											<span
											class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"
											></span>
											<!--end::Bullet-->
										</a>
										<!--end::Link-->
										</li>
										<!--end::Item-->
										

										<!--begin::Bullet-->
										<span
										class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"
										></span>
										<!--end::Bullet-->
									</ul>
									<!--end::Nav-->
									<!--begin::Tab Content-->
									<div class="tab-content">
										<!--begin::Tap pane-->
										<div class="tab-pane fade show active"
										id="kt_list_guru_agama_tab_1"
										>
										<!--begin::Item-->
										
										<!--begin::Separator-->
										<span class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
										<!--end::Separator-->
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table
											class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4"
											>
											<!--begin::Table head-->
											<thead>
												<tr class="fw-bold text-muted">
													<th class="min-w-200px">Agama</th>
													<th class="min-w-150px">TK</th>
													<th class="min-w-150px">SD</th>
													<th class="min-w-100px">SMP</th>
													<th class="min-w-150px">SMA</th>
												
												</tr>
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Islam</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Kristen</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Katolik</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Hindu</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Budha</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
											<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Table container-->
										<!--end::Item-->
										</div>
										<!--end::Tap pane-->
										<!--begin::Tap pane-->
										<div class="tab-pane fade" id="kt_list_guru_agama_tab_2">
											<!--begin::Item-->
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table
												class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4"
												>
												<!--begin::Table head-->
												<thead>
													<tr class="fw-bold text-muted">
													<th class="min-w-200px">Agama</th>
													<th class="min-w-150px"> Dibawah S1</th>
													<th class="min-w-150px">S1</th>
													<th class="min-w-100px">S2</th>
													<th class="min-w-100px">S3</th>
													
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Islam</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Kristen</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Katolik</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Hindu</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Budha</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-warning me-2 fs-7 fw-bold"
															>227</span
														>
														</div>
													</td>
													
													</tr>
												</tbody>
												<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Table container-->
											<!--end::Item-->
										</div>
										<!--end::Tap pane-->
										
									</div>
									<!--end::Tab Content-->
									</div>
									<!--end: Card Body-->
								</div>
								<!--end::List widget 10-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->

							<!--begin::Row-->
							<div class="row gy-5 g-xl-10">
								<!--begin::Col-->
								<div class="col-xl-12 mb-xl-10">
								<!--begin::List widget 10-->
								<div class="card card-flush h-lg-100">
									<!--begin::Header-->
									<div class="card-header pt-7">
									<!--begin::Title-->
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bold text-gray-800"
										>Jumlah Kualifikasi Pendidikan Pengawas Pendidikan</span
										>
										
									</h3>
									<!--end::Title-->
									<!--begin::Toolbar-->
									
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body">
									
									<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table
											class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4"
											>
											<!--begin::Table head-->
											<thead>
												<tr class="fw-bold text-muted">
													<th class="min-w-200px">Agama</th>
													<th class="min-w-150px">S1</th>
													<th class="min-w-150px">S2</th>
													<th class="min-w-100px">S3</th>
												
												</tr>
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Islam</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Kristen</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
											
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Katolik</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													
													
													</tr>
													
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Hindu</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													
													
													</tr>
													<tr>
													<td>
														<div class="d-flex align-items-center">
														<div
															class="d-flex justify-content-start flex-column"
														>
															<a
															href="#"
															class="text-dark fw-bold text-hover-primary fs-6"
															>Budha</a
															>
														</div>
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span
															class="text-primary me-2 fs-7 fw-bold"
															>119215</span
														>
														</div>
													</td>
													<td class="text-end">
														<div
														class="text-success d-flex flex-column w-100 me-2"
														>
														<div class="d-flex flex-stack mb-2">
															<span class="me-2 fs-7 fw-bold"
															>18457</span
															>
														</div>
														<!-- <div class="progress h-6px w-100">
																							<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																						</div> -->
														</div>
													</td>
													<td>
														<div class="d-flex flex-stack mb-2">
														<span class="text-info me-2 fs-7 fw-bold"
															>5127</span
														>
														</div>
													</td>
													
													
													</tr>
											<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Table container-->
									</div>
									<!--end: Card Body-->
								</div>
								<!--end::List widget 10-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							
						
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
		@inclde('landing.parts.bottom')

		<!--begin::Modals-->
		
		<!--end::Modals-->
		<!--begin::Javascript-->
            @include('landing.parts.js')
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>