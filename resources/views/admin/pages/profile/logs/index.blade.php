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
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Logs & Notifcations</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.index') }}" class="text-muted text-hover-primary">Home</a>
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
                                    @include('admin.pages.profile.includes.user-name')
                                    <!--end::Name-->
                                    <!--begin::Info-->
                                    @include('admin.pages.profile.includes.user-info')
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                                <!--begin::Actions-->
                                @include('admin.pages.profile.includes.action')
                                <!--end::Actions-->
                            </div>
                            <!--end::Title-->
                            <!--begin::Stats-->
                            @include('admin.pages.profile.includes.user-stats')
                            <!--end::Stats-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Navs-->
                    @include('admin.pages.profile.includes.nav')
                    <!--begin::Navs-->
                </div>
            </div>
            <!--end::Navbar-->
            <!--begin::Login sessions-->
            <div class="card mb-5 mb-lg-10">
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
            <!--begin::Card-->
            <div class="card pt-4">
                <!--begin::Card header-->
                <div class="card-header border-0">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Logs</h2>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-sm btn-light-primary">
                            <i class="ki-outline ki-cloud-download fs-3"></i>Download Report</button>
                        <!--end::Button-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-0">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fw-semibold text-gray-600 fs-6 gy-5" id="kt_table_customers_logs">
                            <!--begin::Table body-->
                            <tbody>
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-danger">500 ERR</div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/invoice/in_3517_8444/invalid</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">25 Oct 2024, 10:10 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-success">200 OK</div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/invoices/in_2571_9513/payment</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">25 Oct 2024, 10:10 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-success">200 OK</div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/invoices/in_6755_9368/payment</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">05 May 2024, 5:30 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-warning">404 WRN</div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/customer/c_65a116667f8aa/not_found</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">15 Apr 2024, 10:10 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-danger">500 ERR</div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/invoice/in_8977_7590/invalid</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">21 Feb 2024, 11:30 am</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-danger">500 ERR</div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/invoice/in_3517_8444/invalid</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">25 Oct 2024, 11:30 am</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-warning">404 WRN</div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/customer/c_65a116667f8aa/not_found</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">20 Dec 2024, 5:30 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-success">200 OK</div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/invoices/in_8289_3647/payment</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">10 Nov 2024, 11:05 am</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-success">200 OK</div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/invoices/in_4801_8904/payment</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">19 Aug 2024, 5:30 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-success">200 OK</div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/invoices/in_4786_4976/payment</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">25 Jul 2024, 2:40 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
@endsection

@push('js')

@endpush