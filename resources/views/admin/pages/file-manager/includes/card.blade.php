<div class="card card-flush pb-0 bgi-position-y-center bgi-no-repeat mb-10" style="background-size: auto calc(100% + 10rem); background-position-x: 100%; background-image: url('{{ getFileVersion('/assets/admin/media/illustrations/sketchy-1/4.png') }}')">
    <!--begin::Card header-->
    <div class="card-header pt-10">
        <div class="d-flex align-items-center">
            <!--begin::Icon-->
            <div class="symbol symbol-circle me-5">
                <div class="symbol-label bg-transparent text-primary border border-secondary border-dashed">
                    <i class="ki-outline ki-abstract-47 fs-2x text-primary"></i>
                </div>
            </div>
            <!--end::Icon-->
            <!--begin::Title-->
            <div class="d-flex flex-column">
                <h2 class="mb-1">File Manager</h2>
                <div class="text-muted fw-bold">
                    <a href="#">Keenthemes</a>
                    <span class="mx-3">|</span>
                    <a href="#">File Manager</a>
                    <span class="mx-3">|</span>2.6 GB
                    <span class="mx-3">|</span>758 items
                </div>
            </div>
            <!--end::Title-->
        </div>
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pb-0">
        <!--begin::Navs-->
        <div class="d-flex overflow-auto h-55px">
            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-semibold flex-nowrap">
                <!--begin::Nav item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary me-6 {{ \Route::current()->getName() == 'admin.pages.file-manager.index'  ? 'active' : '' }}" href="{{ route('admin.pages.file-manager.index') }}">Files</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class=" nav-item">
                    <a class="nav-link text-active-primary me-6 {{ \Route::current()->getName() == 'admin.pages.file-manager.settings'  ? 'active' : '' }}" href="{{ route('admin.pages.file-manager.settings') }}">Settings</a>
                </li>
                <!--end::Nav item-->
            </ul>
        </div>
        <!--begin::Navs-->
    </div>
    <!--end::Card body-->
</div>