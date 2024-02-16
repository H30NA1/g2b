@extends('admin.layouts.master')

@section('title', 'G2B Admin')

@push('css')

@endpush

@section('content')
<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">
        <!--begin::Card-->
        @include('admin.pages.file-manager.includes.card')
        <!--end::Card-->
        <!--begin::Card-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header pt-8">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2>Preferences</h2>
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Form-->
                <form class="form" id="kt_file_manager_settings">
                    <!--begin::Input group-->
                    <div class="fv-row row mb-15">
                        <!--begin::Col-->
                        <div class="col-md-3 d-flex align-items-center">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold">Language</label>
                            <!--end::Label-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-9">
                            <!--begin::Input-->
                            <select name="language" aria-label="Select a Language" data-control="select2" data-placeholder="Select a Language..." class="form-select mb-2">
                                <option></option>
                                <option value="id">Bahasa Indonesia - Indonesian</option>
                                <option value="msa">Bahasa Melayu - Malay</option>
                                <option value="ca">Català - Catalan</option>
                                <option value="cs">Čeština - Czech</option>
                                <option value="da">Dansk - Danish</option>
                                <option value="de">Deutsch - German</option>
                                <option value="en">English</option>
                                <option value="en-gb">English UK - British English</option>
                                <option value="es">Español - Spanish</option>
                                <option value="fil">Filipino</option>
                                <option value="fr">Français - French</option>
                                <option value="ga">Gaeilge - Irish (beta)</option>
                                <option value="gl">Galego - Galician (beta)</option>
                                <option value="hr">Hrvatski - Croatian</option>
                                <option value="it">Italiano - Italian</option>
                                <option value="hu">Magyar - Hungarian</option>
                                <option value="nl">Nederlands - Dutch</option>
                                <option value="no">Norsk - Norwegian</option>
                                <option value="pl">Polski - Polish</option>
                                <option value="pt">Português - Portuguese</option>
                                <option value="ro">Română - Romanian</option>
                                <option value="sk">Slovenčina - Slovak</option>
                                <option value="fi">Suomi - Finnish</option>
                                <option value="sv">Svenska - Swedish</option>
                                <option value="vi">Tiếng Việt - Vietnamese</option>
                                <option value="tr">Türkçe - Turkish</option>
                                <option value="el">Ελληνικά - Greek</option>
                                <option value="bg">Български език - Bulgarian</option>
                                <option value="ru">Русский - Russian</option>
                                <option value="sr">Српски - Serbian</option>
                                <option value="uk">Українська мова - Ukrainian</option>
                                <option value="he">עִבְרִית - Hebrew</option>
                                <option value="ur">اردو - Urdu (beta)</option>
                                <option value="ar">العربية - Arabic</option>
                                <option value="fa">فارسی - Persian</option>
                                <option value="mr">मराठी - Marathi</option>
                                <option value="hi">हिन्दी - Hindi</option>
                                <option value="bn">বাংলা - Bangla</option>
                                <option value="gu">ગુજરાતી - Gujarati</option>
                                <option value="ta">தமிழ் - Tamil</option>
                                <option value="kn">ಕನ್ನಡ - Kannada</option>
                                <option value="th">ภาษาไทย - Thai</option>
                                <option value="ko">한국어 - Korean</option>
                                <option value="ja">日本語 - Japanese</option>
                                <option value="zh-cn">简体中文 - Simplified Chinese</option>
                                <option value="zh-tw">繁體中文 - Traditional Chinese</option>
                            </select>
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row row mb-15">
                        <!--begin::Col-->
                        <div class="col-md-3">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mt-2">Date Format</label>
                            <div class="text-muted fs-7">For more info on moment() date formats, please
                                <a href="https://momentjs.com/docs/#/displaying/format/" target="_blank">click here</a>.
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-9">
                            <!--begin::Input-->
                            <select name="dateformat" aria-label="Select a date format" data-hide-search="true" data-control="select2" data-placeholder="Select a date format..." class="form-select mb-2">
                                <option></option>
                                <option value="1">10 Sep 2021, 10:15 AM</option>
                                <option value="2">10/09/2021, 10:15 AM</option>
                                <option value="3">09-10-2021</option>
                                <option value="4">Sunday, September 10th 2010</option>
                            </select>
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row row mb-15">
                        <!--begin::Col-->
                        <div class="col-md-3 d-flex align-items-center">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold">Automatic time zone</label>
                            <!--end::Label-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-9">
                            <!--begin::Switch-->
                            <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                <input class="form-check-input h-30px w-50px" name="autotimezone" type="checkbox" value="" id="autotimezone" />
                                <label class="form-check-label" for="autotimezone">GMT +10:00</label>
                            </div>
                            <!--begin::Switch-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row row mb-15">
                        <!--begin::Col-->
                        <div class="col-md-3">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mt-2">Folder Compression</label>
                            <div class="text-muted fs-7">Default file compression type when downloading folders</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-9">
                            <!--begin::Input-->
                            <select name="compression" aria-label="Select a Compressions type" data-control="select2" data-hide-search="true" data-placeholder="Select a Compressions type..." class="form-select mb-2">
                                <option></option>
                                <option value="1">*.zip</option>
                                <option value="2">*.7z</option>
                                <option value="3">*.rar</option>
                                <option value="4">*.tar.gz</option>
                            </select>
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row row mb-15">
                        <!--begin::Col-->
                        <div class="col-md-3">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold">Sharing Permissions</label>
                            <!--end::Label-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-9">
                            <!--begin::Subtitle-->
                            <label class="fs-6 fw-semibold mb-3">Organisation</label>
                            <!--end::Subtitle-->
                            <!--begin::Options-->
                            <div class="d-flex">
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-30px w-50px" name="org_read" type="checkbox" value="" id="org_read" checked="checked" />
                                    <label class="form-check-label" for="org_read">Read</label>
                                </div>
                                <!--begin::Switch-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-30px w-50px" name="org_write" type="checkbox" value="" id="org_write" checked="checked" />
                                    <label class="form-check-label" for="org_write">Write</label>
                                </div>
                                <!--begin::Switch-->
                            </div>
                            <!--end::Options-->
                            <!--begin::Separator-->
                            <div class="separator mt-6 mb-5"></div>
                            <!--end::Separator-->
                            <!--begin::Subtitle-->
                            <label class="fs-6 fw-semibold mb-3">Public</label>
                            <!--end::Subtitle-->
                            <!--begin::Options-->
                            <div class="d-flex">
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-30px w-50px" name="public_read" type="checkbox" value="" id="public_read" checked="checked" />
                                    <label class="form-check-label" for="public_read">Read</label>
                                </div>
                                <!--begin::Switch-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-30px w-50px" name="public_write" type="checkbox" value="" id="public_write" />
                                    <label class="form-check-label" for="public_write">Write</label>
                                </div>
                                <!--begin::Switch-->
                            </div>
                            <!--end::Options-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Action buttons-->
                    <div class="row mt-12">
                        <div class="col-md-9 offset-md-3">
                            <!--begin::Cancel-->
                            <button type="button" class="btn btn-light me-3">Cancel</button>
                            <!--end::Cancel-->
                            <!--begin::Button-->
                            <button type="button" class="btn btn-primary" id="kt_file_manager_settings_submit">
                                <span class="indicator-label">Save</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                    </div>
                    <!--begin::Action buttons-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->
@endsection

@push('js')

@endpush