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
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Documents</h1>
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
            <!--begin::Documents toolbar-->
            <div class="d-flex flex-wrap flex-stack mb-6">
                <!--begin::Title-->
                <h3 class="fw-bold my-2">My Documents
                    <span class="fs-6 text-gray-500 fw-semibold ms-1">100+ resources</span>
                </h3>
                <!--end::Title-->
                <!--begin::Controls-->
                <div class="d-flex my-2">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative me-4">
                        <i class="ki-outline ki-magnifier fs-3 position-absolute ms-3"></i>
                        <input type="text" id="kt_filter_search" class="form-control form-control-sm border-body bg-body w-150px ps-10" placeholder="Search" />
                    </div>
                    <!--end::Search-->
                    <a href="apps/file-manager/files.html" class="btn btn-primary btn-sm">File Manager</a>
                </div>
                <!--end::Controls-->
            </div>
            <!--end::Documents toolbar-->
            <!--begin::Row-->
            <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <!--begin::Card-->
                    <div class="card h-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                            <!--begin::Name-->
                            <a href="apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                                <!--begin::Image-->
                                <div class="symbol symbol-75px mb-5">
                                    <img src="{{ getFileVersion('/assets/admin/media/svg/files/folder-document.svg') }}" class="theme-light-show" alt="" />
                                    <img src="{{ getFileVersion('/assets/admin/media/svg/files/folder-document-dark.svg') }}" class="theme-dark-show" alt="" />
                                </div>
                                <!--end::Image-->
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">Finance</div>
                                <!--end::Title-->
                            </a>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <div class="fs-7 fw-semibold text-gray-500">7 files</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <!--begin::Card-->
                    <div class="card h-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                            <!--begin::Name-->
                            <a href="apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                                <!--begin::Image-->
                                <div class="symbol symbol-75px mb-5">
                                    <img src="{{ getFileVersion('/assets/admin/media/svg/files/folder-document.svg') }}" class="theme-light-show" alt="" />
                                    <img src="{{ getFileVersion('/assets/admin/media/svg/files/folder-document-dark.svg') }}" class="theme-dark-show" alt="" />
                                </div>
                                <!--end::Image-->
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">Customers</div>
                                <!--end::Title-->
                            </a>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <div class="fs-7 fw-semibold text-gray-500">3 files</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <!--begin::Card-->
                    <div class="card h-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                            <!--begin::Name-->
                            <a href="apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                                <!--begin::Image-->
                                <div class="symbol symbol-75px mb-5">
                                    <img src="{{ getFileVersion('/assets/admin/media/svg/files/folder-document.svg') }}" class="theme-light-show" alt="" />
                                    <img src="{{ getFileVersion('/assets/admin/media/svg/files/folder-document-dark.svg') }}" class="theme-dark-show" alt="" />
                                </div>
                                <!--end::Image-->
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">CRM Project</div>
                                <!--end::Title-->
                            </a>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <div class="fs-7 fw-semibold text-gray-500">25 files</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
            </div>
            <!--end:Row-->
            <!--begin::Row-->
            <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <!--begin::Card-->
                    <div class="card h-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                            <!--begin::Name-->
                            <a href="apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                                <!--begin::Image-->
                                <div class="symbol symbol-60px mb-5">
                                    <img src="{{ getFileVersion('/assets/admin/media/svg/files/pdf.svg') }}" class="theme-light-show" alt="" />
                                    <img src="{{ getFileVersion('/assets/admin/media/svg/files/pdf-dark.svg') }}" class="theme-dark-show" alt="" />
                                </div>
                                <!--end::Image-->
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">Project Reqs..</div>
                                <!--end::Title-->
                            </a>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <div class="fs-7 fw-semibold text-gray-500">3 days ago</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <!--begin::Card-->
                    <div class="card h-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                            <!--begin::Name-->
                            <a href="apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                                <!--begin::Image-->
                                <div class="symbol symbol-60px mb-5">
                                    <img src="{{ getFileVersion('/assets/admin/media/svg/files/doc.svg') }}" class="theme-light-show" alt="" />
                                    <img src="{{ getFileVersion('/assets/admin/media/svg/files/doc-dark.svg') }}" class="theme-dark-show" alt="" />
                                </div>
                                <!--end::Image-->
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">CRM App Docs..</div>
                                <!--end::Title-->
                            </a>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <div class="fs-7 fw-semibold text-gray-500">3 days ago</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <!--begin::Card-->
                    <div class="card h-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                            <!--begin::Name-->
                            <a href="apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                                <!--begin::Image-->
                                <div class="symbol symbol-60px mb-5">
                                    <img src="{{ getFileVersion('/assets/admin/media/svg/files/css.svg') }}" class="theme-light-show" alt="" />
                                    <img src="{{ getFileVersion('/assets/admin/media/svg/files/css-dark.svg') }}" class="theme-dark-show" alt="" />
                                </div>
                                <!--end::Image-->
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">User CRUD Styles</div>
                                <!--end::Title-->
                            </a>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <div class="fs-7 fw-semibold text-gray-500">4 days ago</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <!--begin::Card-->
                    <div class="card h-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                            <!--begin::Name-->
                            <a href="apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                                <!--begin::Image-->
                                <div class="symbol symbol-60px mb-5">
                                    <img src="{{ getFileVersion('/assets/admin/media/svg/files/ai.svg') }}" class="theme-light-show" alt="" />
                                    <img src="{{ getFileVersion('/assets/admin/media/svg/files/ai-dark.svg') }}" class="theme-dark-show" alt="" />
                                </div>
                                <!--end::Image-->
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">Product Logo</div>
                                <!--end::Title-->
                            </a>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <div class="fs-7 fw-semibold text-gray-500">5 days ago</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <!--begin::Card-->
                    <div class="card h-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                            <!--begin::Name-->
                            <a href="apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                                <!--begin::Image-->
                                <div class="symbol symbol-60px mb-5">
                                    <img src="{{ getFileVersion('/assets/admin/media/svg/files/sql.svg') }}" class="theme-light-show" alt="" />
                                    <img src="{{ getFileVersion('/assets/admin/media/svg/files/sql-dark.svg') }}" class="theme-dark-show" alt="" />
                                </div>
                                <!--end::Image-->
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">Orders backup</div>
                                <!--end::Title-->
                            </a>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <div class="fs-7 fw-semibold text-gray-500">1 week ago</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <!--begin::Card-->
                    <div class="card h-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                            <!--begin::Name-->
                            <a href="apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                                <!--begin::Image-->
                                <div class="symbol symbol-60px mb-5">
                                    <img src="{{ getFileVersion('/assets/admin/media/svg/files/xml.svg') }}" class="theme-light-show" alt="" />
                                    <img src="{{ getFileVersion('/assets/admin/media/svg/files/xml-dark.svg') }}" class="theme-dark-show" alt="" />
                                </div>
                                <!--end::Image-->
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">UTAIR CRM API Co..</div>
                                <!--end::Title-->
                            </a>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <div class="fs-7 fw-semibold text-gray-500">2 weeks ago</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <!--begin::Card-->
                    <div class="card h-100">
                        <!--begin::Card body-->
                        <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                            <!--begin::Name-->
                            <a href="apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                                <!--begin::Image-->
                                <div class="symbol symbol-60px mb-5">
                                    <img src="{{ getFileVersion('/assets/admin/media/svg/files/tif.svg') }}" class="theme-light-show" alt="" />
                                    <img src="{{ getFileVersion('/assets/admin/media/svg/files/tif-dark.svg') }}" class="theme-dark-show" alt="" />
                                </div>
                                <!--end::Image-->
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">Tower Hill App..</div>
                                <!--end::Title-->
                            </a>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <div class="fs-7 fw-semibold text-gray-500">3 weeks ago</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
            </div>
            <!--end:Row-->
            <!--begin::Modals-->
            <!--begin::Modal - Offer A Deal-->
            <div class="modal fade" id="kt_modal_offer_a_deal" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-1000px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header py-7 d-flex justify-content-between">
                            <!--begin::Modal title-->
                            <h2>Offer a Deal</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <i class="ki-outline ki-cross fs-1"></i>
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--begin::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y m-5">
                            <!--begin::Stepper-->
                            <div class="stepper stepper-links d-flex flex-column" id="kt_modal_offer_a_deal_stepper">
                                <!--begin::Nav-->
                                <div class="stepper-nav justify-content-center py-2">
                                    <!--begin::Step 1-->
                                    <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                                        <h3 class="stepper-title">Deal Type</h3>
                                    </div>
                                    <!--end::Step 1-->
                                    <!--begin::Step 2-->
                                    <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                        <h3 class="stepper-title">Deal Details</h3>
                                    </div>
                                    <!--end::Step 2-->
                                    <!--begin::Step 3-->
                                    <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                        <h3 class="stepper-title">Finance Settings</h3>
                                    </div>
                                    <!--end::Step 3-->
                                    <!--begin::Step 4-->
                                    <div class="stepper-item" data-kt-stepper-element="nav">
                                        <h3 class="stepper-title">Completed</h3>
                                    </div>
                                    <!--end::Step 4-->
                                </div>
                                <!--end::Nav-->
                                <!--begin::Form-->
                                <form class="mx-auto mw-500px w-100 pt-15 pb-10" novalidate="novalidate" id="kt_modal_offer_a_deal_form">
                                    <!--begin::Type-->
                                    <div class="current" data-kt-stepper-element="content">
                                        <!--begin::Wrapper-->
                                        <div class="w-100">
                                            <!--begin::Heading-->
                                            <div class="mb-13">
                                                <!--begin::Title-->
                                                <h2 class="mb-3">Deal Type</h2>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-muted fw-semibold fs-5">If you need more info, please check out
                                                    <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-15" data-kt-buttons="true">
                                                <!--begin::Option-->
                                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 mb-6 active">
                                                    <!--begin::Input-->
                                                    <input class="btn-check" type="radio" checked="checked" name="offer_type" value="1" />
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <span class="d-flex">
                                                        <!--begin::Icon-->
                                                        <i class="ki-outline ki-profile-circle fs-3hx"></i>
                                                        <!--end::Icon-->
                                                        <!--begin::Info-->
                                                        <span class="ms-4">
                                                            <span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Personal Deal</span>
                                                            <span class="fw-semibold fs-4 text-muted">If you need more info, please check it out</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
                                                    <!--begin::Input-->
                                                    <input class="btn-check" type="radio" name="offer_type" value="2" />
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <span class="d-flex">
                                                        <!--begin::Icon-->
                                                        <i class="ki-outline ki-element-11 fs-3hx"></i>
                                                        <!--end::Icon-->
                                                        <!--begin::Info-->
                                                        <span class="ms-4">
                                                            <span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Corporate Deal</span>
                                                            <span class="fw-semibold fs-4 text-muted">Create corporate account to manage users</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="button" class="btn btn-lg btn-primary" data-kt-element="type-next">
                                                    <span class="indicator-label">Offer Details</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Type-->
                                    <!--begin::Details-->
                                    <div data-kt-stepper-element="content">
                                        <!--begin::Wrapper-->
                                        <div class="w-100">
                                            <!--begin::Heading-->
                                            <div class="mb-13">
                                                <!--begin::Title-->
                                                <h2 class="mb-3">Deal Details</h2>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-muted fw-semibold fs-5">If you need more info, please check out
                                                    <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-8">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-semibold mb-2">Customer</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" name="details_customer">
                                                    <option></option>
                                                    <option value="1" selected="selected">Keenthemes</option>
                                                    <option value="2">CRM App</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-8">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-semibold mb-2">Deal Title</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" placeholder="Enter Deal Title" name="details_title" value="Marketing Campaign" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-8">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">Deal Description</label>
                                                <!--end::Label-->
                                                <!--begin::Label-->
                                                <textarea class="form-control form-control-solid" rows="3" placeholder="Enter Deal Description" name="details_description">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-8">
                                                <label class="required fs-6 fw-semibold mb-2">Activation Date</label>
                                                <div class="position-relative d-flex align-items-center">
                                                    <!--begin::Icon-->
                                                    <i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
                                                    <!--end::Icon-->
                                                    <!--begin::Datepicker-->
                                                    <input class="form-control form-control-solid ps-12" placeholder="Pick date range" name="details_activation_date" />
                                                    <!--end::Datepicker-->
                                                </div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-15">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Label-->
                                                    <div class="me-5">
                                                        <label class="required fs-6 fw-semibold">Notifications</label>
                                                        <div class="fs-7 fw-semibold text-muted">Allow Notifications by Phone or Email</div>
                                                    </div>
                                                    <!--end::Label-->
                                                    <!--begin::Checkboxes-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-10">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input h-20px w-20px" type="checkbox" value="email" name="details_notifications[]" />
                                                            <!--end::Input-->
                                                            <!--begin::Label-->
                                                            <span class="form-check-label fw-semibold">Email</span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" checked="checked" name="details_notifications[]" />
                                                            <!--end::Input-->
                                                            <!--begin::Label-->
                                                            <span class="form-check-label fw-semibold">Phone</span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Checkboxes-->
                                                </div>
                                                <!--begin::Wrapper-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex flex-stack">
                                                <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="details-previous">Deal Type</button>
                                                <button type="button" class="btn btn-lg btn-primary" data-kt-element="details-next">
                                                    <span class="indicator-label">Financing</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Budget-->
                                    <div data-kt-stepper-element="content">
                                        <!--begin::Wrapper-->
                                        <div class="w-100">
                                            <!--begin::Heading-->
                                            <div class="mb-13">
                                                <!--begin::Title-->
                                                <h2 class="mb-3">Finance</h2>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-muted fw-semibold fs-5">If you need more info, please check out
                                                    <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-8">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span class="required">Setup Budget</span>
                                                    <span class="lh-1 ms-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class=&#039;p-4 rounded bg-light&#039;&gt; &lt;div class=&#039;d-flex flex-stack text-muted mb-4&#039;&gt; &lt;i class=&quot;ki-outline ki-bank fs-3 me-3&quot;&gt;&lt;/i&gt; &lt;div class=&#039;fw-bold&#039;&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack fw-semibold text-gray-600&#039;&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;separator separator-dashed my-2&#039;&gt;&lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-gray-900 fw-bold mb-2&#039;&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-muted mb-2&#039;&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-muted&#039;&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;">
                                                        <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                                    </span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Dialer-->
                                                <div class="position-relative w-lg-250px" id="kt_modal_finance_setup" data-kt-dialer="true" data-kt-dialer-min="50" data-kt-dialer-max="50000" data-kt-dialer-step="100" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
                                                    <!--begin::Decrease control-->
                                                    <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
                                                        <i class="ki-outline ki-minus-circle fs-1"></i>
                                                    </button>
                                                    <!--end::Decrease control-->
                                                    <!--begin::Input control-->
                                                    <input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="finance_setup" readonly="readonly" value="$50" />
                                                    <!--end::Input control-->
                                                    <!--begin::Increase control-->
                                                    <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
                                                        <i class="ki-outline ki-plus-circle fs-1"></i>
                                                    </button>
                                                    <!--end::Increase control-->
                                                </div>
                                                <!--end::Dialer-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-8">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">Budget Usage</label>
                                                <!--end::Label-->
                                                <!--begin::Row-->
                                                <div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                                    <!--begin::Col-->
                                                    <div class="col-md-6 col-lg-12 col-xxl-6">
                                                        <!--begin::Option-->
                                                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                                                            <!--begin::Radio-->
                                                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                <input class="form-check-input" type="radio" name="finance_usage" value="1" checked="checked" />
                                                            </span>
                                                            <!--end::Radio-->
                                                            <!--begin::Info-->
                                                            <span class="ms-5">
                                                                <span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Precise Usage</span>
                                                                <span class="fw-semibold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
                                                            </span>
                                                            <!--end::Info-->
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-md-6 col-lg-12 col-xxl-6">
                                                        <!--begin::Option-->
                                                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                            <!--begin::Radio-->
                                                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                <input class="form-check-input" type="radio" name="finance_usage" value="2" />
                                                            </span>
                                                            <!--end::Radio-->
                                                            <!--begin::Info-->
                                                            <span class="ms-5">
                                                                <span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Extreme Usage</span>
                                                                <span class="fw-semibold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
                                                            </span>
                                                            <!--end::Info-->
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-15">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Label-->
                                                    <div class="me-5">
                                                        <label class="fs-6 fw-semibold">Allow Changes in Budget</label>
                                                        <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                                                    </div>
                                                    <!--end::Label-->
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" name="finance_allow" checked="checked" />
                                                        <span class="form-check-label fw-semibold text-muted">Allowed</span>
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex flex-stack">
                                                <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="finance-previous">Project Settings</button>
                                                <button type="button" class="btn btn-lg btn-primary" data-kt-element="finance-next">
                                                    <span class="indicator-label">Build Team</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Budget-->
                                    <!--begin::Complete-->
                                    <div data-kt-stepper-element="content">
                                        <!--begin::Wrapper-->
                                        <div class="w-100">
                                            <!--begin::Heading-->
                                            <div class="mb-13">
                                                <!--begin::Title-->
                                                <h2 class="mb-3">Deal Created!</h2>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-muted fw-semibold fs-5">If you need more info, please check out
                                                    <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Actions-->
                                            <div class="d-flex flex-center pb-20">
                                                <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">Create New Deal</button>
                                                <a href="#" class="btn btn-lg btn-primary" data-bs-toggle="tooltip" title="Coming Soon">View Deal</a>
                                            </div>
                                            <!--end::Actions-->
                                            <!--begin::Illustration-->
                                            <div class="text-center px-4">
                                                <img src="{{ getFileVersion('/assets/admin/media/illustrations/sketchy-1/20.png') }}" alt="" class="mw-100 mh-300px" />
                                            </div>
                                            <!--end::Illustration-->
                                        </div>
                                    </div>
                                    <!--end::Complete-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Stepper-->
                        </div>
                        <!--begin::Modal body-->
                    </div>
                </div>
            </div>
            <!--end::Modal - Offer A Deal-->
            <!--end::Modals-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
@endsection

@push('js')

@endpush