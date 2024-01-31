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
					<h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Overview</h1>
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
			<div class="card mb-5 mb-xxl-8">
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
			<!--begin::Row-->
			<div class="row g-5 g-xxl-8">
				<!--begin::Col-->
				<div class="col-xl-6">
					<!--begin::Feeds Widget 1-->
					<div class="card mb-5 mb-xxl-8">
						<!--begin::Body-->
						<div class="card-body pb-0">
							<!--begin::Header-->
							<div class="d-flex align-items-center">
								<!--begin::User-->
								<div class="d-flex align-items-center flex-grow-1">
									<!--begin::Avatar-->
									<div class="symbol symbol-45px me-5">
										<img src="{{ getFileVersion('/assets/admin/media/avatars/300-6.jpg') }}" alt="" />
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="d-flex flex-column">
										<a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Grace Green</a>
										<span class="text-gray-500 fw-bold">PHP, SQLite, Artisan CLI</span>
									</div>
									<!--end::Info-->
								</div>
								<!--end::User-->
								<!--begin::Menu-->
								<div class="my-0">
									<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<i class="ki-outline ki-category fs-6"></i>
									</button>
									<!--begin::Menu 2-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
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
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Header-->
							<!--begin::Form-->
							<form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
								<!--begin::Editor-->
								<div id="kt_forms_widget_1_editor" class="py-6"></div>
								<!--end::Editor-->
								<div class="separator"></div>
								<!--begin::Toolbar-->
								<div id="kt_forms_widget_1_editor_toolbar" class="ql-toolbar d-flex flex-stack py-2">
									<div class="me-2">
										<span class="ql-formats ql-size ms-0">
											<select class="ql-size w-75px"></select>
										</span>
										<span class="ql-formats">
											<button class="ql-bold"></button>
											<button class="ql-italic"></button>
											<button class="ql-underline"></button>
											<button class="ql-strike"></button>
											<button class="ql-image"></button>
											<button class="ql-link"></button>
											<button class="ql-clean"></button>
										</span>
									</div>
									<div class="me-n3">
										<span class="btn btn-icon btn-sm btn-active-color-primary">
											<i class="ki-outline ki-paper-clip fs-2"></i>
										</span>
										<span class="btn btn-icon btn-sm btn-active-color-primary">
											<i class="ki-outline ki-geolocation fs-2"></i>
										</span>
									</div>
								</div>
								<!--end::Toolbar-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Feeds Widget 1-->
					<!--begin::Feeds Widget 2-->
					<div class="card mb-5 mb-xxl-8">
						<!--begin::Body-->
						<div class="card-body pb-0">
							<!--begin::Header-->
							<div class="d-flex align-items-center mb-5">
								<!--begin::User-->
								<div class="d-flex align-items-center flex-grow-1">
									<!--begin::Avatar-->
									<div class="symbol symbol-45px me-5">
										<img src="{{ getFileVersion('/assets/admin/media/avatars/300-23.jpg') }}" alt="" />
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="d-flex flex-column">
										<a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Nick Logan</a>
										<span class="text-gray-500 fw-bold">PHP, SQLite, Artisan CLI</span>
									</div>
									<!--end::Info-->
								</div>
								<!--end::User-->
								<!--begin::Menu-->
								<div class="my-0">
									<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<i class="ki-outline ki-category fs-6"></i>
									</button>
									<!--begin::Menu 2-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
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
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Header-->
							<!--begin::Post-->
							<div class="mb-5">
								<!--begin::Text-->
								<p class="text-gray-800 fw-normal mb-5">Outlines keep you honest. They stop you from indulging in poorly thought-out metaphors about driving and keep you focused on the overall structure of your post</p>
								<!--end::Text-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center mb-5">
									<a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
										<i class="ki-outline ki-message-text-2 fs-2"></i>120</a>
									<a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
										<i class="ki-outline ki-heart fs-2"></i>15</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Post-->
							<!--begin::Separator-->
							<div class="separator mb-4"></div>
							<!--end::Separator-->
							<!--begin::Reply input-->
							<form class="position-relative mb-6">
								<textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>
								<div class="position-absolute top-0 end-0 me-n5">
									<span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
										<i class="ki-outline ki-paper-clip fs-2 mb-3"></i>
									</span>
									<span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
										<i class="ki-outline ki-geolocation fs-2 mb-3"></i>
									</span>
								</div>
							</form>
							<!--edit::Reply input-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Feeds Widget 2-->
					<!--begin::Feeds Widget 3-->
					<div class="card mb-5 mb-xxl-8">
						<!--begin::Body-->
						<div class="card-body pb-0">
							<!--begin::Header-->
							<div class="d-flex align-items-center mb-3">
								<!--begin::User-->
								<div class="d-flex align-items-center flex-grow-1">
									<!--begin::Avatar-->
									<div class="symbol symbol-45px me-5">
										<img src="{{ getFileVersion('/assets/admin/media/avatars/300-21.jpg') }}" alt="" />
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="d-flex flex-column">
										<a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Carles Nilson</a>
										<span class="text-gray-500 fw-bold">Yestarday at 5:06 PM</span>
									</div>
									<!--end::Info-->
								</div>
								<!--end::User-->
								<!--begin::Menu-->
								<div class="my-0">
									<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<i class="ki-outline ki-category fs-6"></i>
									</button>
									<!--begin::Menu 2-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
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
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Header-->
							<!--begin::Post-->
							<div class="mb-7">
								<!--begin::Text-->
								<div class="text-gray-800 mb-5">Outlines keep you honest. They stop you from indulging in poorly thought-out metaphors about driving and keep you focused on the overall structure of your post</div>
								<!--end::Text-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center mb-5">
									<a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
										<i class="ki-outline ki-message-text-2 fs-2"></i>12</a>
									<a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
										<i class="ki-outline ki-heart fs-2"></i>150</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Post-->
							<!--begin::Replies-->
							<div class="mb-7">
								<!--begin::Reply-->
								<div class="d-flex mb-5">
									<!--begin::Avatar-->
									<div class="symbol symbol-45px me-5">
										<img src="{{ getFileVersion('/assets/admin/media/avatars/300-14.jpg') }}" alt="" />
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="d-flex flex-column flex-row-fluid">
										<!--begin::Info-->
										<div class="d-flex align-items-center flex-wrap mb-1">
											<a href="#" class="text-gray-800 text-hover-primary fw-bold me-2">Alice Danchik</a>
											<span class="text-gray-500 fw-semibold fs-7">1 day</span>
											<a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
										</div>
										<!--end::Info-->
										<!--begin::Post-->
										<span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen to paper you need to make sure you have to sit down and write.</span>
										<!--end::Post-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Reply-->
								<!--begin::Reply-->
								<div class="d-flex">
									<!--begin::Avatar-->
									<div class="symbol symbol-45px me-5">
										<img src="{{ getFileVersion('/assets/admin/media/avatars/300-9.jpg') }}" alt="" />
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="d-flex flex-column flex-row-fluid">
										<!--begin::Info-->
										<div class="d-flex align-items-center flex-wrap mb-1">
											<a href="#" class="text-gray-800 text-hover-primary fw-bold me-2">Harris Bold</a>
											<span class="text-gray-500 fw-semibold fs-7">2 days</span>
											<a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
										</div>
										<!--end::Info-->
										<!--begin::Post-->
										<span class="text-gray-800 fs-7 fw-normal pt-1">Outlines keep you honest. They stop you from indulging in poorly</span>
										<!--end::Post-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Reply-->
							</div>
							<!--end::Replies-->
							<!--begin::Separator-->
							<div class="separator mb-4"></div>
							<!--end::Separator-->
							<!--begin::Reply input-->
							<form class="position-relative mb-6">
								<textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>
								<div class="position-absolute top-0 end-0 me-n5">
									<span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
										<i class="ki-outline ki-paper-clip fs-2 mb-3"></i>
									</span>
									<span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
										<i class="ki-outline ki-geolocation fs-2 mb-3"></i>
									</span>
								</div>
							</form>
							<!--edit::Reply input-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Feeds Widget 3-->
					<!--begin::Feeds Widget 4-->
					<div class="card mb-5 mb-xxl-8">
						<!--begin::Body-->
						<div class="card-body pb-0">
							<!--begin::Header-->
							<div class="d-flex align-items-center mb-5">
								<!--begin::User-->
								<div class="d-flex align-items-center flex-grow-1">
									<!--begin::Avatar-->
									<div class="symbol symbol-45px me-5">
										<img src="{{ getFileVersion('/assets/admin/media/avatars/300-7.jpg') }}" alt="" />
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="d-flex flex-column">
										<a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Carles Nilson</a>
										<span class="text-gray-500 fw-bold">Last week at 10:00 PM</span>
									</div>
									<!--end::Info-->
								</div>
								<!--end::User-->
								<!--begin::Menu-->
								<div class="my-0">
									<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<i class="ki-outline ki-category fs-6"></i>
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
							<!--end::Header-->
							<!--begin::Post-->
							<div class="mb-7">
								<!--begin::Text-->
								<div class="text-gray-800 mb-5">Outlines keep you honest. They stop you from indulging in poorly thought-out metaphors about driving and keep you focused on the overall structure of your post</div>
								<!--end::Text-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center mb-5">
									<a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
										<i class="ki-outline ki-message-text-2 fs-2"></i>22</a>
									<a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
										<i class="ki-outline ki-heart fs-2"></i>59</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Post-->
							<!--begin::Separator-->
							<div class="separator mb-4"></div>
							<!--end::Separator-->
							<!--begin::Reply input-->
							<form class="position-relative mb-6">
								<textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>
								<div class="position-absolute top-0 end-0 me-n5">
									<span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
										<i class="ki-outline ki-paper-clip fs-2 mb-3"></i>
									</span>
									<span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
										<i class="ki-outline ki-geolocation fs-2 mb-3"></i>
									</span>
								</div>
							</form>
							<!--edit::Reply input-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Feeds Widget 4-->
					<!--begin::Feeds widget 5-->
					<div class="card d-none" id="kt_widget_5">
						<!--begin::Body-->
						<div class="card-body pb-0">
							<!--begin::Header-->
							<div class="d-flex align-items-center mb-5">
								<!--begin::User-->
								<div class="d-flex align-items-center flex-grow-1">
									<!--begin::Avatar-->
									<div class="symbol symbol-45px me-5">
										<img src="{{ getFileVersion('/assets/admin/media/avatars/300-7.jpg') }}" alt="" />
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="d-flex flex-column">
										<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Carles Nilson</a>
										<span class="text-gray-500 fw-bold">Last week at 10:00 PM</span>
									</div>
									<!--end::Info-->
								</div>
								<!--end::User-->
								<!--begin::Menu-->
								<div class="my-0">
									<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<i class="ki-outline ki-category fs-6"></i>
									</button>
									<!--begin::Menu 2-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
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
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Header-->
							<!--begin::Post-->
							<div class="mb-7">
								<!--begin::Image-->
								<div class="bgi-no-repeat bgi-size-cover rounded min-h-250px mb-5" style="background-image:url('{{ getFileVersion('/assets/admin/media/stock/900x600/19.jpg') }}');"></div>
								<!--end::Image-->
								<!--begin::Text-->
								<div class="text-gray-800 mb-5">Outlines keep you honest. They stop you from indulging in poorly thought-out metaphors about driving and keep you focused on the overall structure of your post</div>
								<!--end::Text-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center mb-5">
									<a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
										<i class="ki-outline ki-message-text-2 fs-2"></i>20</a>
									<a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
										<i class="ki-outline ki-heart fs-2"></i>50</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Post-->
							<!--begin::Separator-->
							<div class="separator mb-4"></div>
							<!--end::Separator-->
							<!--begin::Reply input-->
							<form class="position-relative mb-6">
								<textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>
								<div class="position-absolute top-0 end-0 me-n5">
									<span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
										<i class="ki-outline ki-paper-clip fs-2 mb-3"></i>
									</span>
									<span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
										<i class="ki-outline ki-geolocation fs-2 mb-3"></i>
									</span>
								</div>
							</form>
							<!--edit::Reply input-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Feeds widget 5-->
					<!--begin::Feeds widget 4, 5 load more-->
					<button class="btn btn-primary w-100 text-center" id="kt_widget_5_load_more_btn">
						<span class="indicator-label">More Feeds</span>
						<span class="indicator-progress">Loading...
							<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
					</button>
					<!--end::Feeds widget 4, 5 load more-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-xl-6">
					<!--begin::Charts Widget 1-->
					<div class="card mb-5 mb-xxl-8">
						<!--begin::Header-->
						<div class="card-header border-0 pt-5">
							<!--begin::Title-->
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bold fs-3 mb-1">Recent Statistics</span>
								<span class="text-muted fw-semibold fs-7">More than 400 new members</span>
							</h3>
							<!--end::Title-->
							<!--begin::Toolbar-->
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<i class="ki-outline ki-category fs-6"></i>
								</button>
								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_65a11656e5fa0">
									<!--begin::Header-->
									<div class="px-7 py-5">
										<div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
									</div>
									<!--end::Header-->
									<!--begin::Menu separator-->
									<div class="separator border-gray-200"></div>
									<!--end::Menu separator-->
									<!--begin::Form-->
									<div class="px-7 py-5">
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-semibold">Status:</label>
											<!--end::Label-->
											<!--begin::Input-->
											<div>
												<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_65a11656e5fa0" data-allow-clear="true">
													<option></option>
													<option value="1">Approved</option>
													<option value="2">Pending</option>
													<option value="2">In Process</option>
													<option value="2">Rejected</option>
												</select>
											</div>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-semibold">Member Type:</label>
											<!--end::Label-->
											<!--begin::Options-->
											<div class="d-flex">
												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" value="1" />
													<span class="form-check-label">Author</span>
												</label>
												<!--end::Options-->
												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="2" checked="checked" />
													<span class="form-check-label">Customer</span>
												</label>
												<!--end::Options-->
											</div>
											<!--end::Options-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-semibold">Notifications:</label>
											<!--end::Label-->
											<!--begin::Switch-->
											<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
												<label class="form-check-label">Enabled</label>
											</div>
											<!--end::Switch-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
											<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Form-->
								</div>
								<!--end::Menu 1-->
								<!--end::Menu-->
							</div>
							<!--end::Toolbar-->
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body">
							<!--begin::Chart-->
							<div id="kt_charts_widget_1_chart" style="height: 350px"></div>
							<!--end::Chart-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Charts Widget 1-->
					<!--begin::List Widget 5-->
					<div class="card mb-5 mb-xxl-8">
						<!--begin::Header-->
						<div class="card-header align-items-center border-0 mt-4">
							<h3 class="card-title align-items-start flex-column">
								<span class="fw-bold mb-2 text-gray-900">Activities</span>
								<span class="text-muted fw-semibold fs-7">890,344 Sales</span>
							</h3>
							<div class="card-toolbar">
								<!--begin::Menu-->
								<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<i class="ki-outline ki-category fs-6"></i>
								</button>
								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_65a11656e5feb">
									<!--begin::Header-->
									<div class="px-7 py-5">
										<div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
									</div>
									<!--end::Header-->
									<!--begin::Menu separator-->
									<div class="separator border-gray-200"></div>
									<!--end::Menu separator-->
									<!--begin::Form-->
									<div class="px-7 py-5">
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-semibold">Status:</label>
											<!--end::Label-->
											<!--begin::Input-->
											<div>
												<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_65a11656e5feb" data-allow-clear="true">
													<option></option>
													<option value="1">Approved</option>
													<option value="2">Pending</option>
													<option value="2">In Process</option>
													<option value="2">Rejected</option>
												</select>
											</div>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-semibold">Member Type:</label>
											<!--end::Label-->
											<!--begin::Options-->
											<div class="d-flex">
												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" value="1" />
													<span class="form-check-label">Author</span>
												</label>
												<!--end::Options-->
												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="2" checked="checked" />
													<span class="form-check-label">Customer</span>
												</label>
												<!--end::Options-->
											</div>
											<!--end::Options-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-semibold">Notifications:</label>
											<!--end::Label-->
											<!--begin::Switch-->
											<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
												<label class="form-check-label">Enabled</label>
											</div>
											<!--end::Switch-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
											<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Form-->
								</div>
								<!--end::Menu 1-->
								<!--end::Menu-->
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-5">
							<!--begin::Timeline-->
							<div class="timeline-label">
								<!--begin::Item-->
								<div class="timeline-item">
									<!--begin::Label-->
									<div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-warning fs-1"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Text-->
									<div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest. And keep structure</div>
									<!--end::Text-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item">
									<!--begin::Label-->
									<div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-success fs-1"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Content-->
									<div class="timeline-content d-flex">
										<span class="fw-bold text-gray-800 ps-3">AEOL meeting</span>
									</div>
									<!--end::Content-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item">
									<!--begin::Label-->
									<div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-danger fs-1"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Desc-->
									<div class="timeline-content fw-bold text-gray-800 ps-3">Make deposit
										<a href="#" class="text-primary">USD 700</a>. to ESL
									</div>
									<!--end::Desc-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item">
									<!--begin::Label-->
									<div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-primary fs-1"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Text-->
									<div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
									<!--end::Text-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item">
									<!--begin::Label-->
									<div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-danger fs-1"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Desc-->
									<div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
										<a href="#" class="text-primary">#XF-2356</a>.
									</div>
									<!--end::Desc-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item">
									<!--begin::Label-->
									<div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-primary fs-1"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Text-->
									<div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
									<!--end::Text-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item">
									<!--begin::Label-->
									<div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-danger fs-1"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Desc-->
									<div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
										<a href="#" class="text-primary">#XF-2356</a>.
									</div>
									<!--end::Desc-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item">
									<!--begin::Label-->
									<div class="timeline-label fw-bold text-gray-800 fs-6">10:30</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-success fs-1"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Text-->
									<div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app launch preparion meeting</div>
									<!--end::Text-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Timeline-->
						</div>
						<!--end: Card Body-->
					</div>
					<!--end: List Widget 5-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>
@endsection

@push('js')

@endpush