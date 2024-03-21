@extends('layouts.master')

@section('title', 'Server Info')

@push('css')
<link href="{{ getFileVersion('/assets/css/hieu.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="content-body" style="min-height: 724px;">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('web.index') }}">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="javascript:void(0)">Reports</a>
            </li>
        </ol>
    </div>
    @include('includes.components.notify')
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="heading mb-0">Reports</h4>
            </div>
            <div class="col-xl-12">
                <div id="requests" class="tab-pane fade active show" role="tabpanel">
                    <div class="card border-0 pb-0">
                        <div class="card-body p-0">
                            <div id="DZ_W_Todo4" class="widget-media dz-scroll height370 my-4 px-4">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="#request-authorization" data-bs-toggle="tab" class="nav-link active show" aria-selected="true" role="tab" tabindex="-1">Request Authorization
                                            @if (isset($userRequests) && $userRequests['authorization']->count() > 0)
                                            <span class="badge badge-sm badge-danger  rounded-circle text-white ms-2">{{ $userRequests['authorization']->count() }}</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#request-overtime" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">Request Overtime
                                            @if (isset($userRequests) && $userRequests['overtime']->count() > 0)
                                            <span class="badge badge-sm badge-danger  rounded-circle text-white ms-2">{{ $userRequests['overtime']->count() }}</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#request-leave" data-bs-toggle="tab" class="nav-link " aria-selected="false" role="tab" tabindex="-1">Request Leave
                                            @if (isset($userRequests) && $userRequests['leave']->count() > 0)
                                            <span class="badge badge-sm badge-danger  rounded-circle text-white ms-2">{{ $userRequests['leave']->count() }}</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#request-reset-account" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">Request Reset Account
                                            @if (isset($userRequests) && $userRequests['reset-account']->count() > 0)
                                            <span class="badge badge-sm badge-danger  rounded-circle text-white ms-2">{{ $userRequests['reset-account']->count() }}</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#request-history" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">Request History</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt30">
                                    @include('pages.reports.components.authorization')
                                    @include('pages.reports.components.overtime')
                                    @include('pages.reports.components.leave')
                                    @include('pages.reports.components.reset-account')
                                    @include('pages.reports.components.history')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush