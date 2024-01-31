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
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Licenses</h1>
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
            <!--begin::About card-->
            <div class="card">
                <!--begin::Body-->
                <div class="card-body p-5 px-lg-19 py-lg-16">
                    <!--begin::Content main-->
                    <div class="mb-14">
                        <!--begin::Heading-->
                        <div class="mb-15">
                            <!--begin::Title-->
                            <h1 class="fs-2x text-gray-900 mb-6">License Comparision</h1>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <div class="fs-5 text-gray-600 fw-semibold">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Body-->
                        <!--begin::Table-->
                        <div class="mb-14">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-bold fs-6 text-gray-800 text-center border-0 bg-light">
                                            <th class="min-w-200px rounded-start"></th>
                                            <th class="min-w-140px">Regular</th>
                                            <th class="min-w-120px">Multiple</th>
                                            <th class="min-w-100px rounded-end">Extended</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="border-bottom border-dashed">
                                        <tr class="fw-semibold fs-6 text-gray-800 text-center">
                                            <td class="text-start ps-6 fs-4">Number of end products or domains</td>
                                            <td>1</td>
                                            <td>Unlimited</td>
                                            <td>1</td>
                                        </tr>
                                        <tr class="text-center">
                                            <td class="text-start ps-6">
                                                <div class="fw-semibold fs-4 text-gray-800">Free end product</div>
                                            </td>
                                            <td>
                                                <i class="ki-outline ki-check fs-2x text-success"></i>
                                                <i class="ki-outline ki-0 fs-2x text-success"></i>
                                            </td>
                                            <td>
                                                <i class="ki-outline ki-check fs-2x text-success"></i>
                                                <i class="ki-outline ki-0 fs-2x text-success"></i>
                                            </td>
                                            <td>
                                                <i class="ki-outline ki-check fs-2x text-success"></i>
                                                <i class="ki-outline ki-0 fs-2x text-success"></i>
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td class="text-start ps-6">
                                                <div class="fw-semibold fs-4 text-gray-800">End product with paid services</div>
                                            </td>
                                            <td>
                                                <i class="ki-outline ki-0 fs-2x text-danger"></i>
                                                <i class="ki-outline ki-cross fs-2x text-danger"></i>
                                            </td>
                                            <td>
                                                <i class="ki-outline ki-0 fs-2x text-danger"></i>
                                                <i class="ki-outline ki-cross fs-2x text-danger"></i>
                                            </td>
                                            <td>
                                                <i class="ki-outline ki-check fs-2x text-success"></i>
                                                <i class="ki-outline ki-0 fs-2x text-success"></i>
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td class="text-start ps-6">
                                                <div class="fw-semibold fs-4 text-gray-800">Use in derivative themes or “generators”</div>
                                            </td>
                                            <td>
                                                <i class="ki-outline ki-0 fs-2x text-danger"></i>
                                                <i class="ki-outline ki-cross fs-2x text-danger"></i>
                                            </td>
                                            <td>
                                                <i class="ki-outline ki-0 fs-2x text-danger"></i>
                                                <i class="ki-outline ki-cross fs-2x text-danger"></i>
                                            </td>
                                            <td>
                                                <i class="ki-outline ki-0 fs-2x text-danger"></i>
                                                <i class="ki-outline ki-cross fs-2x text-danger"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Table-->
                        <!--begin::Block-->
                        <div class="mb-20 pb-lg-20">
                            <!--begin::Title-->
                            <h2 class="fw-bold text-gray-900 mb-8">Regular License:</h2>
                            <!--end::Title-->
                            <!--begin::List-->
                            <ul class="fs-4 fw-semibold mb-6">
                                <li>
                                    <span class="text-gray-700">E-commerce site</span>
                                </li>
                                <li class="my-2">
                                    <span class="text-gray-700">Company business activity dashboard</span>
                                </li>
                                <li>
                                    <span class="text-gray-700">Customer support center</span>
                                </li>
                            </ul>
                            <!--end::List-->
                            <!--begin::Text-->
                            <div class="fs-4 fw-semibold text-gray-700 mb-13">If users can free browse and use your website or Admin Panel is used only as interface(eCommerce site) to sell other's products you can use Regular license.
                                <br />If you are going to use the item on one domain and multiple subdomains, you only require one Licence.(ex: www.
                                <span class="text-gray-900">domain.com</span>/site1 – site2.
                                <span class="text-gray-900">domain.com</span>– site.3.
                                <span class="text-gray-900">domain.com</span>).
                            </div>
                            <!--end::Text-->
                            <!--begin::Title-->
                            <h2 class="fw-bold text-gray-900 mb-7">Multisite License:</h2>
                            <!--end::Title-->
                            <!--begin::List-->
                            <ul>
                                <li>
                                    <span class="fs-4 fw-semibold text-gray-700">It works the same as the Standard License, but you can use it in unlimited count of projects.</span>
                                </li>
                            </ul>
                            <!--end::List-->
                            <!--begin::Text-->
                            <div class="fs-4 fw-semibold text-gray-700 mb-13">If users can free browse and use your website is used only as interface(eCommerce site) to sell other's products you can use Regular license. if you are going to use the item on multiple domains, then you will need to purchase a Licence for each domain or buy Multisite License.
                                <br />(ex: www.domain-site-
                                <span class="text-gray-900">one.com</span>– www.domain-site.
                                <span class="text-gray-900">two.com</span>– www.site-three-
                                <span class="text-gray-900">domain.com</span>).
                            </div>
                            <!--end::Text-->
                            <!--begin::Title-->
                            <h2 class="fw-bold text-gray-900 mb-8">Extended License:</h2>
                            <!--end::Title-->
                            <!--begin::List-->
                            <ul class="fs-4 fw-semibold mb-6">
                                <li>
                                    <span class="text-gray-700">SaaS projects</span>
                                </li>
                                <li class="my-2">
                                    <span class="text-gray-700">Photo stock with PRO subscription</span>
                                </li>
                                <li>
                                    <span class="text-gray-700">Cloud service with paid plans</span>
                                </li>
                            </ul>
                            <!--end::List-->
                            <!--begin::Text-->
                            <div class="fs-4 fw-semibold text-gray-700">E-commerce site Company business activity dashboard Customer support center If users can free browse and use your website is used only as interface(eCommerce site) to sell other's products you can use Regular license. If you are going to use the item on one domain and multiple subdomains, you only require one Licence . (ex: www.domain.com/site1 – site2.domain.com – site.3.domain.com).</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Block-->
                        <!--end::Body-->
                    </div>
                    <!--end::Content main-->
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
            <!--end::About card-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
@endsection

@push('js')

@endpush