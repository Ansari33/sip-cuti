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
          <div
            id="kt_header"
            class="header align-items-stretch mb-5 mb-lg-10"
            data-kt-sticky="true"
            data-kt-sticky-name="header"
            data-kt-sticky-offset="{default: '200px', lg: '300px'}"
          >
            <!--begin::Container-->
            <div class="container-xxl d-flex align-items-center">
              <!--begin::Heaeder menu toggle-->
              <div
                class="d-flex topbar align-items-center d-lg-none ms-n2 me-3"
                title="Show aside menu"
              >
                <div
                  class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px"
                  id="kt_header_menu_mobile_toggle"
                >
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
              <div
                class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
              >
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
          <div
            id="kt_content_container"
            class="d-flex flex-column-fluid align-items-start container-xxl"
          >
            <!--begin::Post-->
            <div class="content flex-row-fluid" id="kt_content">
              <!--begin::Row-->
              <div class="row g-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-12 mb-xl-10">
                  <!--begin::Lists Widget 19-->
                  <div class="card card-flush h-xl-100">
                    <!--begin::Heading-->
                    <div
                      class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px"
                      
                      data-bs-theme="light"
                    >
                      <!--begin::Title-->
                      <h3
                        class="card-title align-items-start flex-column  pt-15"
                      >
                        <span class="fw-bold fs-2x ">Data Keagamaan</span>
                        <div class="fs-4 ">
                          {{-- 
                          <span class="opacity-75">You have</span>
                          <span class="position-relative d-inline-block">
                            <a
                              href="../../demo2/dist/pages/user-profile/projects.html"
                              class="link-white opacity-75-hover fw-bold d-block mb-1"
                              >4 tasks</a
                            >
                            <!--begin::Separator-->
                            <span
                              class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom "
                            ></span>
                            <!--end::Separator-->
                          </span>
                          <span class="opacity-75">to comlete</span>
                          --}}
                        </div>
                      </h3>
                      <!--end::Title-->
                      <!--begin::Toolbar-->
                      <div class="card-toolbar pt-5">
                        <!--begin::Menu-->
                        <button
                          class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px"
                          data-kt-menu-trigger="click"
                          data-kt-menu-placement="bottom-end"
                          data-kt-menu-overflow="true"
                        >
                          <i class="ki-duotone ki-dots-square fs-4">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                          </i>
                        </button>
                        <!--begin::Menu 2-->
                        <div
                          class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                          data-kt-menu="true"
                        >
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <div
                              class="menu-content fs-6 text-dark fw-bold px-3 py-4"
                            >
                              Quick Actions
                            </div>
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
                          <div
                            class="menu-item px-3"
                            data-kt-menu-trigger="hover"
                            data-kt-menu-placement="right-start"
                          >
                            <!--begin::Menu item-->
                            <a href="#" class="menu-link px-3">
                              <span class="menu-title">New Group</span>
                              <span class="menu-arrow"></span>
                            </a>
                            <!--end::Menu item-->
                            <!--begin::Menu sub-->
                            <div
                              class="menu-sub menu-sub-dropdown w-175px py-4"
                            >
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"
                                  >Admin Group</a
                                >
                              </div>
                              <!--end::Menu item-->
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"
                                  >Staff Group</a
                                >
                              </div>
                              <!--end::Menu item-->
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"
                                  >Member Group</a
                                >
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
                              <a class="btn btn-primary btn-sm px-4" href="#"
                                >Generate Reports</a
                              >
                            </div>
                          </div>
                          <!--end::Menu item-->
                        </div>
                        <!--end::Menu 2-->
                        <!--end::Menu-->
                      </div>
                      <!--end::Toolbar-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Body-->
                    <div class="card-body mt-n20">
                      <!--begin::Stats-->
                      <div class="mt-n20 position-relative">
                        <!--begin::Row-->
                        <div class="row g-3 g-lg-6">
                          <!--begin::Col-->
                          <div class="col-4">
                            <!--begin::Items-->
                            <div
                              class="bg-light-primary bg-opacity-70 rounded-2 px-6 py-5"
                            >
                              <!--begin::Symbol-->
                              <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                  <i
                                    class="ki-duotone ki-user fs-1 text-primary"
                                  >
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                  </i>
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Stats-->
                              <div class="m-0">
                                <!--begin::Number-->
                                <span
                                  class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1"
                                  >{{ $data->sum('islam') }}</span
                                >
                                <!--end::Number-->
                                <!--begin::Desc-->
                                <span class="text-gray-500 fw-semibold fs-6"
                                  >Ummat Islam</span
                                >
                                <!--end::Desc-->
                              </div>
                              <!--end::Stats-->
                            </div>
                            <!--end::Items-->
                          </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-4">
                            <!--begin::Items-->
                            <div
                              class="bg-light-success bg-opacity-70 rounded-2 px-6 py-5"
                            >
                              <!--begin::Symbol-->
                              <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                  <i
                                    class="ki-duotone ki-user fs-1 text-primary"
                                  >
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                  </i>
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Stats-->
                              <div class="m-0">
                                <!--begin::Number-->
                                <span
                                  class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1"
                                  >{{ $data->sum('kristen') }}</span
                                >
                                <!--end::Number-->
                                <!--begin::Desc-->
                                <span class="text-gray-500 fw-semibold fs-6"
                                  >Ummat Kristen</span
                                >
                                <!--end::Desc-->
                              </div>
                              <!--end::Stats-->
                            </div>
                            <!--end::Items-->
                          </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-4">
                            <!--begin::Items-->
                            <div
                              class="bg-light-info  rounded-2 px-6 py-5"
                            >
                              <!--begin::Symbol-->
                              <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                  <i
                                    class="ki-duotone ki-user fs-1 text-primary"
                                  >
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i>
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Stats-->
                              <div class="m-0">
                                <!--begin::Number-->
                                <span
                                  class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1"
                                  >{{ $data->sum('katolik') }}</span
                                >
                                <!--end::Number-->
                                <!--begin::Desc-->
                                <span class="text-gray-500 fw-semibold fs-6"
                                  >Ummat Katolik</span
                                >
                                <!--end::Desc-->
                              </div>
                              <!--end::Stats-->
                            </div>
                            <!--end::Items-->
                          </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-3">
                            <!--begin::Items-->
                            <div
                              class="bg-light-warning rounded-2 px-6 py-5"
                            >
                              <!--begin::Symbol-->
                              <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                  <i
                                    class="ki-duotone ki-user fs-1 text-primary"
                                  >
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i>
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Stats-->
                              <div class="m-0">
                                <!--begin::Number-->
                                <span
                                  class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1"
                                  >{{ $data->sum('hindu') }}</span
                                >
                                <!--end::Number-->
                                <!--begin::Desc-->
                                <span class="text-gray-500 fw-semibold fs-6"
                                  >Ummat Hindu</span
                                >
                                <!--end::Desc-->
                              </div>
                              <!--end::Stats-->
                            </div>
                            <!--end::Items-->
                          </div>
                          <!--end::Col-->
						  <!--begin::Col-->
                          <div class="col-3">
                            <!--begin::Items-->
                            <div
                              class="bg-light-danger rounded-2 px-6 py-5"
                            >
                              <!--begin::Symbol-->
                              <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                  <i
                                    class="ki-duotone ki-user fs-1 text-primary"
                                  >
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i>
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Stats-->
                              <div class="m-0">
                                <!--begin::Number-->
                                <span
                                  class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1"
                                  >{{ $data->sum('buddha') }}</span
                                >
                                <!--end::Number-->
                                <!--begin::Desc-->
                                <span class="text-gray-500 fw-semibold fs-6"
                                  >Ummat Buddha</span
                                >
                                <!--end::Desc-->
                              </div>
                              <!--end::Stats-->
                            </div>
                            <!--end::Items-->
                          </div>
                          <!--end::Col-->
						  <!--begin::Col-->
                          <div class="col-3">
                            <!--begin::Items-->
                            <div
                              class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5"
                            >
                              <!--begin::Symbol-->
                              <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                  <i
                                    class="ki-duotone ki-user fs-1 text-primary"
                                  >
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i>
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Stats-->
                              <div class="m-0">
                                <!--begin::Number-->
                                <span
                                  class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1"
                                  >{{ $data->sum('konghucu') }}</span
                                >
                                <!--end::Number-->
                                <!--begin::Desc-->
                                <span class="text-gray-500 fw-semibold fs-6"
                                  >Ummat Konghucu</span
                                >
                                <!--end::Desc-->
                              </div>
                              <!--end::Stats-->
                            </div>
                            <!--end::Items-->
                          </div>
                          <!--end::Col-->
						  <!--begin::Col-->
                          <div class="col-3">
                            <!--begin::Items-->
                            <div
                              class="bg-light-dark bg-opacity-70 rounded-2 px-6 py-5"
                            >
                              <!--begin::Symbol-->
                              <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                  <i
                                    class="ki-duotone ki-user fs-1 text-primary"
                                  >
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i>
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Stats-->
                              <div class="m-0">
                                <!--begin::Number-->
                                <span
                                  class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1"
                                  >{{ $data->sum('kepercayaan') }}</span
                                >
                                <!--end::Number-->
                                <!--begin::Desc-->
                                <span class="text-gray-500 fw-semibold fs-6"
                                  >Ummat Aliran Kepercayaan</span
                                >
                                <!--end::Desc-->
                              </div>
                              <!--end::Stats-->
                            </div>
                            <!--end::Items-->
                          </div>
                          <!--end::Col-->
                        </div>
                        <!--end::Row-->
                      </div>
                      <!--end::Stats-->
                    </div>
                    <!--end::Body-->
                  </div>
                  <!--end::Lists Widget 19-->
                </div>
                <!--end::Col-->
                
              </div>
              <!--end::Row-->

              <!--begin::Row-->
              <div class="row gy-5 g-xl-8">
                <!--begin::Col-->

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
                          >Data Keagamaan</span
                        >
                        <span class="text-gray-400 mt-1 fw-semibold fs-6"
                          >Data Per Kecamatan Tahun 2026</span
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
                          >Download</a
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
                        <li class="nav-item col-6 mx-0 p-0">
                          <!--begin::Link-->
                          <a
                            class="nav-link active d-flex justify-content-center w-100 border-0 h-100"
                            data-bs-toggle="pill"
                            href="#kt_list_widget_10_tab_1"
                          >
                            <!--begin::Subtitle-->
                            <span
                              class="nav-text text-gray-800 fw-bold fs-6 mb-3"
                              >Data Ummat</span
                            >
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
                        <li class="nav-item col-6 mx-0 px-0">
                          <!--begin::Link-->
                          <a
                            class="nav-link d-flex justify-content-center w-100 border-0 h-100"
                            data-bs-toggle="pill"
                            href="#kt_list_widget_10_tab_2"
                          >
                            <!--begin::Subtitle-->
                            <span
                              class="nav-text text-gray-800 fw-bold fs-6 mb-3"
                              >Rumah Ibadah</span
                            >
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
                        <div
                          class="tab-pane fade show active"
                          id="kt_list_widget_10_tab_1"
                        >
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
                                  <th class="min-w-200px">Kecamatan</th>
                                  <th class="min-w-150px">Islam</th>
                                  <th class="min-w-150px">Kristen</th>
                                  <th class="min-w-100px">Katolik</th>
                                  <th class="min-w-100px">Hindu</th>
                                  <th class="min-w-100px">Budha</th>
                                  <th class="min-w-100px">Konghucu</th>
                                  <th class="min-w-100px">Kepercayaan</th>
                                </tr>
                              </thead>
                              <!--end::Table head-->
                              <!--begin::Table body-->
                              <tbody>
                                @foreach ($data as $item => $ummat)
                                <tr>
                                  <td>
                                    <div class="d-flex align-items-center">
                                      <div
                                        class="d-flex justify-content-start flex-column"
                                      >
                                        <a
                                          href="#"
                                          class="text-dark fw-bold text-hover-primary fs-6"
                                          >{{ $ummat->kecamatan }}</a
                                        >
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-stack mb-2">
                                      <span
                                        class="text-primary me-2 fs-7 fw-bold"
                                        >{{ $ummat->islam }}</span
                                      >
                                    </div>
                                  </td>
                                  <td class="text-end">
                                    <div
                                      class="text-success d-flex flex-column w-100 me-2"
                                    >
                                      <div class="d-flex flex-stack mb-2">
                                        <span class="me-2 fs-7 fw-bold"
                                          >{{ $ummat->kristen }}</span
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
                                        >{{ $ummat->katolik }}</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-stack mb-2">
                                      <span
                                        class="text-warning me-2 fs-7 fw-bold"
                                        >{{ $ummat->hindu }}</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-stack mb-2">
                                      <span
                                        class="text-danger me-2 fs-7 fw-bold"
                                        >{{ $ummat->buddha }}</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-stack mb-2">
                                      <span class="me-2 fs-7 fw-bold">{{ $ummat->konghucu }}</span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-stack mb-2">
                                      <span class="text-muted me-2 fs-7 fw-bold"
                                        >{{ $ummat->kepercayaan }}</span
                                      >
                                    </div>
                                  </td>
                                </tr>
                                @endforeach
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
                                  <th class="min-w-200px">Kecamatan</th>
                                  <th class="min-w-150px">Mesjid</th>
                                  <th class="min-w-150px">Gereja Kristen</th>
                                  <th class="min-w-100px">Gereja Katolik</th>
                                  <th class="min-w-100px">Pura</th>
                                  <th class="min-w-100px">Vihara</th>
                                  <th class="min-w-100px">Klenteng</th>
                                  <th class="min-w-100px">Kepercayaan</th>
                                </tr>
                              </thead>
                              <!--end::Table head-->
                              <!--begin::Table body-->
                              <tbody>
                                @foreach ($ibadah as $item => $ru)
                                <tr>
                                  <td>
                                    <div class="d-flex align-items-center">
                                      <div
                                        class="d-flex justify-content-start flex-column"
                                      >
                                        <a
                                          href="#"
                                          class="text-dark fw-bold text-hover-primary fs-6"
                                          >{{ $ru->kecamatan}}</a
                                        >
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-stack mb-2">
                                      <span
                                        class="text-primary me-2 fs-7 fw-bold"
                                        >{{ $ru->islam }}</span
                                      >
                                    </div>
                                  </td>
                                  <td class="text-end">
                                    <div
                                      class="text-success d-flex flex-column w-100 me-2"
                                    >
                                      <div class="d-flex flex-stack mb-2">
                                        <span class="me-2 fs-7 fw-bold"
                                          >{{ $ru->kristen }}</span
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
                                        >{{ $ru->katolik }}</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-stack mb-2">
                                      <span
                                        class="text-warning me-2 fs-7 fw-bold"
                                        >{{ $ru->hindu }}</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-stack mb-2">
                                      <span
                                        class="text-danger me-2 fs-7 fw-bold"
                                        >{{ $ru->buddha }}</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-stack mb-2">
                                      <span class="me-2 fs-7 fw-bold">{{ $ru->konghucu }}</span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-stack mb-2">
                                      <span class="text-muted me-2 fs-7 fw-bold"
                                        >{{ $ru->kepercayaan }}</span
                                      >
                                    </div>
                                  </td>
                                </tr>
                                @endforeach
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
            </div>
            <!--end::Post-->
          </div>
          <!--end::Container-->
          <!--begin::Footer Section-->
          @include('landing.parts.footer')
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
