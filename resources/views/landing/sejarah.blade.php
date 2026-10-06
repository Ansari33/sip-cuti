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
                            <div class="row gy-5 g-xl-8mb-5">
                                <div class="col-lg-9">
                                <!--begin::List widget 14-->
									<div class="card ">
										<!--begin::Header-->
										<div class="card-header pt-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold text-dark">Sejarah Terbentuknya</span>
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
											<!--begin::Timeline-->
											<div class="timeline-label">
												<!--begin::Item-->
												<div class="timeline-item">
													<!--begin::Label-->
													<div class="timeline-label fw-bold text-gray-800 fs-6">1946</div>
													<!--end::Label-->
													<!--begin::Badge-->
													<div class="timeline-badge">
														<i class="ki-duotone ki-abstract-8 text-gray-600 fs-3">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Badge-->
													<!--begin::Text-->
													<div class="fw-semibold text-gray-700 ps-3 fs-6">
                                                        <span class="fw-bold text-gray-800 px-3 fs-5">Sejarah Awal</span>
                                                        <br>
                                                        <br>
                                                        <span>
                                                            Kehadiran Kementerian Agama di Kabupaten Sumba Timur merupakan bagian
                                                        dari sejarah panjang pembentukan struktur kelembagaan keagamaan di Indonesia
                                                        pasca-kemerdekaan. Sejak berdirinya Departemen Agama Republik Indonesia secara
                                                        resmi pada tanggal 3 Januari 1946 melalui Penetapan Pemerintah Nomor 1/SD Tahun
                                                        1946, pembentukan instansi vertikal di daerah menjadi prioritas utama dalam
                                                        memperluas jangkauan layanan keagamaan kepada masyarakat.
                                                        </span>
                                                         <br>
                                                         <br>
                                                         <span>
                                                            Pada awalnya, wilayah Sumba Timur belum berdiri sebagai satuan administrasi
                                                            tersendiri, melainkan menjadi bagian dari Provinsi Sunda Kecil berdasarkan Peraturan
                                                            Pemerintah Nomor 21 Tahun 1950. Provinsi ini mencakup wilayah Flores, Sumba,
                                                            Timor, dan sejumlah pulau kecil di sekitarnya. Seiring dengan pembentukan Kantor
                                                            Urusan Agama Daerah (KUAD) di berbagai wilayah, maka pada tahun 1952 secara
                                                        resmi dibentuk KUAD Sumba yang berkedudukan di Waingapu, sebagai pusat layanan
                                                        urusan agama di wilayah Sumba, termasuk Sumba Timur. 
                                                         </span>

                                                            <br>
                                                            <br>
                                                        <span>
                                                            Pembentukan KUAD Sumba pada masa itu bertujuan untuk memfasilitasi
                                                        urusan administrasi dan pelayanan keagamaan seluruh umat beragama. KUAD ini
                                                        menjadi cikal bakal lembaga vertikal Departemen Agama di Sumba Timur. Dalam waktu
                                                        yang bersamaan, dibentuk pula Kantor Pendidikan Agama Daerah (KAPENDAD)
                                                        Sumba, yang secara yuridis disahkan melalui Surat Keputusan Menteri Agama Nomor
                                                        23 Tahun 1955.    
                                                        </span>
                                                        
                                                    </div>
													<!--end::Text-->
												</div>
												<!--end::Item-->
												
												<!--begin::Item-->
												<div class="timeline-item">
													<!--begin::Label-->
													<div class="timeline-label fw-bold text-gray-800 fs-5">1958</div>
													<!--end::Label-->
													<!--begin::Badge-->
													<div class="timeline-badge">
														<i class="ki-duotone ki-abstract-8 text-gray-600 fs-3">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Badge-->
													<!--begin::Text-->
													<div class="fw-semibold text-gray-700 ps-3 fs-6">
                                                        <span class="fw-bold text-gray-800 px-3 fs-5">Transformasi Kelembagaan & Perluasan Fungsi</span>
                                                        <br>
                                                        <br>

                                                        <span>
                                                            Perkembangan kelembagaan Kementerian Agama di daerah mengalami
                                                        transformasi penting setelah ditetapkannya Undang-Undang Nomor 64 Tahun 1958
                                                        yang memisahkan Provinsi Sunda Kecil menjadi tiga provinsi: Bali, Nusa Tenggara
                                                        Barat, dan Nusa Tenggara Timur. Sejak saat itu, struktur organisasi Departemen Agama
                                                        mulai diarahkan secara spesifik untuk mendukung kebutuhan masing-masing provinsi,
                                                        termasuk di wilayah Sumba Timur. 
                                                        </span>
                                                         <br>
                                                         <br>
                                                         <span>
                                                            Melalui kebijakan nasional dan keputusan internal kementerian, struktur KUAD
                                                        mengalami perubahan nama dan fungsi menjadi Kantor Departemen Agama
                                                        Kabupaten, menyusul diterbitkannya KMA Nomor 52 Tahun 1971 dan KMA Nomor 45
                                                        Tahun 1981, yang mengatur organisasi dan tata kerja di tingkat provinsi dan kabupaten. 
                                                         </span>

                                                            <br>
                                                            <br>
                                                        <span>
                                                            Pada periode ini, lembaga Kementerian Agama di Kabupaten Sumba Timur telah
                                                        berkembang menjadi satuan kerja struktural yang menangani beragam fungsi
                                                        keagamaan, mulai dari bimbingan dan pelayanan umat beragama, penyelenggaraan
                                                        pendidikan keagamaan, urusan haji dan zakat, hingga penguatan kerukunan umat
                                                        beragama. Pelayanan dilakukan secara lintas agama dan bersinergi dengan lembaga
                                                        keagamaan di daerah. 
    
                                                        </span>
                                                    </div>
													<!--end::Text-->
												</div>
												<!--end::Item-->
											
												<!--begin::Item-->
												<div class="timeline-item">
													<!--begin::Label-->
													<div class="timeline-label fw-bold text-gray-800 fs-6">2002</div>
													<!--end::Label-->
													<!--begin::Badge-->
													<div class="timeline-badge">
														<i class="ki-duotone ki-abstract-8 text-gray-600 fs-3">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Badge-->
													<!--begin::Text-->
													<div class="fw-semibold text-gray-700 ps-3 fs-6">
                                                        <span class="fw-bold text-gray-800 px-3 fs-5">Restrukturisasi & Penguatan Fungsi Layanan</span>
                                                        <br>
                                                        <br>

                                                        <span>
                                                            Era reformasi membawa semangat perubahan terhadap seluruh struktur
                                                        pemerintahan, termasuk Kementerian Agama. Penataan organisasi dilakukan melalui
                                                        Keputusan Menteri Agama Republik Indonesia Nomor 373 Tahun 2002, yang disusun
                                                        berdasarkan prinsip penyederhanaan struktur, efektivitas pelayanan, serta
                                                        penyesuaian terhadap kondisi umat beragama di daerah. Dalam kerangka ini, Kantor Kementerian Agama Kabupaten Sumba Timur resmi
                                                        masuk dalam struktur organisasi baru sebagai bagian dari unit pelaksana teknis vertikal
                                                        yang langsung berada di bawah naungan Kantor Wilayah Kementerian Agama Provinsi
                                                        Nusa Tenggara Timur, dengan klasifikasi struktur dan fungsi yang semakin lengkap.
                                                        </span>
                                                         <br>
                                                         <br>
                                                         <span>
                                                            Hingga saat ini, Kantor Kementerian Agama Kabupaten Sumba Timur telah
                                                            memiliki beberapa unit/seksi dan penyelenggara, di antaranya:
                                                            <ul>
                                                                <li>Subbagian Tata Usaha</li>
                                                                <li>Seksi Bimbingan Masyarakat Islam</li>
                                                                <li>Seksi Pendidikan Islam</li>
                                                                <li>Seksi Urusan Agama Kristen</li>
                                                                <li>Seksi Pendidikan Kristen</li>
                                                                <li>Bimbingan Masyarakat Katolik</li>
                                                            </ul> 
                                                            Kantor ini juga menjadi motor penggerak dalam membangun kerukunan
                                                            antarumat beragama, pendidikan keagamaan yang moderat, dan penguatan literasi
                                                            keagamaan di tengah masyarakat Sumba Timur yang majemuk.
                                                        </span>

                                                            <br>
                                                            <br>
                                                        <span>
                                                            Dari sebuah kantor urusan kecil yang dibentuk pada tahun 1952 di Waingapu,
                                                            kini Kementerian Agama Kabupaten Sumba Timur telah berkembang menjadi institusi
                                                            pemerintahan yang memiliki peran strategis dalam membina kehidupan keagamaan,
                                                            mengelola pendidikan agama dan keagamaan, serta memperkuat harmoni sosial di 
                                                            tengah keberagaman. <br>
                                                            Sejarah ini menjadi pijakan penting dalam membangun kinerja kelembagaan
                                                            yang profesional, akuntabel, dan responsif terhadap kebutuhan masyarakat. Dengan
                                                            semangat pengabdian dan nilai-nilai keagamaan yang inklusif, Kementerian Agama
                                                            Kabupaten Sumba Timur terus berkomitmen hadir melayani umat dan menjaga
                                                            harmoni di Bumi Matawai Amahu Pada Njara Hamu
    
                                                        </span>
                                                    </div>
													<!--end::Text-->
												</div>
												<!--end::Item-->
												
											</div>
											<!--end::Timeline-->
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
												<div class="symbol symbol-100px symbol-lg-150px mb-4">
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
														<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0 active" href="/profil/sejarah">
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
														<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="/profil/visi-misi">
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