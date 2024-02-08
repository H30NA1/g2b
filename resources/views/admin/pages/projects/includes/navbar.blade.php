<div class="card mb-8">
    <div class="card-body pt-9 pb-0">
        <!--begin::Details-->
        <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
            <!--begin::Image-->
            <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                <img class="mw-50px mw-lg-75px" src="{{ getFileVersion('/assets/admin/media/svg/brand-logos/volicity-9.svg') }}" alt="image" />
            </div>
            <!--end::Image-->
            <!--begin::Wrapper-->
            <div class="flex-grow-1">
                <!--begin::Head-->
                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                    <!--begin::Details-->
                    <div class="d-flex flex-column">
                        <!--begin::Status-->
                        <div class="d-flex align-items-center mb-1">
                            <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bold me-3">CRM Dashboard</a>
                            <span class="badge badge-light-success me-auto">In Progress</span>
                        </div>
                        <!--end::Status-->
                        <!--begin::Description-->
                        <div class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-500">#1 Tool to get started with Web Apps any Kind & size</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Actions-->
                    <div class="d-flex mb-4">
                        <a href="#" class="btn btn-sm btn-bg-light btn-active-color-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add User</a>
                        <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>
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
                                    <a href="{{ route('admin.pages.file-manager.index') }}" class="menu-link px-3">File management</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-1">
                                    <a href="{{ \Route::current()->getName() == 'admin.pages.projects.settings'  ? '#project-settings' : route('admin.pages.projects.settings') }}" class="menu-link px-3">Settings</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 3-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Head-->
                <!--begin::Info-->
                <div class="d-flex flex-wrap justify-content-start">
                    <!--begin::Stats-->
                    <div class="d-flex flex-wrap">
                        <!--begin::Stat-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                                <div class="fs-4 fw-bold">29 Jan, 2024</div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-gray-500">Due Date</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-arrow-down fs-3 text-danger me-2"></i>
                                <div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="75">0</div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-gray-500">Open Tasks</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-arrow-up fs-3 text-success me-2"></i>
                                <div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="15000" data-kt-countup-prefix="$">0</div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-gray-500">Budget Spent</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->
                    </div>
                    <!--end::Stats-->
                    <!--begin::Users-->
                    <div class="symbol-group symbol-hover mb-3">
                        <!--begin::User-->
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                            <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                            <img alt="Pic" src="{{ getFileVersion('/assets/admin/media/avatars/300-11.jpg') }}" />
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
                            <img alt="Pic" src="{{ getFileVersion('/assets/admin/media/avatars/300-7.jpg') }}" />
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
                            <img alt="Pic" src="{{ getFileVersion('/assets/admin/media/avatars/300-20.jpg') }}" />
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                            <img alt="Pic" src="{{ getFileVersion('/assets/admin/media/avatars/300-2.jpg') }}" />
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                            <span class="symbol-label bg-info text-inverse-info fw-bold">P</span>
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                            <img alt="Pic" src="{{ getFileVersion('/assets/admin/media/avatars/300-12.jpg') }}" />
                        </div>
                        <!--end::User-->
                        <!--begin::All users-->
                        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                            <span class="symbol-label bg-dark text-inverse-dark fs-8 fw-bold" data-bs-toggle="tooltip" data-bs-trigger="hover" title="View more users">+42</span>
                        </a>
                        <!--end::All users-->
                    </div>
                    <!--end::Users-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Details-->
        <div class="separator"></div>
        <!--begin::Nav-->
        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary py-5 me-6 {{ \Route::current()->getName() == 'admin.pages.projects.overview'  ? 'active' : '' }}" href="{{ route('admin.pages.projects.overview') }}">Overview</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary py-5 me-6 {{ \Route::current()->getName() == 'admin.pages.projects.targets'  ? 'active' : '' }}" href="{{ route('admin.pages.projects.targets') }}">Targets</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary py-5 me-6 {{ \Route::current()->getName() == 'admin.pages.projects.budgets'  ? 'active' : '' }}" href="{{ route('admin.pages.projects.budgets') }}">Budget</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary py-5 me-6 {{ \Route::current()->getName() == 'admin.pages.projects.users'  ? 'active' : '' }}" href="{{ route('admin.pages.projects.users') }}">Users</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary py-5 me-6 {{ \Route::current()->getName() == 'admin.pages.projects.files'  ? 'active' : '' }}" href="{{ route('admin.pages.projects.files') }}">Files</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary py-5 me-6 {{ \Route::current()->getName() == 'admin.pages.projects.activities'  ? 'active' : '' }}" href="{{ route('admin.pages.projects.activities') }}">Activity</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary py-5 me-6 {{ \Route::current()->getName() == 'admin.pages.projects.settings'  ? 'active' : '' }}" href="{{ route('admin.pages.projects.settings') }}">Settings</a>
            </li>
            <!--end::Nav item-->
        </ul>
        <!--end::Nav-->
    </div>
</div>