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
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Sitemap</h1>
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
                        <li class="breadcrumb-item text-muted">Corporate</li>
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
            <!--begin::Sitemap-->
            <div class="card">
                <!--begin::Body-->
                <div class="card-body p-5 px-lg-19 py-lg-16">
                    <!--begin::Heading-->
                    <div class="mb-15">
                        <!--begin::Title-->
                        <h1 class="fs-2x text-gray-900 mb-6">Sitemap</h1>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <div class="fs-5 text-muted fw-semibold">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Row-->
                    <div class="row g-10 mb-15">
                        <!--begin::Col-->
                        <div class="col-sm-4">
                            <!--begin::Title-->
                            <h3 class="fw-bold text-gray-900 mb-7">Premium Product</h3>
                            <!--end::Title-->
                            <!--begin::Links-->
                            <div class="d-flex flex-column fw-semibold fs-4">
                                <a href="#" class="link-primary mb-6">Webiste Tempaltes</a>
                                <a href="#" class="link-primary mb-6">Wordpress Templates</a>
                                <a href="#" class="link-primary mb-6">Audio Files</a>
                                <a href="#" class="link-primary">JS Frameworks</a>
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-4">
                            <!--begin::Title-->
                            <h3 class="fw-bold text-gray-900 mb-7">Resources</h3>
                            <!--end::Title-->
                            <!--begin::Links-->
                            <div class="d-flex flex-column fw-semibold fs-4">
                                <a href="#" class="link-primary mb-6">Our Blog</a>
                                <a href="#" class="link-primary mb-6">Our Tutorials</a>
                                <a href="#" class="link-primary mb-6">Announcements</a>
                                <a href="#" class="link-primary">Our News</a>
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-4">
                            <!--begin::Title-->
                            <h3 class="fw-bold text-gray-900 mb-7">Legal Matter</h3>
                            <!--end::Title-->
                            <!--begin::Links-->
                            <div class="d-flex flex-column fw-semibold fs-4">
                                <a href="#" class="link-primary mb-6">Terms</a>
                                <a href="#" class="link-primary mb-6">Support Policy</a>
                                <a href="#" class="link-primary mb-6">Refund Policy</a>
                                <a href="#" class="link-primary">Privacy</a>
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row g-10 mb-18">
                        <!--begin::Col-->
                        <div class="col-sm-4">
                            <!--begin::Title-->
                            <h3 class="fw-bold text-gray-900 mb-7">Free Products</h3>
                            <!--end::Title-->
                            <!--begin::Links-->
                            <div class="d-flex flex-column fw-semibold fs-4">
                                <a href="#" class="link-primary mb-6">Webiste Tempaltes</a>
                                <a href="#" class="link-primary mb-6">Wordpress Templates</a>
                                <a href="#" class="link-primary mb-6">Audio Files</a>
                                <a href="#" class="link-primary">Free Solutions</a>
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-4">
                            <!--begin::Title-->
                            <h3 class="fw-bold text-gray-900 mb-7">About</h3>
                            <!--end::Title-->
                            <!--begin::Links-->
                            <div class="d-flex flex-column fw-semibold fs-4">
                                <a href="#" class="link-primary mb-6">About Us</a>
                                <a href="#" class="link-primary mb-6">Our Team</a>
                                <a href="#" class="link-primary mb-6">Careers</a>
                                <a href="#" class="link-primary">Contacts</a>
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-4">
                            <!--begin::Title-->
                            <h3 class="fw-bold text-gray-900 mb-7">Studio</h3>
                            <!--end::Title-->
                            <!--begin::Links-->
                            <div class="d-flex flex-column fw-semibold fs-4">
                                <a href="#" class="link-primary mb-6">Clients</a>
                                <a href="#" class="link-primary mb-6">Oppurtunaties</a>
                                <a href="#" class="link-primary mb-6">Hire Experts</a>
                                <a href="#" class="link-primary">Locations</a>
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Card-->
                    <div class="card mb-4 bg-light text-center mb-4">
                        <!--begin::Body-->
                        @include('admin.pages.corporate.includes.icon')
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Sitemap-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
@endsection

@push('js')

@endpush