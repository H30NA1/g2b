@extends('layouts.master')

@section('title', 'Server Info')

@push('css')
<style>
    .custom-fixed-bottom {
        left: auto;
        width: calc(100vw - 15rem);
    }
</style>
@endpush

@section('content')
<div class="content-body">
    <!-- row -->
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('web.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('web.permission.index') }}">Permission</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Permission</a></li>
        </ol>
    </div>
    @include('includes.components.notify')
    <div class="container">
        <div class="row">
            <h4 class="heading mb-3">Roles Setting</h4>
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h4 class="heading mb-0">{{ ucwords(@$role->user->profile->first_name . ' ' . @$role->user->profile->last_name) }}</h4>
                                    <span>{{ @$role->user->email }}</span>
                                </div>

                            </div>
                            <div class="card-body p-0">
                                <div class="all_user1">
                                    <span class="mb-0 heading">Actions</span>
                                    <div class="d-flex member">
                                        <h4 class="heading mb-0" style="margin-right: 46px !important;">GET</h4>
                                        <h4 class="heading mb-0" style="margin-right: 45px !important;">POST</h4>
                                        <h4 class="heading mb-0 pe-0" style="margin-right: 55px !important;">PUT</h4>
                                        <h4 class="heading mb-0 pe-0" style="margin-right: 40px !important;">DELETE</h4>
                                        <h4 class="heading mb-0 pe-0" style="margin-right: 35px !important;">HEAD</h4>
                                        <h4 class="heading mb-0 pe-0" style="margin-right: 55px !important;">OPTIONS</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('web.permission.update', ['id' => $id]) }}" method="POST">
                        @csrf
                        @foreach ($permission['permission'] as $permission)
                        <h4 class="heading mb-0 manage">
                            <i class="fa-solid fa-user-plus text-primary me-2 mb-3 "></i> {{ @$permission['label'] }}
                        </h4>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <ul>
                                        @foreach ($permission['routes'] as $route)
                                        <li class="right-check">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class=" mb-0">{{ $route['name'] }}</h6>
                                                <div class="d-flex">
                                                    @foreach ($route['method'] as $key => $method)
                                                    <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                        <input type="hidden" name="permission[{{ $route['route'] }}][{{ $key }}]" value="0">
                                                        <input type="checkbox" name="permission[{{ $route['route'] }}][{{ $key }}]" class="form-check-input" id="customCheckBox1" value="1" {{ $method == 1 ? 'checked' : '' }}>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="card-footer fixed-bottom custom-fixed-bottom">
                            <a class="btn btn-danger light ms-1" href="{{ route('web.permission.index') }}">Back</a>
                            <button type="submit" class="btn btn-primary">UPDATE</button>
                            <a href="{{ route('web.permission.refresh', ['id' => $id]) }}" class="btn btn-secondary" style="margin-left: 20px;">Refresh</a>
                            <a href="{{ route('web.permission.reset', ['id' => $id]) }}" class="btn btn-secondary" style="margin-left: 20px;">Reset</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            var documentHeight = $(document).height();
            var windowHeight = $(window).height();
            var scrollTop = $(window).scrollTop();

            if (documentHeight - (scrollTop + windowHeight) === 0) {
                // reached the bottom, remove fixed-bottom class
                $('.custom-fixed-bottom').removeClass('fixed-bottom');
            } else {
                // not at the bottom, add fixed-bottom class
                $('.custom-fixed-bottom').addClass('fixed-bottom');
            }
        });
    });
</script>
@endpush