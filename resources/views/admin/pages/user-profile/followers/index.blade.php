@extends('admin.layouts.master')

@section('title', 'G2B Admin')

@push('css')

@endpush

@section('content')
<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar pt-10 mb-0">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
									<!--begin::Toolbar wrapper-->
									<div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
										<!--begin::Page title-->
										<div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
											<!--begin::Title-->
											<h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Followers</h1>
											<!--end::Title-->
											<!--begin::Breadcrumb-->
											<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
												<!--begin::Item-->
												<li class="breadcrumb-item text-muted">
													<a href="index.html" class="text-muted text-hover-primary">Home</a>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item">
													<span class="bullet bg-gray-500 w-5px h-2px"></span>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="breadcrumb-item text-muted">User Profile</li>
												<!--end::Item-->
											</ul>
											<!--end::Breadcrumb-->
										</div>
										<!--end::Page title-->
										<!--begin::Actions-->
										<div class="d-flex align-items-center gap-2 gap-lg-3">
											<a href="#" class="btn btn-sm btn-flex btn-transparent btn-hover-outline" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Save</a>
											<a href="" class="btn btn-sm btn-flex btn-outline btn-active-primary bg-body" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
											<i class="ki-outline ki-eye fs-4"></i>Preview</a>
											<a href="" class="btn btn-sm btn-flex btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">
											<i class="ki-outline ki-exit-up fs-4"></i>Push</a>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Toolbar wrapper-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-fluid">
									<!--begin::Navbar-->
									<div class="card mb-6">
										<div class="card-body pt-9 pb-0">
											<!--begin::Details-->
											<div class="d-flex flex-wrap flex-sm-nowrap">
												<!--begin: Pic-->
												<div class="me-7 mb-4">
													<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
														<img src="{{ getFileVersion('/assets/admin/media/avatars/300-1.jpg') }}" alt="image" />
														<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
													</div>
												</div>
												<!--end::Pic-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<!--begin::Title-->
													<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
														<!--begin::User-->
														<div class="d-flex flex-column">
															<!--begin::Name-->
															<div class="d-flex align-items-center mb-2">
																<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Max Smith</a>
																<a href="#">
																	<i class="ki-outline ki-verify fs-1 text-primary"></i>
																</a>
															</div>
															<!--end::Name-->
															<!--begin::Info-->
															<div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
																<a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
																<i class="ki-outline ki-profile-circle fs-4 me-1"></i>Developer</a>
																<a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
																<i class="ki-outline ki-geolocation fs-4 me-1"></i>SF, Bay Area</a>
																<a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
																<i class="ki-outline ki-sms fs-4 me-1"></i>max@kt.com</a>
															</div>
															<!--end::Info-->
														</div>
														<!--end::User-->
														<!--begin::Actions-->
														<div class="d-flex my-4">
															<a href="#" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">
																<i class="ki-outline ki-check fs-3 d-none"></i>
																<!--begin::Indicator label-->
																<span class="indicator-label">Follow</span>
																<!--end::Indicator label-->
																<!--begin::Indicator progress-->
																<span class="indicator-progress">Please wait... 
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																<!--end::Indicator progress-->
															</a>
															<a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Hire Me</a>
															<!--begin::Menu-->
															<div class="me-0">
																<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																	<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																</button>
																<!--begin::Menu 3-->
																<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
																	<!--begin::Heading-->
																	<div class="menu-item px-3">
																		<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
																	</div>
																	<!--end::Heading-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Create Invoice</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link flex-stack px-3">Create Payment 
																		<span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																			<i class="ki-outline ki-information fs-6"></i>
																		</span></a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Generate Bill</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
																		<a href="#" class="menu-link px-3">
																			<span class="menu-title">Subscription</span>
																			<span class="menu-arrow"></span>
																		</a>
																		<!--begin::Menu sub-->
																		<div class="menu-sub menu-sub-dropdown w-175px py-4">
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3">Plans</a>
																			</div>
																			<!--end::Menu item-->
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3">Billing</a>
																			</div>
																			<!--end::Menu item-->
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3">Statements</a>
																			</div>
																			<!--end::Menu item-->
																			<!--begin::Menu separator-->
																			<div class="separator my-2"></div>
																			<!--end::Menu separator-->
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<div class="menu-content px-3">
																					<!--begin::Switch-->
																					<label class="form-check form-switch form-check-custom form-check-solid">
																						<!--begin::Input-->
																						<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																						<!--end::Input-->
																						<!--end::Label-->
																						<span class="form-check-label text-muted fs-6">Recuring</span>
																						<!--end::Label-->
																					</label>
																					<!--end::Switch-->
																				</div>
																			</div>
																			<!--end::Menu item-->
																		</div>
																		<!--end::Menu sub-->
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3 my-1">
																		<a href="#" class="menu-link px-3">Settings</a>
																	</div>
																	<!--end::Menu item-->
																</div>
																<!--end::Menu 3-->
															</div>
															<!--end::Menu-->
														</div>
														<!--end::Actions-->
													</div>
													<!--end::Title-->
													<!--begin::Stats-->
													<div class="d-flex flex-wrap flex-stack">
														<!--begin::Wrapper-->
														<div class="d-flex flex-column flex-grow-1 pe-8">
															<!--begin::Stats-->
															<div class="d-flex flex-wrap">
																<!--begin::Stat-->
																<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																	<!--begin::Number-->
																	<div class="d-flex align-items-center">
																		<i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>
																		<div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$">0</div>
																	</div>
																	<!--end::Number-->
																	<!--begin::Label-->
																	<div class="fw-semibold fs-6 text-gray-500">Earnings</div>
																	<!--end::Label-->
																</div>
																<!--end::Stat-->
																<!--begin::Stat-->
																<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																	<!--begin::Number-->
																	<div class="d-flex align-items-center">
																		<i class="ki-outline ki-arrow-down fs-3 text-danger me-2"></i>
																		<div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="80">0</div>
																	</div>
																	<!--end::Number-->
																	<!--begin::Label-->
																	<div class="fw-semibold fs-6 text-gray-500">Projects</div>
																	<!--end::Label-->
																</div>
																<!--end::Stat-->
																<!--begin::Stat-->
																<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																	<!--begin::Number-->
																	<div class="d-flex align-items-center">
																		<i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>
																		<div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
																	</div>
																	<!--end::Number-->
																	<!--begin::Label-->
																	<div class="fw-semibold fs-6 text-gray-500">Success Rate</div>
																	<!--end::Label-->
																</div>
																<!--end::Stat-->
															</div>
															<!--end::Stats-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Progress-->
														<div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
															<div class="d-flex justify-content-between w-100 mt-auto mb-2">
																<span class="fw-semibold fs-6 text-gray-500">Profile Compleation</span>
																<span class="fw-bold fs-6">50%</span>
															</div>
															<div class="h-5px mx-3 w-100 bg-light mb-3">
																<div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
														<!--end::Progress-->
													</div>
													<!--end::Stats-->
												</div>
												<!--end::Info-->
											</div>
											<!--end::Details-->
											<!--begin::Navs-->
											@include('admin.pages.user-profile.includes.navbar')
											<!--begin::Navs-->
										</div>
									</div>
									<!--end::Navbar-->
									<!--begin::Followers toolbar-->
									<div class="d-flex flex-wrap flex-stack mb-6">
										<!--begin::Title-->
										<h3 class="text-gray-800 fw-bold my-2">My Connections 
										<span class="fs-6 text-gray-500 fw-semibold ms-1">(29)</span></h3>
										<!--end::Title-->
										<!--begin::Controls-->
										<div class="d-flex my-2">
											<!--begin::Select-->
											<select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm bg-body border-body w-125px">
												<option value="Active" selected="selected">Active</option>
												<option value="Approved">In Progress</option>
												<option value="Declined">To Do</option>
												<option value="In Progress">Completed</option>
											</select>
											<!--end::Select-->
										</div>
										<!--end::Controls-->
									</div>
									<!--end::Followers toolbar-->
									<!--begin::Row-->
									<div class="row g-6 mb-6 g-xl-9 mb-xl-9">
										<!--begin::Followers-->
										<!--begin::Col-->
										<div class="col-md-6 col-xxl-4">
											<!--begin::Card-->
											<div class="card">
												<!--begin::Card body-->
												<div class="card-body d-flex flex-center flex-column py-9 px-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-65px symbol-circle mb-5">
														<img src="{{ getFileVersion('/assets/admin/media//avatars/300-11.jpg') }}" alt="image" />
														<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric Watson</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
													<!--end::Position-->
													<!--begin::Info-->
													<div class="d-flex flex-center flex-wrap mb-5">
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$14,560</div>
															<div class="fw-semibold text-gray-500">Earnings</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$236,400</div>
															<div class="fw-semibold text-gray-500">Sales</div>
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
													<!--begin::Follow-->
													<button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
														<i class="ki-outline ki-check following fs-3"></i>
														<i class="ki-outline ki-plus follow fs-3 d-none"></i>
														<!--begin::Indicator label-->
														<span class="indicator-label">Following</span>
														<!--end::Indicator label-->
														<!--begin::Indicator progress-->
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														<!--end::Indicator progress-->
													</button>
													<!--end::Follow-->
												</div>
												<!--begin::Card body-->
											</div>
											<!--begin::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xxl-4">
											<!--begin::Card-->
											<div class="card">
												<!--begin::Card body-->
												<div class="card-body d-flex flex-center flex-column py-9 px-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-65px symbol-circle mb-5">
														<img src="{{ getFileVersion('/assets/admin/media//avatars/300-6.jpg') }}" alt="image" />
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Olivia Larson</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="fw-semibold text-gray-500 mb-6">Art Director at Seal Inc.</div>
													<!--end::Position-->
													<!--begin::Info-->
													<div class="d-flex flex-center flex-wrap mb-5">
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$14,560</div>
															<div class="fw-semibold text-gray-500">Earnings</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$236,400</div>
															<div class="fw-semibold text-gray-500">Sales</div>
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
													<!--begin::Follow-->
													<button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
														<i class="ki-outline ki-plus follow fs-3"></i>
														<i class="ki-outline ki-check following fs-3 d-none"></i>
														<!--begin::Indicator label-->
														<span class="indicator-label">Follow</span>
														<!--end::Indicator label-->
														<!--begin::Indicator progress-->
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														<!--end::Indicator progress-->
													</button>
													<!--end::Follow-->
												</div>
												<!--begin::Card body-->
											</div>
											<!--begin::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xxl-4">
											<!--begin::Card-->
											<div class="card">
												<!--begin::Card body-->
												<div class="card-body d-flex flex-center flex-column py-9 px-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-65px symbol-circle mb-5">
														<span class="symbol-label fs-2x fw-semibold text-warning bg-light-warning">A</span>
														<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Adam Williams</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="fw-semibold text-gray-500 mb-6">System Arcitect at Wolto Co.</div>
													<!--end::Position-->
													<!--begin::Info-->
													<div class="d-flex flex-center flex-wrap mb-5">
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$14,560</div>
															<div class="fw-semibold text-gray-500">Earnings</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$236,400</div>
															<div class="fw-semibold text-gray-500">Sales</div>
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
													<!--begin::Follow-->
													<button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
														<i class="ki-outline ki-check following fs-3"></i>
														<i class="ki-outline ki-plus follow fs-3 d-none"></i>
														<!--begin::Indicator label-->
														<span class="indicator-label">Following</span>
														<!--end::Indicator label-->
														<!--begin::Indicator progress-->
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														<!--end::Indicator progress-->
													</button>
													<!--end::Follow-->
												</div>
												<!--begin::Card body-->
											</div>
											<!--begin::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xxl-4">
											<!--begin::Card-->
											<div class="card">
												<!--begin::Card body-->
												<div class="card-body d-flex flex-center flex-column py-9 px-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-65px symbol-circle mb-5">
														<span class="symbol-label fs-2x fw-semibold text-info bg-light-info">P</span>
														<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Paul Marcus</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
													<!--end::Position-->
													<!--begin::Info-->
													<div class="d-flex flex-center flex-wrap mb-5">
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$14,560</div>
															<div class="fw-semibold text-gray-500">Earnings</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$236,400</div>
															<div class="fw-semibold text-gray-500">Sales</div>
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
													<!--begin::Follow-->
													<button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
														<i class="ki-outline ki-check following fs-3"></i>
														<i class="ki-outline ki-plus follow fs-3 d-none"></i>
														<!--begin::Indicator label-->
														<span class="indicator-label">Following</span>
														<!--end::Indicator label-->
														<!--begin::Indicator progress-->
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														<!--end::Indicator progress-->
													</button>
													<!--end::Follow-->
												</div>
												<!--begin::Card body-->
											</div>
											<!--begin::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xxl-4">
											<!--begin::Card-->
											<div class="card">
												<!--begin::Card body-->
												<div class="card-body d-flex flex-center flex-column py-9 px-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-65px symbol-circle mb-5">
														<span class="symbol-label fs-2x fw-semibold text-success bg-light-success">N</span>
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Neil Owen</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="fw-semibold text-gray-500 mb-6">Accountant at Numbers Co.</div>
													<!--end::Position-->
													<!--begin::Info-->
													<div class="d-flex flex-center flex-wrap mb-5">
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$14,560</div>
															<div class="fw-semibold text-gray-500">Earnings</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$236,400</div>
															<div class="fw-semibold text-gray-500">Sales</div>
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
													<!--begin::Follow-->
													<button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
														<i class="ki-outline ki-plus follow fs-3"></i>
														<i class="ki-outline ki-check following fs-3 d-none"></i>
														<!--begin::Indicator label-->
														<span class="indicator-label">Follow</span>
														<!--end::Indicator label-->
														<!--begin::Indicator progress-->
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														<!--end::Indicator progress-->
													</button>
													<!--end::Follow-->
												</div>
												<!--begin::Card body-->
											</div>
											<!--begin::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xxl-4">
											<!--begin::Card-->
											<div class="card">
												<!--begin::Card body-->
												<div class="card-body d-flex flex-center flex-column py-9 px-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-65px symbol-circle mb-5">
														<span class="symbol-label fs-2x fw-semibold text-primary bg-light-primary">S</span>
														<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Sean Paul</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="fw-semibold text-gray-500 mb-6">Developer at Loop Inc</div>
													<!--end::Position-->
													<!--begin::Info-->
													<div class="d-flex flex-center flex-wrap mb-5">
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$14,560</div>
															<div class="fw-semibold text-gray-500">Earnings</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$236,400</div>
															<div class="fw-semibold text-gray-500">Sales</div>
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
													<!--begin::Follow-->
													<button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
														<i class="ki-outline ki-plus follow fs-3"></i>
														<i class="ki-outline ki-check following fs-3 d-none"></i>
														<!--begin::Indicator label-->
														<span class="indicator-label">Follow</span>
														<!--end::Indicator label-->
														<!--begin::Indicator progress-->
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														<!--end::Indicator progress-->
													</button>
													<!--end::Follow-->
												</div>
												<!--begin::Card body-->
											</div>
											<!--begin::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xxl-4">
											<!--begin::Card-->
											<div class="card">
												<!--begin::Card body-->
												<div class="card-body d-flex flex-center flex-column py-9 px-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-65px symbol-circle mb-5">
														<img src="{{ getFileVersion('/assets/admin/media//avatars/300-1.jpg') }}" alt="image" />
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Kitona Johnson</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="fw-semibold text-gray-500 mb-6">Web Designer at Nextop Ltd.</div>
													<!--end::Position-->
													<!--begin::Info-->
													<div class="d-flex flex-center flex-wrap mb-5">
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$14,560</div>
															<div class="fw-semibold text-gray-500">Earnings</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$236,400</div>
															<div class="fw-semibold text-gray-500">Sales</div>
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
													<!--begin::Follow-->
													<button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
														<i class="ki-outline ki-check following fs-3"></i>
														<i class="ki-outline ki-plus follow fs-3 d-none"></i>
														<!--begin::Indicator label-->
														<span class="indicator-label">Following</span>
														<!--end::Indicator label-->
														<!--begin::Indicator progress-->
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														<!--end::Indicator progress-->
													</button>
													<!--end::Follow-->
												</div>
												<!--begin::Card body-->
											</div>
											<!--begin::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xxl-4">
											<!--begin::Card-->
											<div class="card">
												<!--begin::Card body-->
												<div class="card-body d-flex flex-center flex-column py-9 px-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-65px symbol-circle mb-5">
														<img src="{{ getFileVersion('/assets/admin/media//avatars/300-14.jpg') }}" alt="image" />
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Robert Doe</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="fw-semibold text-gray-500 mb-6">Marketing Analytic at Avito Ltd.</div>
													<!--end::Position-->
													<!--begin::Info-->
													<div class="d-flex flex-center flex-wrap mb-5">
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$14,560</div>
															<div class="fw-semibold text-gray-500">Earnings</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$236,400</div>
															<div class="fw-semibold text-gray-500">Sales</div>
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
													<!--begin::Follow-->
													<button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
														<i class="ki-outline ki-plus follow fs-3"></i>
														<i class="ki-outline ki-check following fs-3 d-none"></i>
														<!--begin::Indicator label-->
														<span class="indicator-label">Follow</span>
														<!--end::Indicator label-->
														<!--begin::Indicator progress-->
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														<!--end::Indicator progress-->
													</button>
													<!--end::Follow-->
												</div>
												<!--begin::Card body-->
											</div>
											<!--begin::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xxl-4">
											<!--begin::Card-->
											<div class="card">
												<!--begin::Card body-->
												<div class="card-body d-flex flex-center flex-column py-9 px-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-65px symbol-circle mb-5">
														<img src="{{ getFileVersion('/assets/admin/media//avatars/300-12.jpg') }}" alt="image" />
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Soul Jacob</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
													<!--end::Position-->
													<!--begin::Info-->
													<div class="d-flex flex-center flex-wrap mb-5">
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$14,560</div>
															<div class="fw-semibold text-gray-500">Earnings</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$236,400</div>
															<div class="fw-semibold text-gray-500">Sales</div>
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
													<!--begin::Follow-->
													<button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
														<i class="ki-outline ki-plus follow fs-3"></i>
														<i class="ki-outline ki-check following fs-3 d-none"></i>
														<!--begin::Indicator label-->
														<span class="indicator-label">Follow</span>
														<!--end::Indicator label-->
														<!--begin::Indicator progress-->
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														<!--end::Indicator progress-->
													</button>
													<!--end::Follow-->
												</div>
												<!--begin::Card body-->
											</div>
											<!--begin::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xxl-4">
											<!--begin::Card-->
											<div class="card">
												<!--begin::Card body-->
												<div class="card-body d-flex flex-center flex-column py-9 px-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-65px symbol-circle mb-5">
														<img src="{{ getFileVersion('/assets/admin/media//avatars/300-7.jpg') }}" alt="image" />
														<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Nina Strong</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="fw-semibold text-gray-500 mb-6">CTO at Kilp Ltd.</div>
													<!--end::Position-->
													<!--begin::Info-->
													<div class="d-flex flex-center flex-wrap mb-5">
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$14,560</div>
															<div class="fw-semibold text-gray-500">Earnings</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$236,400</div>
															<div class="fw-semibold text-gray-500">Sales</div>
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
													<!--begin::Follow-->
													<button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
														<i class="ki-outline ki-check following fs-3"></i>
														<i class="ki-outline ki-plus follow fs-3 d-none"></i>
														<!--begin::Indicator label-->
														<span class="indicator-label">Following</span>
														<!--end::Indicator label-->
														<!--begin::Indicator progress-->
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														<!--end::Indicator progress-->
													</button>
													<!--end::Follow-->
												</div>
												<!--begin::Card body-->
											</div>
											<!--begin::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xxl-4">
											<!--begin::Card-->
											<div class="card">
												<!--begin::Card body-->
												<div class="card-body d-flex flex-center flex-column py-9 px-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-65px symbol-circle mb-5">
														<img src="{{ getFileVersion('/assets/admin/media//avatars/300-11.jpg') }}" alt="image" />
														<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric Watson</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
													<!--end::Position-->
													<!--begin::Info-->
													<div class="d-flex flex-center flex-wrap mb-5">
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$14,560</div>
															<div class="fw-semibold text-gray-500">Earnings</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$236,400</div>
															<div class="fw-semibold text-gray-500">Sales</div>
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
													<!--begin::Follow-->
													<button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
														<i class="ki-outline ki-check following fs-3"></i>
														<i class="ki-outline ki-plus follow fs-3 d-none"></i>
														<!--begin::Indicator label-->
														<span class="indicator-label">Following</span>
														<!--end::Indicator label-->
														<!--begin::Indicator progress-->
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														<!--end::Indicator progress-->
													</button>
													<!--end::Follow-->
												</div>
												<!--begin::Card body-->
											</div>
											<!--begin::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xxl-4">
											<!--begin::Card-->
											<div class="card">
												<!--begin::Card body-->
												<div class="card-body d-flex flex-center flex-column py-9 px-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-65px symbol-circle mb-5">
														<img src="{{ getFileVersion('/assets/admin/media//avatars/300-6.jpg') }}" alt="image" />
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Olivia Larson</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="fw-semibold text-gray-500 mb-6">Art Director at Seal Inc.</div>
													<!--end::Position-->
													<!--begin::Info-->
													<div class="d-flex flex-center flex-wrap mb-5">
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$14,560</div>
															<div class="fw-semibold text-gray-500">Earnings</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$236,400</div>
															<div class="fw-semibold text-gray-500">Sales</div>
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
													<!--begin::Follow-->
													<button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
														<i class="ki-outline ki-plus follow fs-3"></i>
														<i class="ki-outline ki-check following fs-3 d-none"></i>
														<!--begin::Indicator label-->
														<span class="indicator-label">Follow</span>
														<!--end::Indicator label-->
														<!--begin::Indicator progress-->
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														<!--end::Indicator progress-->
													</button>
													<!--end::Follow-->
												</div>
												<!--begin::Card body-->
											</div>
											<!--begin::Card-->
										</div>
										<!--end::Col-->
										<!--end::Followers-->
									</div>
									<!--end::Row-->
									<!--begin::Row(for show more)-->
									<div class="row g-6 mb-6 g-xl-9 mb-xl-9 d-none" id="kt_followers_show_more_cards">
										<!--begin::Followers-->
										<!--begin::Col-->
										<div class="col-md-6 col-xxl-4">
											<!--begin::Card-->
											<div class="card">
												<!--begin::Card body-->
												<div class="card-body d-flex flex-center flex-column py-9 px-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-65px symbol-circle mb-5">
														<img src="{{ getFileVersion('/assets/admin/media//avatars/300-11.jpg') }}" alt="image" />
														<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric Watson</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
													<!--end::Position-->
													<!--begin::Info-->
													<div class="d-flex flex-center flex-wrap mb-5">
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$14,560</div>
															<div class="fw-semibold text-gray-500">Earnings</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$236,400</div>
															<div class="fw-semibold text-gray-500">Sales</div>
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
													<!--begin::Follow-->
													<button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
														<i class="ki-outline ki-check following fs-3"></i>
														<i class="ki-outline ki-plus follow fs-3 d-none"></i>
														<!--begin::Indicator label-->
														<span class="indicator-label">Following</span>
														<!--end::Indicator label-->
														<!--begin::Indicator progress-->
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														<!--end::Indicator progress-->
													</button>
													<!--end::Follow-->
												</div>
												<!--begin::Card body-->
											</div>
											<!--begin::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xxl-4">
											<!--begin::Card-->
											<div class="card">
												<!--begin::Card body-->
												<div class="card-body d-flex flex-center flex-column py-9 px-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-65px symbol-circle mb-5">
														<img src="{{ getFileVersion('/assets/admin/media//avatars/300-6.jpg') }}" alt="image" />
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Olivia Larson</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="fw-semibold text-gray-500 mb-6">Art Director at Seal Inc.</div>
													<!--end::Position-->
													<!--begin::Info-->
													<div class="d-flex flex-center flex-wrap mb-5">
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$14,560</div>
															<div class="fw-semibold text-gray-500">Earnings</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$236,400</div>
															<div class="fw-semibold text-gray-500">Sales</div>
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
													<!--begin::Follow-->
													<button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
														<i class="ki-outline ki-plus follow fs-3"></i>
														<i class="ki-outline ki-check following fs-3 d-none"></i>
														<!--begin::Indicator label-->
														<span class="indicator-label">Follow</span>
														<!--end::Indicator label-->
														<!--begin::Indicator progress-->
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														<!--end::Indicator progress-->
													</button>
													<!--end::Follow-->
												</div>
												<!--begin::Card body-->
											</div>
											<!--begin::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xxl-4">
											<!--begin::Card-->
											<div class="card">
												<!--begin::Card body-->
												<div class="card-body d-flex flex-center flex-column py-9 px-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-65px symbol-circle mb-5">
														<span class="symbol-label fs-2x fw-semibold text-warning bg-light-warning">A</span>
														<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Adam Williams</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="fw-semibold text-gray-500 mb-6">System Arcitect at Wolto Co.</div>
													<!--end::Position-->
													<!--begin::Info-->
													<div class="d-flex flex-center flex-wrap mb-5">
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$14,560</div>
															<div class="fw-semibold text-gray-500">Earnings</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$236,400</div>
															<div class="fw-semibold text-gray-500">Sales</div>
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
													<!--begin::Follow-->
													<button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
														<i class="ki-outline ki-check following fs-3"></i>
														<i class="ki-outline ki-plus follow fs-3 d-none"></i>
														<!--begin::Indicator label-->
														<span class="indicator-label">Following</span>
														<!--end::Indicator label-->
														<!--begin::Indicator progress-->
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														<!--end::Indicator progress-->
													</button>
													<!--end::Follow-->
												</div>
												<!--begin::Card body-->
											</div>
											<!--begin::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xxl-4">
											<!--begin::Card-->
											<div class="card">
												<!--begin::Card body-->
												<div class="card-body d-flex flex-center flex-column py-9 px-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-65px symbol-circle mb-5">
														<span class="symbol-label fs-2x fw-semibold text-info bg-light-info">P</span>
														<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Paul Marcus</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
													<!--end::Position-->
													<!--begin::Info-->
													<div class="d-flex flex-center flex-wrap mb-5">
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$14,560</div>
															<div class="fw-semibold text-gray-500">Earnings</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$236,400</div>
															<div class="fw-semibold text-gray-500">Sales</div>
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
													<!--begin::Follow-->
													<button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
														<i class="ki-outline ki-check following fs-3"></i>
														<i class="ki-outline ki-plus follow fs-3 d-none"></i>
														<!--begin::Indicator label-->
														<span class="indicator-label">Following</span>
														<!--end::Indicator label-->
														<!--begin::Indicator progress-->
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														<!--end::Indicator progress-->
													</button>
													<!--end::Follow-->
												</div>
												<!--begin::Card body-->
											</div>
											<!--begin::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xxl-4">
											<!--begin::Card-->
											<div class="card">
												<!--begin::Card body-->
												<div class="card-body d-flex flex-center flex-column py-9 px-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-65px symbol-circle mb-5">
														<span class="symbol-label fs-2x fw-semibold text-success bg-light-success">N</span>
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Neil Owen</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="fw-semibold text-gray-500 mb-6">Accountant at Numbers Co.</div>
													<!--end::Position-->
													<!--begin::Info-->
													<div class="d-flex flex-center flex-wrap mb-5">
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$14,560</div>
															<div class="fw-semibold text-gray-500">Earnings</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$236,400</div>
															<div class="fw-semibold text-gray-500">Sales</div>
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
													<!--begin::Follow-->
													<button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
														<i class="ki-outline ki-plus follow fs-3"></i>
														<i class="ki-outline ki-check following fs-3 d-none"></i>
														<!--begin::Indicator label-->
														<span class="indicator-label">Follow</span>
														<!--end::Indicator label-->
														<!--begin::Indicator progress-->
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														<!--end::Indicator progress-->
													</button>
													<!--end::Follow-->
												</div>
												<!--begin::Card body-->
											</div>
											<!--begin::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xxl-4">
											<!--begin::Card-->
											<div class="card">
												<!--begin::Card body-->
												<div class="card-body d-flex flex-center flex-column py-9 px-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-65px symbol-circle mb-5">
														<span class="symbol-label fs-2x fw-semibold text-primary bg-light-primary">S</span>
														<div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Sean Paul</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="fw-semibold text-gray-500 mb-6">Developer at Loop Inc</div>
													<!--end::Position-->
													<!--begin::Info-->
													<div class="d-flex flex-center flex-wrap mb-5">
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$14,560</div>
															<div class="fw-semibold text-gray-500">Earnings</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
															<div class="fs-6 fw-bold text-gray-700">$236,400</div>
															<div class="fw-semibold text-gray-500">Sales</div>
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
													<!--begin::Follow-->
													<button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
														<i class="ki-outline ki-plus follow fs-3"></i>
														<i class="ki-outline ki-check following fs-3 d-none"></i>
														<!--begin::Indicator label-->
														<span class="indicator-label">Follow</span>
														<!--end::Indicator label-->
														<!--begin::Indicator progress-->
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														<!--end::Indicator progress-->
													</button>
													<!--end::Follow-->
												</div>
												<!--begin::Card body-->
											</div>
											<!--begin::Card-->
										</div>
										<!--end::Col-->
										<!--end::Followers-->
									</div>
									<!--end::Row-->
									<!--begin::Show more-->
									<div class="d-flex flex-center">
										<button class="btn btn-primary" id="kt_followers_show_more_button">
											<!--begin::Indicator label-->
											<span class="indicator-label">Show more</span>
											<!--end::Indicator label-->
											<!--begin::Indicator progress-->
											<span class="indicator-progress">Please wait... 
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											<!--end::Indicator progress-->
										</button>
									</div>
									<!--end::Show more-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
@endsection

@push('js')

@endpush