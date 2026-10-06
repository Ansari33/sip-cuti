<!doctype html>
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
  <body
    id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled"
  >
    <!--begin::Theme mode setup on page load-->
    <script>
      var defaultThemeMode = "light";
      var themeMode;
      if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
          themeMode =
            document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
          if (localStorage.getItem("data-bs-theme") !== null) {
            themeMode = localStorage.getItem("data-bs-theme");
          } else {
            themeMode = defaultThemeMode;
          }
        }
        if (themeMode === "system") {
          themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches
            ? "dark"
            : "light";
        }
        document.documentElement.setAttribute("data-bs-theme", themeMode);
      }
    </script>
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
            <div
              id="kt_toolbar_container"
              class="container-xxl d-flex flex-stack flex-wrap"
            >
              <!--begin::Page title-->
              <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-white fw-bold my-1 fs-3">Unit Kerja</h1>
                <!--end::Title-->
              </div>
              <!--end::Page title-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::Toolbar-->
          <!--begin::Container-->
          <div
            id="kt_content_container"
            class="d-flex flex-column-fluid align-items-start container-xxl"
          >
            <!--begin::Post-->
            <div class="content flex-row-fluid" id="kt_content">
              <!--begin::Row-->
              <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-xxl-12">
                  <!--begin::Card widget 15-->
                  <div class="card card-flush h-xl-100">
                    <!--begin::Body-->
                    <div class="card-body py-9">
                      <!--begin::Row-->
                      <div class="row gx-9 h-100">
                        <!--begin::Col-->
                        <div class="col-sm-6 mb-10 mb-sm-0">
                          <!--begin::Overlay-->
                          <a
                            class="d-block overlay h-100"
                            data-fslightbox="lightbox-hot-sales"
                            href="assets/media/stock/600x600/img-42.jpg"
                          >
                            <!--begin::Image-->
                            <div
                              class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-200px h-100"
                              style="
                                background-image: url(&quot;assets/media/ptsp/kantor.jpeg&quot;);
                              "
                            ></div>
                            <!--end::Image-->
                            <!--begin::Action-->
                            <div
                              class="overlay-layer card-rounded bg-dark bg-opacity-25"
                            >
                              <i class="ki-duotone ki-eye fs-3x text-white">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                              </i>
                            </div>
                            <!--end::Action-->
                          </a>
                          <!--end::Overlay-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-6">
                          <!--begin::Mixed Widget 2-->
                          <div class="card card-xl-stretch">
                            <!--begin::Header-->

                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body p-0 mt-10">
                              <!--begin::Stats-->
                              <div class="card-p mt-n20 position-relative">
                                <!--begin::Row-->
                                <div class="row g-0">
                                  <!--begin::Col-->
                                  <div
                                    class="col-lg-12 d-flex flex-column bg-light-success px-6 py-8 rounded-2 me-7 mb-7"
                                  >
                                    <a
                                      href="#"
                                      class="text-success fw-semibold fs-6"
                                    >
                                      <h1 class="text-success">8</h1>
                                      Kantor Urusan Agama</a
                                    >
                                  </div>
                                  <!--end::Col-->
                                </div>
                                <div class="row g-0">
                                  <!--begin::Col-->
                                  <div
                                    class="col d-flex flex-column bg-light-primary px-6 py-8 rounded-2 mb-7 me-1"
                                  >
                                    <a
                                      href="#"
                                      class="text-primary fw-semibold fs-6"
                                      ><h1 class="text-primary">4</h1>
                                      Raudatul Athfal</a
                                    >
                                  </div>
                                  <!--end::Col-->
                                  <!--begin::Col-->
                                  <div
                                    class="col d-flex flex-column bg-light-primary px-6 py-8 rounded-2 mb-7 me-1"
                                  >
                                    <a
                                      href="#"
                                      class="text-primary fw-semibold fs-6"
                                      ><h1 class="text-primary">8</h1>
                                      Madrasah Ibtidaiyah</a
                                    >
                                  </div>
                                  <!--end::Col-->
                                  <!--begin::Col-->
                                  <div
                                    class="col d-flex flex-column bg-light-primary px-6 py-8 rounded-2 mb-7 me-1"
                                  >
                                    <a
                                      href="#"
                                      class="text-primary fw-semibold fs-6"
                                    >
                                      <h1 class="text-primary">4</h1>
                                      Madrasah Tsanawiyah</a
                                    >
                                  </div>
                                  <!--end::Col-->
                                  <!--begin::Col-->
                                  <div
                                    class="col d-flex flex-column bg-light-primary px-6 py-8 rounded-2 mb-7"
                                  >
                                    <a
                                      href="#"
                                      class="text-primary fw-semibold fs-6"
                                      ><h1 class="text-primary">1</h1>
                                      Madrasah Aliyah</a
                                    >
                                  </div>
                                  <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-0">
                                  <!--begin::Col-->
                                  <div
                                    class="col d-flex flex-column bg-light-warning px-6 py-8 rounded-2 me-7"
                                  >
                                    <a
                                      href="#"
                                      class="text-warning fw-semibold fs-6 mt-2"
                                      ><h1 class="text-warning">2</h1>
                                      SMPTK</a
                                    >
                                  </div>
                                  <!--end::Col-->
                                  <!--begin::Col-->
                                  <div
                                    class="col d-flex flex-column bg-light-warning px-6 py-8 rounded-2"
                                  >
                                    <a
                                      href="#"
                                      class="text-warning fw-semibold fs-6 mt-2"
                                      ><h1 class="text-warning">2</h1>
                                      SMTK</a
                                    >
                                  </div>
                                  <!--end::Col-->
                                </div>
                                <!--end::Row-->
                              </div>
                              <!--end::Stats-->
                            </div>
                            <!--end::Body-->
                          </div>
                          <!--end::Mixed Widget 2-->
                        </div>
                        <!--end::Col-->
                      </div>
                      <!--end::Row-->
                    </div>
                    <!--end::Body-->
                  </div>
                  <!--end::Card widget 15-->
                </div>
                <!--end::Col-->
              <!--begin::Col-->
								<div class="col-xl-12">
									<!--begin::List Widget 2-->
									<div class="card card-xl-stretch mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0">
											<h3 class="card-title fw-bold text-dark">KANTOR URUSAN AGAMA</h3>
											
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-2">
                      @php 
                      $ra = [
                        ['nama' => 'MIN 1 SUMBA TIMUR',
                        'alamat' => 'Waingapu'],
                        ['nama' => 'MIN 2 SUMBA TIMUR',
                        'alamat' => 'Kamalaputi'],
                        ['nama' => 'MIN 3 SUMBA TIMUR',
                        'alamat' => 'Melolo'],
                        ['nama' => 'MIS WAINGAPU',
                        'alamat' => 'Kamalaputi'],
                        ['nama' => 'MIS LEWA',
                        'alamat' => 'Waingapu'],
                        ['nama' => 'MIS AL-JIHAD',
                        'alamat' => 'Kamalaputi'],
                        ['nama' => 'MIS INSAN ROBBANI',
                        'alamat' => 'Melolo'],
                        ['nama' => 'MIS AL-MUHAJIRIN',
                        'alamat' => 'Kamalaputi'],


                      ];
                      @endphp
                      @foreach($ra as $rad => $rd )
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img src="/landing/assets/media/logos/logok.png" class="" alt="" />
												</div>
												<!--end::Avatar-->
												<!--begin::Text-->
												<div class="flex-grow-1">
													<a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $rd['nama'] }}</a>
													<span class="text-muted d-block fw-bold">{{ $rd['alamat'] }}</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
                      @endforeach
											
										</div>
										<!--end::Body-->
									</div>
									<!--end::List Widget 2-->
								</div>
								<!--end::Col-->
              </div>
              <!--end::Row-->
              <!--begin::Row-->
							<div class="row gy-5 g-xl-8">
								<!--begin::Col-->
								<div class="col-xl-3">
									<!--begin::List Widget 2-->
									<div class="card card-xl-stretch mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0">
											<h3 class="card-title fw-bold text-dark">Raudatul Athfal</h3>
											
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-2">
                      @php 
                      $ra = [
                        ['nama' => 'YAPPI WAINGAPU',
                        'alamat' => 'Waingapu'],
                        ['nama' => 'AT-TAQWA',
                        'alamat' => 'Kamalaputi'],
                        ['nama' => 'AL MUKMIN',
                        'alamat' => 'Melolo'],
                        ['nama' => 'CERDAS CERIA',
                        'alamat' => 'Kamalaputi'],

                      ];
                      @endphp
                      @foreach($ra as $rad => $rd )
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img src="/landing/assets/media/logos/logok.png" class="" alt="" />
												</div>
												<!--end::Avatar-->
												<!--begin::Text-->
												<div class="flex-grow-1">
													<a href="#" class="text-dark fw-bold text-hover-primary fs-6">RA {{ $rd['nama'] }}</a>
													<span class="text-muted d-block fw-bold">{{ $rd['alamat'] }}</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
                      @endforeach
											
										</div>
										<!--end::Body-->
									</div>
									<!--end::List Widget 2-->
								</div>
								<!--end::Col-->
                <!--begin::Col-->
								<div class="col-xl-3">
									<!--begin::List Widget 2-->
									<div class="card card-xl-stretch mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0">
											<h3 class="card-title fw-bold text-dark">Madrasah Ibtidaiyah</h3>
											
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-2">
                      @php 
                      $ra = [
                        ['nama' => 'MIN 1 SUMBA TIMUR',
                        'alamat' => 'Waingapu'],
                        ['nama' => 'MIN 2 SUMBA TIMUR',
                        'alamat' => 'Kamalaputi'],
                        ['nama' => 'MIN 3 SUMBA TIMUR',
                        'alamat' => 'Melolo'],
                        ['nama' => 'MIS WAINGAPU',
                        'alamat' => 'Kamalaputi'],
                        ['nama' => 'MIS LEWA',
                        'alamat' => 'Waingapu'],
                        ['nama' => 'MIS AL-JIHAD',
                        'alamat' => 'Kamalaputi'],
                        ['nama' => 'MIS INSAN ROBBANI',
                        'alamat' => 'Melolo'],
                        ['nama' => 'MIS AL-MUHAJIRIN',
                        'alamat' => 'Kamalaputi'],


                      ];
                      @endphp
                      @foreach($ra as $rad => $rd )
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img src="/landing/assets/media/logos/logok.png" class="" alt="" />
												</div>
												<!--end::Avatar-->
												<!--begin::Text-->
												<div class="flex-grow-1">
													<a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $rd['nama'] }}</a>
													<span class="text-muted d-block fw-bold">{{ $rd['alamat'] }}</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
                      @endforeach
											
										</div>
										<!--end::Body-->
									</div>
									<!--end::List Widget 2-->
								</div>
								<!--end::Col-->
                <!--begin::Col-->
								<div class="col-xl-3">
									<!--begin::List Widget 2-->
									<div class="card card-xl-stretch mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0">
											<h3 class="card-title fw-bold text-dark">Madrasah Tsanawiyah</h3>
											
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-2">
                      @php 
                      $ra = [
                        ['nama' => 'MTSN SUMBA TIMUR',
                        'alamat' => 'Waingapu'],
                        ['nama' => 'MTs 2 AL ISTIQOMAH',
                        'alamat' => 'Kamalaputi'],
                        ['nama' => 'MTs AL MUHAJIRIN',
                        'alamat' => 'Melolo'],
                        ['nama' => 'MTs NURUL AL FIQRI',
                        'alamat' => 'Kamalaputi'],


                      ];
                      @endphp
                      @foreach($ra as $rad => $rd )
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img src="/landing/assets/media/logos/logok.png" class="" alt="" />
												</div>
												<!--end::Avatar-->
												<!--begin::Text-->
												<div class="flex-grow-1">
													<a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $rd['nama'] }}</a>
													<span class="text-muted d-block fw-bold">{{ $rd['alamat'] }}</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
                      @endforeach
											
										</div>
										<!--end::Body-->
									</div>
									<!--end::List Widget 2-->
								</div>
								<!--end::Col-->
                <!--begin::Col-->
								<div class="col-xl-3">
									<!--begin::List Widget 2-->
									<div class="card card-xl-stretch mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0">
											<h3 class="card-title fw-bold text-dark">Madrasah Aliyah</h3>
											
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-2">
                      @php 
                      $ra = [
                        ['nama' => 'MAS WAINGAPU',
                        'alamat' => 'Waingapu'],
                        ['nama' => 'MAS SAFINATUNNAJAH',
                        'alamat' => 'Kamalaputi'],


                      ];
                      @endphp
                      @foreach($ra as $rad => $rd )
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img src="/landing/assets/media/logos/logok.png" class="" alt="" />
												</div>
												<!--end::Avatar-->
												<!--begin::Text-->
												<div class="flex-grow-1">
													<a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $rd['nama'] }}</a>
													<span class="text-muted d-block fw-bold">{{ $rd['alamat'] }}</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
                      @endforeach
											
										</div>
										<!--end::Body-->
									</div>
									<!--end::List Widget 2-->
								</div>
								<!--end::Col-->

                <!--begin::Col-->
								<div class="col-xl-6">
									<!--begin::List Widget 2-->
									<div class="card card-xl-stretch mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0">
											<h3 class="card-title fw-bold text-dark">SMP KRISTEN</h3>
											
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-2">
                      @php 
                      $ra = [
                        ['nama' => 'SMPTK HANGGORURU',
                        'alamat' => 'Waingapu'],
                        ['nama' => 'SMPTK SATAP',
                        'alamat' => 'Kamalaputi'],


                      ];
                      @endphp
                      @foreach($ra as $rad => $rd )
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img src="/landing/assets/media/logos/logok.png" class="" alt="" />
												</div>
												<!--end::Avatar-->
												<!--begin::Text-->
												<div class="flex-grow-1">
													<a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $rd['nama'] }}</a>
													<span class="text-muted d-block fw-bold">{{ $rd['alamat'] }}</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
                      @endforeach
											
										</div>
										<!--end::Body-->
									</div>
									<!--end::List Widget 2-->
								</div>
								<!--end::Col--><!--begin::Col-->
								<div class="col-xl-6">
									<!--begin::List Widget 2-->
									<div class="card card-xl-stretch mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0">
											<h3 class="card-title fw-bold text-dark">SMA KRISTEN</h3>
											
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-2">
                      @php 
                      $ra = [
                        ['nama' => 'SMAKN SUMBA TIMUR',
                        'alamat' => 'Kanatang'],
                        ['nama' => 'SMTK BETHEL WAINGAPU',
                        'alamat' => 'Waingapu'],


                      ];
                      @endphp
                      @foreach($ra as $rad => $rd )
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img src="/landing/assets/media/logos/logok.png" class="" alt="" />
												</div>
												<!--end::Avatar-->
												<!--begin::Text-->
												<div class="flex-grow-1">
													<a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $rd['nama'] }}</a>
													<span class="text-muted d-block fw-bold">{{ $rd['alamat'] }}</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
                      @endforeach
											
										</div>
										<!--end::Body-->
									</div>
									<!--end::List Widget 2-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
 
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
