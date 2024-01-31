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
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Careers List</h1>
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
                        <li class="breadcrumb-item text-muted">Careers</li>
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
            <!--begin::Careers - List-->
            <div class="card">
                <!--begin::Body-->
                <div class="card-body p-lg-17">
                    <!--begin::Hero-->
                    <div class="position-relative mb-17">
                        <!--begin::Overlay-->
                        <div class="overlay overlay-show">
                            <!--begin::Image-->
                            <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-250px" style="background-image:url('{{ getFileVersion('/assets/admin/media/stock/1600x800/img-1.jpg') }}')"></div>
                            <!--end::Image-->
                            <!--begin::layer-->
                            <div class="overlay-layer rounded bg-black" style="opacity: 0.4"></div>
                            <!--end::layer-->
                        </div>
                        <!--end::Overlay-->
                        <!--begin::Heading-->
                        <div class="position-absolute text-white mb-8 ms-10 bottom-0">
                            <!--begin::Title-->
                            <h3 class="text-white fs-2qx fw-bold mb-3 m">Careers at KeenThemes</h3>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <div class="fs-5 fw-semibold">You sit down. You stare at your screen. The cursor blinks.</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Heading-->
                    </div>
                    <!--end::-->
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-lg-row mb-17">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid me-0 me-lg-20">
                            <!--begin::Job-->
                            <div class="mb-17">
                                <!--begin::Description-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <h4 class="fs-1 text-gray-800 w-bolder mb-6">Junior React Developer</h4>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <p class="fw-semibold fs-4 text-gray-600 mb-2">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                                    <!--end::Text-->
                                </div>
                                <!--end::Description-->
                                <!--begin::Accordion-->
                                <!--begin::Section-->
                                <div class="m-0">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_1_1">
                                        <!--begin::Icon-->
                                        <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                            <i class="ki-outline ki-minus-square toggle-on text-primary fs-1"></i>
                                            <i class="ki-outline ki-plus-square toggle-off fs-1"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Requirements</h4>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div id="kt_job_1_1" class="collapse show fs-6 ms-1">
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed"></div>
                                    <!--end::Separator-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="m-0">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_1_2">
                                        <!--begin::Icon-->
                                        <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                            <i class="ki-outline ki-minus-square toggle-on text-primary fs-1"></i>
                                            <i class="ki-outline ki-plus-square toggle-off fs-1"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">What is your job role?</h4>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div id="kt_job_1_2" class="collapse fs-6 ms-1">
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed"></div>
                                    <!--end::Separator-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="m-0">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_1_3">
                                        <!--begin::Icon-->
                                        <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                            <i class="ki-outline ki-minus-square toggle-on text-primary fs-1"></i>
                                            <i class="ki-outline ki-plus-square toggle-off fs-1"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Job Candidate Benefits</h4>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div id="kt_job_1_3" class="collapse fs-6 ms-1">
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed"></div>
                                    <!--end::Separator-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="m-0">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_1_4">
                                        <!--begin::Icon-->
                                        <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                            <i class="ki-outline ki-minus-square toggle-on text-primary fs-1"></i>
                                            <i class="ki-outline ki-plus-square toggle-off fs-1"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Application Terms</h4>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div id="kt_job_1_4" class="collapse fs-6 ms-1">
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->
                                <!--end::Accordion-->
                                <!--begin::Apply-->
                                <a href="{{ route('admin.pages.careers.apply') }}" class="btn btn-sm btn-primary mt-5">Apply Now</a>
                                <!--end::Apply-->
                            </div>
                            <!--end::Job-->
                            <!--begin::Job-->
                            <div class="mb-10 mb-lg-0">
                                <!--begin::Description-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <h4 class="fs-1 text-gray-800 w-bolder mb-6">UI/UX Designer</h4>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <p class="fw-semibold fs-4 text-gray-600 mb-2">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                                    <!--end::Text-->
                                </div>
                                <!--end::Description-->
                                <!--begin::Accordion-->
                                <!--begin::Section-->
                                <div class="m-0">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_2_1">
                                        <!--begin::Icon-->
                                        <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                            <i class="ki-outline ki-minus-square toggle-on text-primary fs-1"></i>
                                            <i class="ki-outline ki-plus-square toggle-off fs-1"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Requirements</h4>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div id="kt_job_2_1" class="collapse show fs-6 ms-1">
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed"></div>
                                    <!--end::Separator-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="m-0">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_2_2">
                                        <!--begin::Icon-->
                                        <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                            <i class="ki-outline ki-minus-square toggle-on text-primary fs-1"></i>
                                            <i class="ki-outline ki-plus-square toggle-off fs-1"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">What is your job role?</h4>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div id="kt_job_2_2" class="collapse fs-6 ms-1">
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed"></div>
                                    <!--end::Separator-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="m-0">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_2_3">
                                        <!--begin::Icon-->
                                        <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                            <i class="ki-outline ki-minus-square toggle-on text-primary fs-1"></i>
                                            <i class="ki-outline ki-plus-square toggle-off fs-1"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Job Candidate Benefits</h4>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div id="kt_job_2_3" class="collapse fs-6 ms-1">
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed"></div>
                                    <!--end::Separator-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="m-0">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_2_4">
                                        <!--begin::Icon-->
                                        <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                            <i class="ki-outline ki-minus-square toggle-on text-primary fs-1"></i>
                                            <i class="ki-outline ki-plus-square toggle-off fs-1"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Application Terms</h4>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div id="kt_job_2_4" class="collapse fs-6 ms-1">
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->
                                <!--end::Accordion-->
                                <!--begin::Apply-->
                                <a href="{{ route('admin.pages.careers.apply') }}" class="btn btn-sm btn-primary mt-5">Apply Now</a>
                                <!--end::Apply-->
                            </div>
                            <!--end::Job-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Sidebar-->
                        <div class="flex-lg-row-auto w-100 w-lg-275px w-xxl-350px">
                            <!--begin::Careers about-->
                            <div class="card bg-light">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Top-->
                                    <div class="mb-7">
                                        <!--begin::Title-->
                                        <h2 class="fs-1 text-gray-800 w-bolder mb-6">About Us</h2>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <p class="fw-semibold fs-6 text-gray-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Top-->
                                    <!--begin::Item-->
                                    <div class="mb-8">
                                        <!--begin::Title-->
                                        <h4 class="text-gray-700 w-bolder mb-0">Requirements</h4>
                                        <!--end::Title-->
                                        <!--begin::Section-->
                                        <div class="my-2">
                                            <!--begin::Row-->
                                            <div class="d-flex align-items-center mb-3">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->
                                            <div class="d-flex align-items-center mb-3">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->
                                            <div class="d-flex align-items-center mb-3">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="mb-8">
                                        <!--begin::Title-->
                                        <h4 class="text-gray-700 w-bolder mb-0">Our Achievements</h4>
                                        <!--end::Title-->
                                        <!--begin::Section-->
                                        <div class="my-2">
                                            <!--begin::Row-->
                                            <div class="d-flex align-items-center mb-3">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->
                                            <div class="d-flex align-items-center mb-3">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->
                                            <div class="d-flex align-items-center mb-3">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Link-->
                                    <a href="pages/blog/post.html" class="link-primary fs-6 fw-semibold">Explore More</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Careers about-->
                        </div>
                        <!--end::Sidebar-->
                    </div>
                    <!--end::Layout-->
                    <!--begin::Section-->
                    <div class="mb-19">
                        <!--begin::Top-->
                        <div class="text-center mb-12">
                            <!--begin::Title-->
                            <h3 class="fs-2hx text-gray-900 mb-5">Publications</h3>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <div class="fs-5 text-muted fw-semibold">Our goal is to provide a complete and robust theme solution
                                <br />to boost all of our customer’s project deployments
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Top-->
                        <!--begin::Row-->
                        <div class="row g-10">
                            <!--begin::Col-->
                            <div class="col-md-4">
                                <!--begin::Publications post-->
                                <div class="card-xl-stretch me-md-6">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="{{ getFileVersion('/assets/admin/media/stock/600x400/img-73.jpg') }}">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{ getFileVersion('/assets/admin/media/stock/600x400/img-73.jpg') }}')"></div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                            <i class="ki-outline ki-eye fs-2x text-white"></i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                    <!--end::Overlay-->
                                    <!--begin::Body-->
                                    <div class="m-0">
                                        <!--begin::Title-->
                                        <a href="{{ route('admin.pages.user-profile.overview') }}" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3 mb-5">We’ve been focused on making a the from also not been afraid to and step away been focused create eye</div>
                                        <!--end::Text-->
                                        <!--begin::Content-->
                                        <div class="fs-6 fw-bold">
                                            <!--begin::Author-->
                                            <a href="apps/projects/users.html" class="text-gray-700 text-hover-primary">Jane Miller</a>
                                            <!--end::Author-->
                                            <!--begin::Date-->
                                            <span class="text-muted">on Mar 21 2021</span>
                                            <!--end::Date-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Publications post-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-4">
                                <!--begin::Publications post-->
                                <div class="card-xl-stretch mx-md-3">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="{{ getFileVersion('/assets/admin/media/stock/600x400/img-74.jpg') }}">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{ getFileVersion('/assets/admin/media/stock/600x400/img-74.jpg') }}')"></div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                            <i class="ki-outline ki-eye fs-2x text-white"></i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                    <!--end::Overlay-->
                                    <!--begin::Body-->
                                    <div class="m-0">
                                        <!--begin::Title-->
                                        <a href="{{ route('admin.pages.user-profile.overview') }}" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3 mb-5">We’ve been focused on making the from v4 to v5 but we have also not been afraid to step away been focused</div>
                                        <!--end::Text-->
                                        <!--begin::Content-->
                                        <div class="fs-6 fw-bold">
                                            <!--begin::Author-->
                                            <a href="apps/projects/users.html" class="text-gray-700 text-hover-primary">Cris Morgan</a>
                                            <!--end::Author-->
                                            <!--begin::Date-->
                                            <span class="text-muted">on Apr 14 2021</span>
                                            <!--end::Date-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Publications post-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-4">
                                <!--begin::Publications post-->
                                <div class="card-xl-stretch ms-md-6">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="{{ getFileVersion('/assets/admin/media/stock/600x400/img-47.jpg') }}">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{ getFileVersion('/assets/admin/media/stock/600x400/img-47.jpg') }}')"></div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                            <i class="ki-outline ki-eye fs-2x text-white"></i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                    <!--end::Overlay-->
                                    <!--begin::Body-->
                                    <div class="m-0">
                                        <!--begin::Title-->
                                        <a href="{{ route('admin.pages.user-profile.overview') }}" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3 mb-5">We’ve been focused on making the from v4 to v5 but we’ve also not been afraid to step away been focused</div>
                                        <!--end::Text-->
                                        <!--begin::Content-->
                                        <div class="fs-6 fw-bold">
                                            <!--begin::Author-->
                                            <a href="apps/projects/users.html" class="text-gray-700 text-hover-primary">Carles Nilson</a>
                                            <!--end::Author-->
                                            <!--begin::Date-->
                                            <span class="text-muted">on May 14 2021</span>
                                            <!--end::Date-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Publications post-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Card-->
                    <div class="card mb-4 bg-light text-center">
                        <!--begin::Body-->
                        <div class="card-body py-12">
                            <!--begin::Icon-->
                            <a href="#" class="mx-4">
                                <img src="{{ getFileVersion('/assets/admin/media/svg/brand-logos/facebook-4.svg') }}" class="h-30px my-2" alt="" />
                            </a>
                            <!--end::Icon-->
                            <!--begin::Icon-->
                            <a href="#" class="mx-4">
                                <img src="{{ getFileVersion('/assets/admin/media/svg/brand-logos/instagram-2-1.svg') }}" class="h-30px my-2" alt="" />
                            </a>
                            <!--end::Icon-->
                            <!--begin::Icon-->
                            <a href="#" class="mx-4">
                                <img src="{{ getFileVersion('/assets/admin/media/svg/brand-logos/github.svg') }}" class="h-30px my-2" alt="" />
                            </a>
                            <!--end::Icon-->
                            <!--begin::Icon-->
                            <a href="#" class="mx-4">
                                <img src="{{ getFileVersion('/assets/admin/media/svg/brand-logos/behance.svg') }}" class="h-30px my-2" alt="" />
                            </a>
                            <!--end::Icon-->
                            <!--begin::Icon-->
                            <a href="#" class="mx-4">
                                <img src="{{ getFileVersion('/assets/admin/media/svg/brand-logos/pinterest-p.svg') }}" class="h-30px my-2" alt="" />
                            </a>
                            <!--end::Icon-->
                            <!--begin::Icon-->
                            <a href="#" class="mx-4">
                                <img src="{{ getFileVersion('/assets/admin/media/svg/brand-logos/twitter.svg') }}" class="h-30px my-2" alt="" />
                            </a>
                            <!--end::Icon-->
                            <!--begin::Icon-->
                            <a href="#" class="mx-4">
                                <img src="{{ getFileVersion('/assets/admin/media/svg/brand-logos/dribbble-icon-1.svg') }}" class="h-30px my-2" alt="" />
                            </a>
                            <!--end::Icon-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Careers - List-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
@endsection

@push('js')

@endpush