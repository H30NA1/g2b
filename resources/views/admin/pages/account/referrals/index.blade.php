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
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Referrals</h1>
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
            <!--begin::Referral program-->
            <div class="card mb-5 mb-xl-10">
                <!--begin::Body-->
                <div class="card-body py-10">
                    <h2 class="mb-9">Referral Program</h2>
                    <!--begin::Overview-->
                    <div class="row mb-10">
                        <!--begin::Col-->
                        <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                            <h4 class="mb-0">How to use Referral Program</h4>
                            <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">Use images to enhance your post, improve its flow, add humor
                                <br />and explain complex topics
                            </p>
                            <a href="#" class="btn btn-light btn-active-light-primary fw-bold">Get Started</a>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-6">
                            <h4 class="text-gray-800 mb-0">Your Referral Link</h4>
                            <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">Plan your blog post by choosing a topic, creating an outline conduct
                                <br />research, and checking facts
                            </p>
                            <div class="d-flex">
                                <input id="kt_referral_link_input" type="text" class="form-control form-control-solid me-3 flex-grow-1" name="search" value="https://keenthemes.com/reffer/?refid=345re66787k8" />
                                <button id="kt_referral_program_link_copy_btn" class="btn btn-light btn-active-light-primary fw-bold flex-shrink-0" data-clipboard-target="#kt_referral_link_input">Copy Link</button>
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Overview-->
                    <!--begin::Stats-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col">
                            <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                                <span class="fs-4 fw-semibold text-info pb-1 px-2">Net Earnings</span>
                                <span class="fs-lg-2tx fw-bold d-flex justify-content-center">$
                                    <span data-kt-countup="true" data-kt-countup-value="63,240.00">0</span></span>
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col">
                            <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                                <span class="fs-4 fw-semibold text-success pb-1 px-2">Balance</span>
                                <span class="fs-lg-2tx fw-bold d-flex justify-content-center">$
                                    <span data-kt-countup="true" data-kt-countup-value="8,530.00">0</span></span>
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col">
                            <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                                <span class="fs-4 fw-semibold text-danger pb-1 px-2">Avg Deal Size</span>
                                <span class="fs-lg-2tx fw-bold d-flex justify-content-center">$
                                    <span data-kt-countup="true" data-kt-countup-value="2,600">0</span></span>
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col">
                            <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                                <span class="fs-4 fw-semibold text-primary pb-1 px-2">Referral Signups</span>
                                <span class="fs-lg-2tx fw-bold d-flex justify-content-center">$
                                    <span data-kt-countup="true" data-kt-countup-value="783&quot;">0</span></span>
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Stats-->
                    <!--begin::Info-->
                    <p class="fs-5 fw-semibold text-gray-600 py-6">Writing headlines for blog posts is as much an art as it is a science, and probably warrants its own post, but for now, all I’d advise is experimenting with what works for your audience, especially if it’s not resonating with your audience</p>
                    <!--end::Info-->
                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                        <!--begin::Icon-->
                        <i class="ki-outline ki-bank fs-2tx text-primary me-4"></i>
                        <!--end::Icon-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                            <!--begin::Content-->
                            <div class="mb-3 mb-md-0 fw-semibold">
                                <h4 class="text-gray-900 fw-bold">Withdraw Your Money to a Bank Account</h4>
                                <div class="fs-6 text-gray-700 pe-7">Withdraw money securily to your bank account. Commision is $25 per transaction under $50,000</div>
                            </div>
                            <!--end::Content-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Withdraw Money</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Referral program-->
            <!--begin::Referred users-->
            <div class="card">
                <!--begin::Header-->
                <div class="card-header card-header-stretch">
                    <!--begin::Title-->
                    <div class="card-title">
                        <h3>Referred Users</h3>
                    </div>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Tab nav-->
                        <ul class="nav nav-stretch fs-5 fw-semibold nav-line-tabs border-transparent" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a id="kt_referrals_tab_1" class="nav-link text-active-gray-800 me-4 active" data-bs-toggle="tab" role="tab" href="#kt_referrals_1">Month</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="kt_referrals_tab_2" class="nav-link text-active-gray-800 me-4" data-bs-toggle="tab" role="tab" href="#kt_referrals_2">2022</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="kt_referrals_tab_3" class="nav-link text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_referrals_3">2021</a>
                            </li>
                        </ul>
                        <!--end::Tab nav-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Tab content-->
                <div id="kt_referred_users_tab_content" class="tab-content">
                    <!--begin::Tab panel-->
                    <div id="kt_referrals_1" class="card-body p-0 tab-pane fade show active" role="tabpanel">
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-bordered align-middle gy-6">
                                <!--begin::Thead-->
                                <thead class="border-bottom border-gray-200 fs-6 fw-bold bg-lighten">
                                    <tr>
                                        <th class="min-w-125px ps-9">Order ID</th>
                                        <th class="min-w-125px px-0">User</th>
                                        <th class="min-w-125px">Date</th>
                                        <th class="min-w-125px">Bonus</th>
                                        <th class="min-w-125px ps-0">Profit</th>
                                    </tr>
                                </thead>
                                <!--end::Thead-->
                                <!--begin::Tbody-->
                                <tbody class="fs-6 fw-semibold text-gray-600">
                                    <tr>
                                        <td class="ps-9">678935899</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Marcus Harris</a>
                                        </td>
                                        <td>Nov 24, 2020</td>
                                        <td>26%</td>
                                        <td class="text-success">$1,200.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">578433345</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Maria Garcia</a>
                                        </td>
                                        <td>Aug 10, 2020</td>
                                        <td>35%</td>
                                        <td class="text-success">$2,400.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">678935899</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Robert Smith</a>
                                        </td>
                                        <td>May 06, 2020</td>
                                        <td>18%</td>
                                        <td class="text-success">$940.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">098669322</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Williams Brown</a>
                                        </td>
                                        <td>Apr 30, 2020</td>
                                        <td>43%</td>
                                        <td class="text-success">$200.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">245899092</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Paul Johnson</a>
                                        </td>
                                        <td>Feb 29, 2020</td>
                                        <td>21%</td>
                                        <td class="text-success">$380.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">505432578</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Sarah Jones</a>
                                        </td>
                                        <td>Jan 08, 2020</td>
                                        <td>47%</td>
                                        <td class="text-success">$2,050.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">256899235</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Juan Carlos</a>
                                        </td>
                                        <td>Jan 02, 2020</td>
                                        <td>35%</td>
                                        <td class="text-success">$820.00</td>
                                    </tr>
                                </tbody>
                                <!--end::Tbody-->
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div id="kt_referrals_2" class="card-body p-0 tab-pane fade" role="tabpanel">
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-bordered align-middle gy-6">
                                <!--begin::Thead-->
                                <thead class="border-bottom border-gray-200 fs-6 fw-bold bg-lighten">
                                    <tr>
                                        <th class="min-w-125px ps-9">Order ID</th>
                                        <th class="min-w-125px px-0">User</th>
                                        <th class="min-w-125px">Date</th>
                                        <th class="min-w-125px">Bonus</th>
                                        <th class="min-w-125px ps-0">Profit</th>
                                    </tr>
                                </thead>
                                <!--end::Thead-->
                                <!--begin::Tbody-->
                                <tbody class="fs-6 fw-semibold text-gray-600">
                                    <tr>
                                        <td class="ps-9">256899235</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Juan Carlos</a>
                                        </td>
                                        <td>Jan 02, 2020</td>
                                        <td>35%</td>
                                        <td class="text-success">$820.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">245899092</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Paul Johnson</a>
                                        </td>
                                        <td>Feb 29, 2020</td>
                                        <td>21%</td>
                                        <td class="text-success">$380.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">505432578</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Sarah Jones</a>
                                        </td>
                                        <td>Jan 08, 2020</td>
                                        <td>47%</td>
                                        <td class="text-success">$2,050.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">678935899</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Robert Smith</a>
                                        </td>
                                        <td>May 06, 2020</td>
                                        <td>18%</td>
                                        <td class="text-success">$940.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">578433345</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Maria Garcia</a>
                                        </td>
                                        <td>Aug 10, 2020</td>
                                        <td>35%</td>
                                        <td class="text-success">$2,400.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">098669322</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Williams Brown</a>
                                        </td>
                                        <td>Apr 30, 2020</td>
                                        <td>43%</td>
                                        <td class="text-success">$200.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">678935899</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Marcus Harris</a>
                                        </td>
                                        <td>Nov 24, 2020</td>
                                        <td>26%</td>
                                        <td class="text-success">$1,200.00</td>
                                    </tr>
                                </tbody>
                                <!--end::Tbody-->
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div id="kt_referrals_3" class="card-body p-0 tab-pane fade" role="tabpanel">
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-bordered align-middle gy-6">
                                <!--begin::Thead-->
                                <thead class="border-bottom border-gray-200 fs-6 fw-bold bg-lighten">
                                    <tr>
                                        <th class="min-w-125px ps-9">Order ID</th>
                                        <th class="min-w-125px px-0">User</th>
                                        <th class="min-w-125px">Date</th>
                                        <th class="min-w-125px">Bonus</th>
                                        <th class="min-w-125px ps-0">Profit</th>
                                    </tr>
                                </thead>
                                <!--end::Thead-->
                                <!--begin::Tbody-->
                                <tbody class="fs-6 fw-semibold text-gray-600">
                                    <tr>
                                        <td class="ps-9">578433345</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Maria Garcia</a>
                                        </td>
                                        <td>Aug 10, 2020</td>
                                        <td>35%</td>
                                        <td class="text-success">$2,400.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">678935899</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Robert Smith</a>
                                        </td>
                                        <td>May 06, 2020</td>
                                        <td>18%</td>
                                        <td class="text-success">$940.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">256899235</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Juan Carlos</a>
                                        </td>
                                        <td>Jan 02, 2020</td>
                                        <td>35%</td>
                                        <td class="text-success">$820.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">245899092</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Paul Johnson</a>
                                        </td>
                                        <td>Feb 29, 2020</td>
                                        <td>21%</td>
                                        <td class="text-success">$380.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">505432578</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Sarah Jones</a>
                                        </td>
                                        <td>Jan 08, 2020</td>
                                        <td>47%</td>
                                        <td class="text-success">$2,050.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">098669322</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Williams Brown</a>
                                        </td>
                                        <td>Apr 30, 2020</td>
                                        <td>43%</td>
                                        <td class="text-success">$200.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">678935899</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Marcus Harris</a>
                                        </td>
                                        <td>Nov 24, 2020</td>
                                        <td>26%</td>
                                        <td class="text-success">$1,200.00</td>
                                    </tr>
                                </tbody>
                                <!--end::Tbody-->
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Tab panel-->
                </div>
                <!--end::Tab content-->
            </div>
            <!--end::Referred users-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
@endsection

@push('js')

@endpush