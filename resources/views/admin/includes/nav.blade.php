<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.account.overview.index'  ? 'active' : '' }}" href="{{ route('admin.account.overview.index') }}">Overview</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.account.settings.index'  ? 'active' : '' }}" href="{{ route('admin.account.settings.index') }}">Settings</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.account.security.index'  ? 'active' : '' }}" href="{{ route('admin.account.security.index') }}">Security</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.account.activity.index'  ? 'active' : '' }}" href="{{ route('admin.account.activity.index') }}">Activity</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.account.billing.index'  ? 'active' : '' }}" href="{{ route('admin.account.billing.index') }}">Billing</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.account.statements.index'  ? 'active' : '' }}" href="{{ route('admin.account.statements.index') }}">Statements</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.account.referrals.index'  ? 'active' : '' }}" href="{{ route('admin.account.referrals.index') }}">Referrals</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.account.api-keys.index'  ? 'active' : '' }}" href="{{ route('admin.account.api-keys.index') }}">API Keys</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ \Route::current()->getName() == 'admin.account.logs.index'  ? 'active' : '' }}" href="{{ route('admin.account.logs.index') }}">Logs</a>
    </li>
    <!--end::Nav item-->
</ul>