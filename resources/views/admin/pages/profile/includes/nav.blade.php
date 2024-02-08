<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.pages.profile.index'  ? 'active' : '' }}" href="{{ route('admin.pages.profile.index') }}">Overview</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.pages.profile.settings'  ? 'active' : '' }}" href="{{ route('admin.pages.profile.settings') }}">Settings</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.pages.profile.security'  ? 'active' : '' }}" href="{{ route('admin.pages.profile.security') }}">Security</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.pages.profile.activity'  ? 'active' : '' }}" href="{{ route('admin.pages.profile.activity') }}">Activity</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.pages.profile.logs'  ? 'active' : '' }}" href="{{ route('admin.pages.profile.logs') }}">Logs</a>
    </li>
    <!--end::Nav item-->
</ul>