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
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">API Keys</h1>
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
                        <li class="breadcrumb-item text-muted">Account</li>
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
            <div class="card mb-5 mb-xl-10">
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
                                            <i class="ki-outline ki-sms fs-4"></i>max@kt.com</a>
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
                    @include('admin.includes.nav')
                    <!--begin::Navs-->
                </div>
            </div>
            <!--end::Navbar-->
            <!--begin::API Overview-->
            <div class="card mb-5 mb-xxl-10">
                <!--begin::Header-->
                <div class="card-header">
                    <!--begin::Title-->
                    <div class="card-title">
                        <h3>API Overview</h3>
                    </div>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" checked="checked" value="1" />
                            <span class="form-check-label text-muted">Test mode</span>
                        </label>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-10">
                    <!--begin::Row-->
                    <div class="row mb-10">
                        <!--begin::Col-->
                        <div class="col-md-6 pb-10 pb-lg-0">
                            <h2>How to set API</h2>
                            <p class="fs-6 fw-semibold text-gray-600 py-2">Use images to enhance your post, improve its flow, add humor
                                <br />and explain complex topics
                            </p>
                            <a href="#" class="btn btn-light btn-active-light-primary">Get Started</a>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                            <h2>Developer Tools</h2>
                            <p class="fs-6 fw-semibold text-gray-600 py-2">Plan your blog post by choosing a topic, creating an outline conduct
                                <br />research, and checking facts
                            </p>
                            <a href="#" class="btn btn-light btn-active-light-primary">Create Rule</a>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Notice-->
                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                        <!--begin::Icon-->
                        <i class="ki-outline ki-design-1 fs-2tx text-primary me-4"></i>
                        <!--end::Icon-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1">
                            <!--begin::Content-->
                            <div class="fw-semibold">
                                <div class="fs-6 text-gray-700">Two-factor authentication adds an extra layer of security to your account. To log in, in you'll need to provide a 4 digit amazing and create outstanding products to serve your clients
                                    <a class="fw-bold" href="#">Learn More</a>.
                                </div>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                    <!--end::Notice-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::API overview-->
            <!--begin::Login sessions-->
            <div class="card mb-5 mb-xxl-10">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Heading-->
                    <div class="card-title">
                        <h3>Login Sessions</h3>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <div class="my-1 me-4">
                            <!--begin::Select-->
                            <select class="form-select form-select-sm form-select-solid w-125px" data-control="select2" data-placeholder="Select Hours" data-hide-search="true">
                                <option value="1" selected="selected">1 Hours</option>
                                <option value="2">6 Hours</option>
                                <option value="3">12 Hours</option>
                                <option value="4">24 Hours</option>
                            </select>
                            <!--end::Select-->
                        </div>
                        <a href="#" class="btn btn-sm btn-primary my-1">View All</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body p-0">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                            <!--begin::Thead-->
                            <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                                <tr>
                                    <th class="min-w-250px">Location</th>
                                    <th class="min-w-100px">Status</th>
                                    <th class="min-w-150px">Device</th>
                                    <th class="min-w-150px">IP Address</th>
                                    <th class="min-w-150px">Time</th>
                                </tr>
                            </thead>
                            <!--end::Thead-->
                            <!--begin::Tbody-->
                            <tbody class="fw-6 fw-semibold text-gray-600">
                                <tr>
                                    <td>
                                        <a href="#" class="text-hover-primary text-gray-600">USA(5)</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                                    </td>
                                    <td>Chrome - Windows</td>
                                    <td>236.125.56.78</td>
                                    <td>2 mins ago</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-hover-primary text-gray-600">United Kingdom(10)</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                                    </td>
                                    <td>Safari - Mac OS</td>
                                    <td>236.125.56.78</td>
                                    <td>10 mins ago</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-hover-primary text-gray-600">Norway(-)</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-danger fs-7 fw-bold">ERR</span>
                                    </td>
                                    <td>Firefox - Windows</td>
                                    <td>236.125.56.10</td>
                                    <td>20 mins ago</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-hover-primary text-gray-600">Japan(112)</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                                    </td>
                                    <td>iOS - iPhone Pro</td>
                                    <td>236.125.56.54</td>
                                    <td>30 mins ago</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-hover-primary text-gray-600">Italy(5)</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-warning fs-7 fw-bold">WRN</span>
                                    </td>
                                    <td>Samsung Noted 5- Android</td>
                                    <td>236.100.56.50</td>
                                    <td>40 mins ago</td>
                                </tr>
                            </tbody>
                            <!--end::Tbody-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Login sessions-->
            <!--begin::API keys-->
            <div class="card">
                <!--begin::Header-->
                <div class="card-header card-header-stretch">
                    <!--begin::Title-->
                    <div class="card-title">
                        <h3>API Keys</h3>
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body p-0">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9" id="kt_api_keys_table">
                            <!--begin::Thead-->
                            <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                                <tr>
                                    <th class="min-w-175px ps-9">Label</th>
                                    <th class="min-w-250px px-0">API Keys</th>
                                    <th class="min-w-100px">Created</th>
                                    <th class="min-w-100px">Status</th>
                                    <th class="w-100px"></th>
                                    <th class="w-100px"></th>
                                </tr>
                            </thead>
                            <!--end::Thead-->
                            <!--begin::Tbody-->
                            <tbody class="fs-6 fw-semibold text-gray-600">
                                <tr>
                                    <td class="ps-9">none set</td>
                                    <td data-bs-target="license" class="ps-0">fftt456765gjkkjhi83093985</td>
                                    <td>
                                        <button data-action="copy" class="btn btn-active-color-primary btn-color-gray-500 btn-icon btn-sm btn-outline-light">
                                            <i class="ki-outline ki-copy fs-2"></i>
                                        </button>
                                    </td>
                                    <td>Nov 01, 2020</td>
                                    <td>
                                        <span class="badge badge-light-success fs-7 fw-semibold">Active</span>
                                    </td>
                                    <td class="pe-9">
                                        <div class="w-100px position-relative">
                                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                                <option value=""></option>
                                                <option value="2">Options 1</option>
                                                <option value="3">Options 2</option>
                                                <option value="4">Options 3</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <button data-action="copy" class="btn btn-color-gray-500 btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                            <i class="ki-solid ki-copy fs-2"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Navitare</td>
                                    <td data-bs-target="license" class="ps-0">jk076590ygghgh324vd33</td>
                                    <td>
                                        <button data-action="copy" class="btn btn-active-color-primary btn-color-gray-500 btn-icon btn-sm btn-outline-light">
                                            <i class="ki-outline ki-copy fs-2"></i>
                                        </button>
                                    </td>
                                    <td>Sep 27, 2020</td>
                                    <td>
                                        <span class="badge badge-light-primary fs-7 fw-semibold">Review</span>
                                    </td>
                                    <td class="pe-9">
                                        <div class="w-100px position-relative">
                                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                                <option value=""></option>
                                                <option value="2">Options 1</option>
                                                <option value="3">Options 2</option>
                                                <option value="4">Options 3</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <button data-action="copy" class="btn btn-color-gray-500 btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                            <i class="ki-solid ki-copy fs-2"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Docs API Key</td>
                                    <td data-bs-target="license" class="ps-0">fftt456765gjkkjhi83093985</td>
                                    <td>
                                        <button data-action="copy" class="btn btn-active-color-primary btn-color-gray-500 btn-icon btn-sm btn-outline-light">
                                            <i class="ki-outline ki-copy fs-2"></i>
                                        </button>
                                    </td>
                                    <td>Jul 09, 2020</td>
                                    <td>
                                        <span class="badge badge-light-danger fs-7 fw-semibold">Inactive</span>
                                    </td>
                                    <td class="pe-9">
                                        <div class="w-100px position-relative">
                                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                                <option value=""></option>
                                                <option value="2">Options 1</option>
                                                <option value="3">Options 2</option>
                                                <option value="4">Options 3</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <button data-action="copy" class="btn btn-color-gray-500 btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                            <i class="ki-solid ki-copy fs-2"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Identity Key</td>
                                    <td data-bs-target="license" class="ps-0">jk076590ygghgh324vd3568</td>
                                    <td>
                                        <button data-action="copy" class="btn btn-active-color-primary btn-color-gray-500 btn-icon btn-sm btn-outline-light">
                                            <i class="ki-outline ki-copy fs-2"></i>
                                        </button>
                                    </td>
                                    <td>May 14, 2020</td>
                                    <td>
                                        <span class="badge badge-light-success fs-7 fw-semibold">Active</span>
                                    </td>
                                    <td class="pe-9">
                                        <div class="w-100px position-relative">
                                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                                <option value=""></option>
                                                <option value="2">Options 1</option>
                                                <option value="3">Options 2</option>
                                                <option value="4">Options 3</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <button data-action="copy" class="btn btn-color-gray-500 btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                            <i class="ki-solid ki-copy fs-2"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Remore Interface</td>
                                    <td data-bs-target="license" class="ps-0">hhet6454788gfg555hhh4</td>
                                    <td>
                                        <button data-action="copy" class="btn btn-active-color-primary btn-color-gray-500 btn-icon btn-sm btn-outline-light">
                                            <i class="ki-outline ki-copy fs-2"></i>
                                        </button>
                                    </td>
                                    <td>Dec 30, 2019</td>
                                    <td>
                                        <span class="badge badge-light-success fs-7 fw-semibold">Active</span>
                                    </td>
                                    <td class="pe-9">
                                        <div class="w-100px position-relative">
                                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                                <option value=""></option>
                                                <option value="2">Options 1</option>
                                                <option value="3">Options 2</option>
                                                <option value="4">Options 3</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <button data-action="copy" class="btn btn-color-gray-500 btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                            <i class="ki-solid ki-copy fs-2"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">none set</td>
                                    <td data-bs-target="license" class="ps-0">fftt456765gjkkjhi83093985</td>
                                    <td>
                                        <button data-action="copy" class="btn btn-active-color-primary btn-color-gray-500 btn-icon btn-sm btn-outline-light">
                                            <i class="ki-outline ki-copy fs-2"></i>
                                        </button>
                                    </td>
                                    <td>Inactive</td>
                                    <td>
                                        <span class="badge badge-light-danger fs-7 fw-semibold">Active</span>
                                    </td>
                                    <td class="pe-9">
                                        <div class="w-100px position-relative">
                                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                                <option value=""></option>
                                                <option value="2">Options 1</option>
                                                <option value="3">Options 2</option>
                                                <option value="4">Options 3</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <button data-action="copy" class="btn btn-color-gray-500 btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                            <i class="ki-solid ki-copy fs-2"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Test App</td>
                                    <td data-bs-target="license" class="ps-0">jk076590ygghgh324vd33</td>
                                    <td>
                                        <button data-action="copy" class="btn btn-active-color-primary btn-color-gray-500 btn-icon btn-sm btn-outline-light">
                                            <i class="ki-outline ki-copy fs-2"></i>
                                        </button>
                                    </td>
                                    <td>Apr 03, 2019</td>
                                    <td>
                                        <span class="badge badge-light-success fs-7 fw-semibold">Active</span>
                                    </td>
                                    <td class="pe-9">
                                        <div class="w-100px position-relative">
                                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                                <option value=""></option>
                                                <option value="2">Options 1</option>
                                                <option value="3">Options 2</option>
                                                <option value="4">Options 3</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <button data-action="copy" class="btn btn-color-gray-500 btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                            <i class="ki-solid ki-copy fs-2"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Tbody-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::API keys-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
@endsection

@push('js')

@endpush