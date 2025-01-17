@extends('tablar::page')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h2 class="page-title">
                        Dashboard
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                  <span class="d-none d-sm-inline">
                    <a href="#" class="btn btn-white">
                      New view
                    </a>
                  </span>
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                           data-bs-target="#modal-report">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Create new report
                        </a>
                        <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                           data-bs-target="#modal-report" aria-label="Create new report">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-deck row-cards">
              <div class="col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="subheader">Sales</div>
                      <div class="ms-auto lh-1">
                        <div class="dropdown">
                          <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item active" href="#">Last 7 days</a>
                            <a class="dropdown-item" href="#">Last 30 days</a>
                            <a class="dropdown-item" href="#">Last 3 months</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="h1 mb-3">75%</div>
                    <div class="d-flex mb-2">
                      <div>Conversion rate</div>
                      <div class="ms-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                          7% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                        </span>
                      </div>
                    </div>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                        <span class="visually-hidden">75% Complete</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="subheader">Revenue</div>
                      <div class="ms-auto lh-1">
                        <div class="dropdown">
                          <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item active" href="#">Last 7 days</a>
                            <a class="dropdown-item" href="#">Last 30 days</a>
                            <a class="dropdown-item" href="#">Last 3 months</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex align-items-baseline">
                      <div class="h1 mb-0 me-2">$4,300</div>
                      <div class="me-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                          8% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div id="chart-revenue-bg" class="chart-sm"></div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="subheader">New clients</div>
                      <div class="ms-auto lh-1">
                        <div class="dropdown">
                          <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item active" href="#">Last 7 days</a>
                            <a class="dropdown-item" href="#">Last 30 days</a>
                            <a class="dropdown-item" href="#">Last 3 months</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex align-items-baseline">
                      <div class="h1 mb-3 me-2">6,782</div>
                      <div class="me-auto">
                        <span class="text-yellow d-inline-flex align-items-center lh-1">
                          0% <!-- Download SVG icon from http://tabler-icons.io/i/minus -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /></svg>
                        </span>
                      </div>
                    </div>
                    <div id="chart-new-clients" class="chart-sm"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="subheader">Active users</div>
                      <div class="ms-auto lh-1">
                        <div class="dropdown">
                          <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item active" href="#">Last 7 days</a>
                            <a class="dropdown-item" href="#">Last 30 days</a>
                            <a class="dropdown-item" href="#">Last 3 months</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex align-items-baseline">
                      <div class="h1 mb-3 me-2">2,986</div>
                      <div class="me-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                          4% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                        </span>
                      </div>
                    </div>
                    <div id="chart-active-users" class="chart-sm"></div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="row row-cards">
                  <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" /><path d="M12 3v3m0 12v3" /></svg>
                            </span>
                          </div>
                          <div class="col">
                            <div class="font-weight-medium">
                              132 Sales
                            </div>
                            <div class="text-secondary">
                              12 waiting payments
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="bg-green text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
                            </span>
                          </div>
                          <div class="col">
                            <div class="font-weight-medium">
                              78 Orders
                            </div>
                            <div class="text-secondary">
                              32 shipped
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="bg-twitter text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z" /></svg>
                            </span>
                          </div>
                          <div class="col">
                            <div class="font-weight-medium">
                              623 Shares
                            </div>
                            <div class="text-secondary">
                              16 today
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="bg-facebook text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
                            </span>
                          </div>
                          <div class="col">
                            <div class="font-weight-medium">
                              132 Likes
                            </div>
                            <div class="text-secondary">
                              21 today
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-lg-6">
                <div class="row row-cards">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <p class="mb-3">Using Storage <strong>6854.45 MB </strong>of 8 GB</p>
                        <div class="progress progress-separated mb-3">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 44%" aria-label="Regular"></div>
                          <div class="progress-bar bg-info" role="progressbar" style="width: 19%" aria-label="System"></div>
                          <div class="progress-bar bg-success" role="progressbar" style="width: 9%" aria-label="Shared"></div>
                        </div>
                        <div class="row">
                          <div class="col-auto d-flex align-items-center pe-2">
                            <span class="legend me-2 bg-primary"></span>
                            <span>Regular</span>
                            <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-secondary">915MB</span>
                          </div>
                          <div class="col-auto d-flex align-items-center px-2">
                            <span class="legend me-2 bg-info"></span>
                            <span>System</span>
                            <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-secondary">415MB</span>
                          </div>
                          <div class="col-auto d-flex align-items-center px-2">
                            <span class="legend me-2 bg-success"></span>
                            <span>Shared</span>
                            <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-secondary">201MB</span>
                          </div>
                          <div class="col-auto d-flex align-items-center ps-2">
                            <span class="legend me-2"></span>
                            <span>Free</span>
                            <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-secondary">612MB</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="row row-cards">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <p class="mb-3">Using Storage <strong>6854.45 MB </strong>of 8 GB</p>
                        <div class="progress progress-separated mb-3">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 44%" aria-label="Regular"></div>
                          <div class="progress-bar bg-info" role="progressbar" style="width: 19%" aria-label="System"></div>
                          <div class="progress-bar bg-success" role="progressbar" style="width: 9%" aria-label="Shared"></div>
                        </div>
                        <div class="row">
                          <div class="col-auto d-flex align-items-center pe-2">
                            <span class="legend me-2 bg-primary"></span>
                            <span>Regular</span>
                            <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-secondary">915MB</span>
                          </div>
                          <div class="col-auto d-flex align-items-center px-2">
                            <span class="legend me-2 bg-info"></span>
                            <span>System</span>
                            <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-secondary">415MB</span>
                          </div>
                          <div class="col-auto d-flex align-items-center px-2">
                            <span class="legend me-2 bg-success"></span>
                            <span>Shared</span>
                            <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-secondary">201MB</span>
                          </div>
                          <div class="col-auto d-flex align-items-center ps-2">
                            <span class="legend me-2"></span>
                            <span>Free</span>
                            <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-secondary">612MB</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-md-6 col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Social Media Traffic</h3>
                  </div>
                  <table class="table card-table table-vcenter">
                    <thead>
                      <tr>
                        <th>Network</th>
                        <th colspan="2">Visitors</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Instagram</td>
                        <td>3,550</td>
                        <td class="w-50">
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Twitter</td>
                        <td>1,798</td>
                        <td class="w-50">
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-primary" style="width: 35.96%"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Facebook</td>
                        <td>1,245</td>
                        <td class="w-50">
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-primary" style="width: 24.9%"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>TikTok</td>
                        <td>986</td>
                        <td class="w-50">
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-primary" style="width: 19.72%"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Pinterest</td>
                        <td>854</td>
                        <td class="w-50">
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-primary" style="width: 17.08%"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>VK</td>
                        <td>650</td>
                        <td class="w-50">
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-primary" style="width: 13.0%"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Pinterest</td>
                        <td>420</td>
                        <td class="w-50">
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-primary" style="width: 8.4%"></div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="col-md-12 col-lg-8">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Tasks</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter">
                      <tr>
                        <td class="w-1 pe-0">
                          <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked >
                        </td>
                        <td class="w-100">
                          <a href="#" class="text-reset">Extend the data model.</a>
                        </td>
                        <td class="text-nowrap text-secondary">
                          <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                          August 04, 2021
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-secondary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                            2/7
                          </a>
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-secondary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h6" /><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" /></svg>
                            3</a>
                        </td>
                        <td>
                          <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                        </td>
                      </tr>
                      <tr>
                        <td class="w-1 pe-0">
                          <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" >
                        </td>
                        <td class="w-100">
                          <a href="#" class="text-reset">Verify the event flow.</a>
                        </td>
                        <td class="text-nowrap text-secondary">
                          <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                          January 03, 2019
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-secondary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                            3/10
                          </a>
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-secondary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h6" /><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" /></svg>
                            6</a>
                        </td>
                        <td>
                          <span class="avatar avatar-sm">JL</span>
                        </td>
                      </tr>
                      <tr>
                        <td class="w-1 pe-0">
                          <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" >
                        </td>
                        <td class="w-100">
                          <a href="#" class="text-reset">Database backup and maintenance</a>
                        </td>
                        <td class="text-nowrap text-secondary">
                          <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                          December 28, 2018
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-secondary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                            0/6
                          </a>
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-secondary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h6" /><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" /></svg>
                            1</a>
                        </td>
                        <td>
                          <span class="avatar avatar-sm" style="background-image: url(./static/avatars/002m.jpg)"></span>
                        </td>
                      </tr>
                      <tr>
                        <td class="w-1 pe-0">
                          <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked >
                        </td>
                        <td class="w-100">
                          <a href="#" class="text-reset">Identify the implementation team.</a>
                        </td>
                        <td class="text-nowrap text-secondary">
                          <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                          November 07, 2020
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-secondary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                            6/10
                          </a>
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-secondary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h6" /><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" /></svg>
                            12</a>
                        </td>
                        <td>
                          <span class="avatar avatar-sm" style="background-image: url(./static/avatars/003m.jpg)"></span>
                        </td>
                      </tr>
                      <tr>
                        <td class="w-1 pe-0">
                          <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" >
                        </td>
                        <td class="w-100">
                          <a href="#" class="text-reset">Define users and workflow</a>
                        </td>
                        <td class="text-nowrap text-secondary">
                          <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                          November 23, 2021
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-secondary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                            3/7
                          </a>
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-secondary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h6" /><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" /></svg>
                            5</a>
                        </td>
                        <td>
                          <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000f.jpg)"></span>
                        </td>
                      </tr>
                      <tr>
                        <td class="w-1 pe-0">
                          <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked >
                        </td>
                        <td class="w-100">
                          <a href="#" class="text-reset">Check Pull Requests</a>
                        </td>
                        <td class="text-nowrap text-secondary">
                          <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                          January 14, 2021
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-secondary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                            2/9
                          </a>
                        </td>
                        <td class="text-nowrap">
                          <a href="#" class="text-secondary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h6" /><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" /></svg>
                            3</a>
                        </td>
                        <td>
                          <span class="avatar avatar-sm" style="background-image: url(./static/avatars/001f.jpg)"></span>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Invoices</h3>
                  </div>
                  <div class="card-body border-bottom py-3">
                    <div class="d-flex">
                      <div class="text-secondary">
                        Show
                        <div class="mx-2 d-inline-block">
                          <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count">
                        </div>
                        entries
                      </div>
                      <div class="ms-auto text-secondary">
                        Search:
                        <div class="ms-2 d-inline-block">
                          <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                      <thead>
                        <tr>
                          <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                          <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 15l6 -6l6 6" /></svg>
                          </th>
                          <th>Invoice Subject</th>
                          <th>Client</th>
                          <th>VAT No.</th>
                          <th>Created</th>
                          <th>Status</th>
                          <th>Price</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                          <td><span class="text-secondary">001401</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">Design Works</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-us me-2"></span>
                            Carlson Limited
                          </td>
                          <td>
                            87956621
                          </td>
                          <td>
                            15 Dec 2017
                          </td>
                          <td>
                            <span class="badge bg-success me-1"></span> Paid
                          </td>
                          <td>$887</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                          <td><span class="text-secondary">001402</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">UX Wireframes</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-gb me-2"></span>
                            Adobe
                          </td>
                          <td>
                            87956421
                          </td>
                          <td>
                            12 Apr 2017
                          </td>
                          <td>
                            <span class="badge bg-warning me-1"></span> Pending
                          </td>
                          <td>$1200</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                          <td><span class="text-secondary">001403</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">New Dashboard</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-de me-2"></span>
                            Bluewolf
                          </td>
                          <td>
                            87952621
                          </td>
                          <td>
                            23 Oct 2017
                          </td>
                          <td>
                            <span class="badge bg-warning me-1"></span> Pending
                          </td>
                          <td>$534</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                          <td><span class="text-secondary">001404</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">Landing Page</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-br me-2"></span>
                            Salesforce
                          </td>
                          <td>
                            87953421
                          </td>
                          <td>
                            2 Sep 2017
                          </td>
                          <td>
                            <span class="badge bg-secondary me-1"></span> Due in 2 Weeks
                          </td>
                          <td>$1500</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                          <td><span class="text-secondary">001405</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">Marketing Templates</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-pl me-2"></span>
                            Printic
                          </td>
                          <td>
                            87956621
                          </td>
                          <td>
                            29 Jan 2018
                          </td>
                          <td>
                            <span class="badge bg-danger me-1"></span> Paid Today
                          </td>
                          <td>$648</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                          <td><span class="text-secondary">001406</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">Sales Presentation</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-br me-2"></span>
                            Tabdaq
                          </td>
                          <td>
                            87956621
                          </td>
                          <td>
                            4 Feb 2018
                          </td>
                          <td>
                            <span class="badge bg-secondary me-1"></span> Due in 3 Weeks
                          </td>
                          <td>$300</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                          <td><span class="text-secondary">001407</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">Logo & Print</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-us me-2"></span>
                            Apple
                          </td>
                          <td>
                            87956621
                          </td>
                          <td>
                            22 Mar 2018
                          </td>
                          <td>
                            <span class="badge bg-success me-1"></span> Paid Today
                          </td>
                          <td>$2500</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                          <td><span class="text-secondary">001408</span></td>
                          <td><a href="invoice.html" class="text-reset" tabindex="-1">Icons</a></td>
                          <td>
                            <span class="flag flag-xs flag-country-pl me-2"></span>
                            Tookapic
                          </td>
                          <td>
                            87956621
                          </td>
                          <td>
                            13 May 2018
                          </td>
                          <td>
                            <span class="badge bg-success me-1"></span> Paid Today
                          </td>
                          <td>$940</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer d-flex align-items-center">
                    <p class="m-0 text-secondary">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
                    <ul class="pagination m-0 ms-auto">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                          <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>
                          prev
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item active"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">5</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">
                          next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('js')
    <script type="module">
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-revenue-bg'), {
            chart: {
                type: "area",
                fontFamily: 'inherit',
                height: 40.0,
                sparkline: {
                    enabled: true
                },
                animations: {
                    enabled: false
                },
            },
            dataLabels: {
                enabled: false,
            },
            fill: {
                opacity: .16,
                type: 'solid'
            },
            stroke: {
                width: 2,
                lineCap: "round",
                curve: "smooth",
            },
            series: [{
                name: "Profits",
                data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
            }],
            tooltip: {
                theme: 'dark'
            },
            grid: {
                strokeDashArray: 4,
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false
                },
                axisBorder: {
                    show: false,
                },
                type: 'datetime',
            },
            yaxis: {
                labels: {
                    padding: 4
                },
            },
            labels: [
                '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
            ],
            colors: [tabler.getColor("primary")],
            legend: {
                show: false,
            },
        })).render();
      });

      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-new-clients'), {
            chart: {
                type: "line",
                fontFamily: 'inherit',
                height: 40.0,
                sparkline: {
                    enabled: true
                },
                animations: {
                    enabled: false
                },
            },
            fill: {
                opacity: 1,
            },
            stroke: {
                width: [2, 1],
                dashArray: [0, 3],
                lineCap: "round",
                curve: "smooth",
            },
            series: [{
                name: "May",
                data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 4, 46, 39, 62, 51, 35, 41, 67]
            },{
                name: "April",
                data: [93, 54, 51, 24, 35, 35, 31, 67, 19, 43, 28, 36, 62, 61, 27, 39, 35, 41, 27, 35, 51, 46, 62, 37, 44, 53, 41, 65, 39, 37]
            }],
            tooltip: {
                theme: 'dark'
            },
            grid: {
                strokeDashArray: 4,
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false
                },
                type: 'datetime',
            },
            yaxis: {
                labels: {
                    padding: 4
                },
            },
            labels: [
                '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
            ],
            colors: [tabler.getColor("primary"), tabler.getColor("gray-600")],
            legend: {
                show: false,
            },
        })).render();
      });
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-active-users'), {
            chart: {
                type: "bar",
                fontFamily: 'inherit',
                height: 40.0,
                sparkline: {
                    enabled: true
                },
                animations: {
                    enabled: false
                },
            },
            plotOptions: {
                bar: {
                    columnWidth: '50%',
                }
            },
            dataLabels: {
                enabled: false,
            },
            fill: {
                opacity: 1,
            },
            series: [{
                name: "Profits",
                data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
            }],
            tooltip: {
                theme: 'dark'
            },
            grid: {
                strokeDashArray: 4,
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false
                },
                axisBorder: {
                    show: false,
                },
                type: 'datetime',
            },
            yaxis: {
                labels: {
                    padding: 4
                },
            },
            labels: [
                '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
            ],
            colors: [tabler.getColor("primary")],
            legend: {
                show: false,
            },
        })).render();
      });
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-mentions'), {
            chart: {
                type: "bar",
                fontFamily: 'inherit',
                height: 240,
                parentHeightOffset: 0,
                toolbar: {
                    show: false,
                },
                animations: {
                    enabled: false
                },
                stacked: true,
            },
            plotOptions: {
                bar: {
                    columnWidth: '50%',
                }
            },
            dataLabels: {
                enabled: false,
            },
            fill: {
                opacity: 1,
            },
            series: [{
                name: "Web",
                data: [1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 2, 12, 5, 8, 22, 6, 8, 6, 4, 1, 8, 24, 29, 51, 40, 47, 23, 26, 50, 26, 41, 22, 46, 47, 81, 46, 6]
            },{
                name: "Social",
                data: [2, 5, 4, 3, 3, 1, 4, 7, 5, 1, 2, 5, 3, 2, 6, 7, 7, 1, 5, 5, 2, 12, 4, 6, 18, 3, 5, 2, 13, 15, 20, 47, 18, 15, 11, 10, 0]
            },{
                name: "Other",
                data: [2, 9, 1, 7, 8, 3, 6, 5, 5, 4, 6, 4, 1, 9, 3, 6, 7, 5, 2, 8, 4, 9, 1, 2, 6, 7, 5, 1, 8, 3, 2, 3, 4, 9, 7, 1, 6]
            }],
            tooltip: {
                theme: 'dark'
            },
            grid: {
                padding: {
                    top: -20,
                    right: 0,
                    left: -4,
                    bottom: -4
                },
                strokeDashArray: 4,
                xaxis: {
                    lines: {
                        show: true
                    }
                },
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false
                },
                axisBorder: {
                    show: false,
                },
                type: 'datetime',
            },
            yaxis: {
                labels: {
                    padding: 4
                },
            },
            labels: [
                '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19', '2020-07-20', '2020-07-21', '2020-07-22', '2020-07-23', '2020-07-24', '2020-07-25', '2020-07-26'
            ],
            colors: [tabler.getColor("primary"), tabler.getColor("primary", 0.8), tabler.getColor("green", 0.8)],
            legend: {
                show: false,
            },
        })).render();
      });
      // @formatter:on
    </script>

    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-activity'), {
            chart: {
                type: "radialBar",
                fontFamily: 'inherit',
                height: 40,
                width: 40,
                animations: {
                    enabled: false
                },
                sparkline: {
                    enabled: true
                },
            },
            tooltip: {
                enabled: false,
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 0,
                        size: '75%'
                    },
                    track: {
                        margin: 0
                    },
                    dataLabels: {
                        show: false
                    }
                }
            },
            colors: [tabler.getColor("blue")],
            series: [35],
        })).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-development-activity'), {
            chart: {
                type: "area",
                fontFamily: 'inherit',
                height: 192,
                sparkline: {
                    enabled: true
                },
                animations: {
                    enabled: false
                },
            },
            dataLabels: {
                enabled: false,
            },
            fill: {
                opacity: .16,
                type: 'solid'
            },
            stroke: {
                width: 2,
                lineCap: "round",
                curve: "smooth",
            },
            series: [{
                name: "Purchases",
                data: [3, 5, 4, 6, 7, 5, 6, 8, 24, 7, 12, 5, 6, 3, 8, 4, 14, 30, 17, 19, 15, 14, 25, 32, 40, 55, 60, 48, 52, 70]
            }],
            tooltip: {
                theme: 'dark'
            },
            grid: {
                strokeDashArray: 4,
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false
                },
                axisBorder: {
                    show: false,
                },
                type: 'datetime',
            },
            yaxis: {
                labels: {
                    padding: 4
                },
            },
            labels: [
                '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
            ],
            colors: [tabler.getColor("primary")],
            legend: {
                show: false,
            },
            point: {
                show: false
            },
        })).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-1'), {
            chart: {
                type: "line",
                fontFamily: 'inherit',
                height: 24,
                animations: {
                    enabled: false
                },
                sparkline: {
                    enabled: true
                },
            },
            tooltip: {
                enabled: false,
            },
            stroke: {
                width: 2,
                lineCap: "round",
            },
            series: [{
                color: tabler.getColor("primary"),
                data: [17, 24, 20, 10, 5, 1, 4, 18, 13]
            }],
        })).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-2'), {
            chart: {
                type: "line",
                fontFamily: 'inherit',
                height: 24,
                animations: {
                    enabled: false
                },
                sparkline: {
                    enabled: true
                },
            },
            tooltip: {
                enabled: false,
            },
            stroke: {
                width: 2,
                lineCap: "round",
            },
            series: [{
                color: tabler.getColor("primary"),
                data: [13, 11, 19, 22, 12, 7, 14, 3, 21]
            }],
        })).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-3'), {
            chart: {
                type: "line",
                fontFamily: 'inherit',
                height: 24,
                animations: {
                    enabled: false
                },
                sparkline: {
                    enabled: true
                },
            },
            tooltip: {
                enabled: false,
            },
            stroke: {
                width: 2,
                lineCap: "round",
            },
            series: [{
                color: tabler.getColor("primary"),
                data: [10, 13, 10, 4, 17, 3, 23, 22, 19]
            }],
        })).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-4'), {
            chart: {
                type: "line",
                fontFamily: 'inherit',
                height: 24,
                animations: {
                    enabled: false
                },
                sparkline: {
                    enabled: true
                },
            },
            tooltip: {
                enabled: false,
            },
            stroke: {
                width: 2,
                lineCap: "round",
            },
            series: [{
                color: tabler.getColor("primary"),
                data: [6, 15, 13, 13, 5, 7, 17, 20, 19]
            }],
        })).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-5'), {
            chart: {
                type: "line",
                fontFamily: 'inherit',
                height: 24,
                animations: {
                    enabled: false
                },
                sparkline: {
                    enabled: true
                },
            },
            tooltip: {
                enabled: false,
            },
            stroke: {
                width: 2,
                lineCap: "round",
            },
            series: [{
                color: tabler.getColor("primary"),
                data: [2, 11, 15, 14, 21, 20, 8, 23, 18, 14]
            }],
        })).render();
      });
      // @formatter:on
    </script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-6'), {
            chart: {
                type: "line",
                fontFamily: 'inherit',
                height: 24,
                animations: {
                    enabled: false
                },
                sparkline: {
                    enabled: true
                },
            },
            tooltip: {
                enabled: false,
            },
            stroke: {
                width: 2,
                lineCap: "round",
            },
            series: [{
                color: tabler.getColor("primary"),
                data: [22, 12, 7, 14, 3, 21, 8, 23, 18, 14]
            }],
        })).render();
      });
      // @formatter:on
    </script>
@stop