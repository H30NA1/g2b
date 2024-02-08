<div class="d-flex my-4">
    <!--begin::Menu-->
    <div class="me-0">
        <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
            <i class="ki-solid ki-dots-horizontal fs-2x"></i>
        </button>
        <!--begin::Menu 3-->
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
            <!--begin::Heading-->
            <div class="menu-item px-3">
                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Actions</div>
            </div>
            <!--end::Heading-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">Assign Project</a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link flex-stack px-3">Assign Task
                    <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future task and project">
                        <i class="ki-outline ki-information fs-6"></i>
                    </span></a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">Create Schedule</a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-3 my-1">
                <a href="{{ \Route::current()->getName() == 'admin.pages.profile.settings'  ? '#profile-settings' : route('admin.pages.profile.settings') }}" class="menu-link px-3">Settings</a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu 3-->
    </div>
    <!--end::Menu-->
</div>