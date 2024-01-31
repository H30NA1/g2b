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
					<h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0"></h1>
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
						<li class="breadcrumb-item text-muted">Pricing</li>
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
			<!--begin::Pricing card-->
			<div class="card" id="kt_pricing">
				<!--begin::Card body-->
				<div class="card-body p-lg-17">
					<!--begin::Plans-->
					<div class="d-flex flex-column">
						<!--begin::Heading-->
						<div class="mb-13 text-center">
							<h1 class="fs-2hx fw-bold mb-5">Choose Your Plan</h1>
							<div class="text-gray-600 fw-semibold fs-5">If you need more info about our pricing, please check
								<a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
							</div>
						</div>
						<!--end::Heading-->
						<!--begin::Nav group-->
						<div class="nav-group nav-group-outline mx-auto mb-15" data-kt-buttons="true">
							<button class="btn btn-color-gray-600 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
							<button class="btn btn-color-gray-600 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
						</div>
						<!--end::Nav group-->
						<!--begin::Row-->
						<div class="row g-10">
							<!--begin::Col-->
							<div class="col-xl-4">
								<div class="d-flex h-100 align-items-center">
									<!--begin::Option-->
									<div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
										<!--begin::Heading-->
										<div class="mb-7 text-center">
											<!--begin::Title-->
											<h1 class="text-gray-900 mb-5 fw-bolder">Startup</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-gray-600 fw-semibold mb-5">Optimal for 10+ team size
												<br />and new startup
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="text-center">
												<span class="mb-2 text-primary">$</span>
												<span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
												<span class="fs-7 fw-semibold opacity-50">/
													<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</div>
										<!--end::Heading-->
										<!--begin::Features-->
										<div class="w-100 mb-10">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Up to 10 Active Users</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Up to 30 Project Integrations</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Analytics Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<span class="fw-semibold fs-6 text-gray-600 flex-grow-1">Finance Module</span>
												<i class="ki-outline ki-cross-circle fs-1"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<span class="fw-semibold fs-6 text-gray-600 flex-grow-1">Accounting Module</span>
												<i class="ki-outline ki-cross-circle fs-1"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<span class="fw-semibold fs-6 text-gray-600 flex-grow-1">Network Platform</span>
												<i class="ki-outline ki-cross-circle fs-1"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-semibold fs-6 text-gray-600 flex-grow-1">Unlimited Cloud Space</span>
												<i class="ki-outline ki-cross-circle fs-1"></i>
											</div>
											<!--end::Item-->
										</div>
										<!--end::Features-->
										<!--begin::Select-->
										<a href="#" class="btn btn-sm btn-primary">Select</a>
										<!--end::Select-->
									</div>
									<!--end::Option-->
								</div>
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-xl-4">
								<div class="d-flex h-100 align-items-center">
									<!--begin::Option-->
									<div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-20 px-10">
										<!--begin::Heading-->
										<div class="mb-7 text-center">
											<!--begin::Title-->
											<h1 class="text-gray-900 mb-5 fw-bolder">Advanced</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-gray-600 fw-semibold mb-5">Optimal for 100+ team siz
												<br />e and grown company
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="text-center">
												<span class="mb-2 text-primary">$</span>
												<span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
												<span class="fs-7 fw-semibold opacity-50">/
													<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</div>
										<!--end::Heading-->
										<!--begin::Features-->
										<div class="w-100 mb-10">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Up to 10 Active Users</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Up to 30 Project Integrations</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Analytics Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Finance Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Accounting Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<span class="fw-semibold fs-6 text-gray-600 flex-grow-1">Network Platform</span>
												<i class="ki-outline ki-cross-circle fs-1"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-semibold fs-6 text-gray-600 flex-grow-1">Unlimited Cloud Space</span>
												<i class="ki-outline ki-cross-circle fs-1"></i>
											</div>
											<!--end::Item-->
										</div>
										<!--end::Features-->
										<!--begin::Select-->
										<a href="#" class="btn btn-sm btn-primary">Select</a>
										<!--end::Select-->
									</div>
									<!--end::Option-->
								</div>
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-xl-4">
								<div class="d-flex h-100 align-items-center">
									<!--begin::Option-->
									<div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
										<!--begin::Heading-->
										<div class="mb-7 text-center">
											<!--begin::Title-->
											<h1 class="text-gray-900 mb-5 fw-bolder">Enterprise</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-gray-600 fw-semibold mb-5">Optimal for 1000+ team
												<br />and enterpise
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="text-center">
												<span class="mb-2 text-primary">$</span>
												<span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
												<span class="fs-7 fw-semibold opacity-50">/
													<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</div>
										<!--end::Heading-->
										<!--begin::Features-->
										<div class="w-100 mb-10">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Up to 10 Active Users</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Up to 30 Project Integrations</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Analytics Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Finance Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Accounting Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-5">
												<span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Network Platform</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Unlimited Cloud Space</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
										</div>
										<!--end::Features-->
										<!--begin::Select-->
										<a href="#" class="btn btn-sm btn-primary">Select</a>
										<!--end::Select-->
									</div>
									<!--end::Option-->
								</div>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Plans-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Pricing card-->
		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>
@endsection

@push('js')

@endpush