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
            <li>
                <h5 class="bc-title">Permission</h5>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('web.index') }}">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Home </a>
            </li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Permission</a></li>
        </ol>
    </div>
    @include('includes.components.notify')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive active-projects manage-client dt-filter">
                            <div class="tbl-caption">
                                <h4 class="heading mb-0">Permission List</h4>
                            </div>
                            <table id="empoloyees-tblwrapper" class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $permission)
                                    <tr>
                                        <td><span>{{ @$permission->role }}</span></td>
                                        <td>
                                            <span>{{ formatDate($permission->created_at) }}</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('web.permission.detail', ['id' => $permission->id]) }}" class="btn btn-secondary btn-sm me-2">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.modal.delete')
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