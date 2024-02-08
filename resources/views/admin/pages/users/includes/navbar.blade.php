<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.pages.users.overview'  ? 'active' : '' }}" href="{{ route('admin.pages.users.overview') }}">Overview</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.pages.users.projects'  ? 'active' : '' }}" href="{{ route('admin.pages.users.projects') }}">Projects</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.pages.users.campaigns'  ? 'active' : '' }}" href="{{ route('admin.pages.users.campaigns') }}">Campaigns</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.pages.users.documents'  ? 'active' : '' }}" href="{{ route('admin.pages.users.documents') }}">Documents</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.pages.users.followers'  ? 'active' : '' }}" href="{{ route('admin.pages.users.followers') }}">Followers</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.pages.users.index'  ? 'active' : '' }}" href="{{ route('admin.pages.users.index') }}">Activity</a>
    </li>
    <!--end::Nav item-->
</ul>