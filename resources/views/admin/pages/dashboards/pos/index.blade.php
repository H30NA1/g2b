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
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">POS System</h1>
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
                        <li class="breadcrumb-item text-muted">Dashboards</li>
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
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-xl-row">
                <!--begin::Content-->
                <div class="d-flex flex-row-fluid me-xl-9 mb-10 mb-xl-0">
                    <!--begin::Pos food-->
                    <div class="card card-flush card-p-0 bg-transparent border-0">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Nav-->
                            <ul class="nav nav-pills d-flex nav-pills-custom gap-3 mb-6">
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-0">
                                    <!--begin::Nav link-->
                                    <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg show active" data-bs-toggle="pill" href="#kt_pos_food_content_1" style="width: 138px;height: 180px">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <!--begin::Food icon-->
                                            <img src="{{ getFileVersion('/assets/admin/media/svg/food-icons/spaghetti.svg') }}" class="w-50px" alt="" />
                                            <!--end::Food icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <span class="text-gray-800 fw-bold fs-2 d-block">Lunch</span>
                                            <span class="text-gray-500 fw-semibold fs-7">8 Options</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Nav link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-0">
                                    <!--begin::Nav link-->
                                    <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg" data-bs-toggle="pill" href="#kt_pos_food_content_2" style="width: 138px;height: 180px">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <!--begin::Food icon-->
                                            <img src="{{ getFileVersion('/assets/admin/media/svg/food-icons/salad.svg') }}" class="w-50px" alt="" />
                                            <!--end::Food icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <span class="text-gray-800 fw-bold fs-2 d-block">Salad</span>
                                            <span class="text-gray-500 fw-semibold fs-7">14 Salads</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Nav link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-0">
                                    <!--begin::Nav link-->
                                    <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg" data-bs-toggle="pill" href="#kt_pos_food_content_3" style="width: 138px;height: 180px">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <!--begin::Food icon-->
                                            <img src="{{ getFileVersion('/assets/admin/media/svg/food-icons/cheeseburger.svg') }}" class="w-50px" alt="" />
                                            <!--end::Food icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <span class="text-gray-800 fw-bold fs-2 d-block">Burger</span>
                                            <span class="text-gray-500 fw-semibold fs-7">5 Burgers</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Nav link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-0">
                                    <!--begin::Nav link-->
                                    <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg" data-bs-toggle="pill" href="#kt_pos_food_content_4" style="width: 138px;height: 180px">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <!--begin::Food icon-->
                                            <img src="{{ getFileVersion('/assets/admin/media/svg/food-icons/coffee.svg') }}" class="w-50px" alt="" />
                                            <!--end::Food icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <span class="text-gray-800 fw-bold fs-2 d-block">Coffee</span>
                                            <span class="text-gray-500 fw-semibold fs-7">7 Beverages</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Nav link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-0">
                                    <!--begin::Nav link-->
                                    <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg" data-bs-toggle="pill" href="#kt_pos_food_content_5" style="width: 138px;height: 180px">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <!--begin::Food icon-->
                                            <img src="{{ getFileVersion('/assets/admin/media/svg/food-icons/cheesecake.svg') }}" class="w-50px" alt="" />
                                            <!--end::Food icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <span class="text-gray-800 fw-bold fs-2 d-block">Dessert</span>
                                            <span class="text-gray-500 fw-semibold fs-7">8 Desserts</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Nav link-->
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Nav-->
                            <!--begin::Tab Content-->
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_pos_food_content_1">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-2.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">T-Bone Stake</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$16.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-7.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s Salmon</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-8.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-4.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken Breast</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-10.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion Steak</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-9.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup of the Day</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-3.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-5.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-11.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_pos_food_content_2">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-11.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-5.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-4.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken Breast</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-8.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-10.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion Steak</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-9.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup of the Day</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-3.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-7.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s Salmon</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-2.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">T-Bone Stake</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$16.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_pos_food_content_3">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-5.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-11.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-2.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">T-Bone Stake</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$16.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-7.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s Salmon</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-4.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken Breast</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-8.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-9.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup of the Day</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-10.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion Steak</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-3.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_pos_food_content_4">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-3.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-5.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-4.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken Breast</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-8.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-9.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup of the Day</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-11.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-3.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-7.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s Salmon</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-10.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion Steak</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_pos_food_content_5">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-10.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion Steak</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-5.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-4.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken Breast</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-3.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-2.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">T-Bone Stake</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$16.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-7.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s Salmon</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-8.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-9.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup of the Day</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-11.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Pos food-->
                </div>
                <!--end::Content-->
                <!--begin::Sidebar-->
                <div class="flex-row-auto w-xl-450px">
                    <!--begin::Pos order-->
                    <div class="card card-flush bg-body" id="kt_pos_form">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <h3 class="card-title fw-bold text-gray-800 fs-2qx">Current Order</h3>
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-light-primary fs-4 fw-bold py-4">Clear All</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0">
                            <!--begin::Table container-->
                            <div class="table-responsive mb-8">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4 my-0">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-175px"></th>
                                            <th class="w-125px"></th>
                                            <th class="w-60px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr data-kt-pos-element="item" data-kt-pos-item-price="33">
                                            <td class="pe-0">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-2.jpg') }}" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">T-Bone Stake</span>
                                                </div>
                                            </td>
                                            <td class="pe-0">
                                                <!--begin::Dialer-->
                                                <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                                    <!--begin::Decrease control-->
                                                    <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-500" data-kt-dialer-control="decrease">
                                                        <i class="ki-outline ki-minus fs-3x"></i>
                                                    </button>
                                                    <!--end::Decrease control-->
                                                    <!--begin::Input control-->
                                                    <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="2" />
                                                    <!--end::Input control-->
                                                    <!--begin::Increase control-->
                                                    <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-500" data-kt-dialer-control="increase">
                                                        <i class="ki-outline ki-plus fs-3x"></i>
                                                    </button>
                                                    <!--end::Increase control-->
                                                </div>
                                                <!--end::Dialer-->
                                            </td>
                                            <td class="text-end">
                                                <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$66.00</span>
                                            </td>
                                        </tr>
                                        <tr data-kt-pos-element="item" data-kt-pos-item-price="7.5">
                                            <td class="pe-0">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-9.jpg') }}" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Soup of the Day</span>
                                                </div>
                                            </td>
                                            <td class="pe-0">
                                                <!--begin::Dialer-->
                                                <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                                    <!--begin::Decrease control-->
                                                    <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-500" data-kt-dialer-control="decrease">
                                                        <i class="ki-outline ki-minus fs-3x"></i>
                                                    </button>
                                                    <!--end::Decrease control-->
                                                    <!--begin::Input control-->
                                                    <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="1" />
                                                    <!--end::Input control-->
                                                    <!--begin::Increase control-->
                                                    <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-500" data-kt-dialer-control="increase">
                                                        <i class="ki-outline ki-plus fs-3x"></i>
                                                    </button>
                                                    <!--end::Increase control-->
                                                </div>
                                                <!--end::Dialer-->
                                            </td>
                                            <td class="text-end">
                                                <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$7.50</span>
                                            </td>
                                        </tr>
                                        <tr data-kt-pos-element="item" data-kt-pos-item-price="13.5">
                                            <td class="pe-0">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ getFileVersion('/assets/admin/media/stock/food/img-3.jpg') }}" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Pancakes</span>
                                                </div>
                                            </td>
                                            <td class="pe-0">
                                                <!--begin::Dialer-->
                                                <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                                    <!--begin::Decrease control-->
                                                    <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-500" data-kt-dialer-control="decrease">
                                                        <i class="ki-outline ki-minus fs-3x"></i>
                                                    </button>
                                                    <!--end::Decrease control-->
                                                    <!--begin::Input control-->
                                                    <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="2" />
                                                    <!--end::Input control-->
                                                    <!--begin::Increase control-->
                                                    <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-500" data-kt-dialer-control="increase">
                                                        <i class="ki-outline ki-plus fs-3x"></i>
                                                    </button>
                                                    <!--end::Increase control-->
                                                </div>
                                                <!--end::Dialer-->
                                            </td>
                                            <td class="text-end">
                                                <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$27.00</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                            <!--begin::Summary-->
                            <div class="d-flex flex-stack bg-success rounded-3 p-6 mb-11">
                                <!--begin::Content-->
                                <div class="fs-6 fw-bold text-white">
                                    <span class="d-block lh-1 mb-2">Subtotal</span>
                                    <span class="d-block mb-2">Discounts</span>
                                    <span class="d-block mb-9">Tax(12%)</span>
                                    <span class="d-block fs-2qx lh-1">Total</span>
                                </div>
                                <!--end::Content-->
                                <!--begin::Content-->
                                <div class="fs-6 fw-bold text-white text-end">
                                    <span class="d-block lh-1 mb-2" data-kt-pos-element="total">$100.50</span>
                                    <span class="d-block mb-2" data-kt-pos-element="discount">-$8.00</span>
                                    <span class="d-block mb-9" data-kt-pos-element="tax">$11.20</span>
                                    <span class="d-block fs-2qx lh-1" data-kt-pos-element="grant-total">$93.46</span>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Summary-->
                            <!--begin::Payment Method-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <h1 class="fw-bold text-gray-800 mb-5">Payment Method</h1>
                                <!--end::Title-->
                                <!--begin::Radio group-->
                                <div class="d-flex flex-equal gap-5 gap-xxl-9 px-0 mb-12" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                                    <!--begin::Radio-->
                                    <label class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4" data-kt-button="true">
                                        <!--begin::Input-->
                                        <input class="btn-check" type="radio" name="method" value="0" />
                                        <!--end::Input-->
                                        <!--begin::Icon-->
                                        <i class="ki-outline ki-dollar fs-2hx mb-2 pe-0"></i>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="fs-7 fw-bold d-block">Cash</span>
                                        <!--end::Title-->
                                    </label>
                                    <!--end::Radio-->
                                    <!--begin::Radio-->
                                    <label class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4 active" data-kt-button="true">
                                        <!--begin::Input-->
                                        <input class="btn-check" type="radio" name="method" value="1" />
                                        <!--end::Input-->
                                        <!--begin::Icon-->
                                        <i class="ki-outline ki-credit-cart fs-2hx mb-2 pe-0"></i>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="fs-7 fw-bold d-block">Card</span>
                                        <!--end::Title-->
                                    </label>
                                    <!--end::Radio-->
                                    <!--begin::Radio-->
                                    <label class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4" data-kt-button="true">
                                        <!--begin::Input-->
                                        <input class="btn-check" type="radio" name="method" value="2" />
                                        <!--end::Input-->
                                        <!--begin::Icon-->
                                        <i class="ki-outline ki-paypal fs-2hx mb-2 pe-0"></i>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="fs-7 fw-bold d-block">E-Wallet</span>
                                        <!--end::Title-->
                                    </label>
                                    <!--end::Radio-->
                                </div>
                                <!--end::Radio group-->
                                <!--begin::Actions-->
                                <button class="btn btn-primary fs-1 w-100 py-4">Print Bills</button>
                                <!--end::Actions-->
                            </div>
                            <!--end::Payment Method-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Pos order-->
                </div>
                <!--end::Sidebar-->
            </div>
            <!--end::Layout-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
@endsection

@push('js')

@endpush