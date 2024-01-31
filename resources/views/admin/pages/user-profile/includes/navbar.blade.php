<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.pages.user-profile.overview'  ? 'active' : '' }}" href="{{ route('admin.pages.user-profile.overview') }}">Overview</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.pages.user-profile.projects'  ? 'active' : '' }}" href="{{ route('admin.pages.user-profile.projects') }}">Projects</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.pages.user-profile.campaigns'  ? 'active' : '' }}" href="{{ route('admin.pages.user-profile.campaigns') }}">Campaigns</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.pages.user-profile.documents'  ? 'active' : '' }}" href="{{ route('admin.pages.user-profile.documents') }}">Documents</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.pages.user-profile.followers'  ? 'active' : '' }}" href="{{ route('admin.pages.user-profile.followers') }}">Followers</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.pages.user-profile.activities'  ? 'active' : '' }}" href="{{ route('admin.pages.user-profile.activities') }}">Activity</a>
    </li>
    <!--end::Nav item-->
</ul>