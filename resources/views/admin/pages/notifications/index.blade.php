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
                <a href="javascript:void(0)">Notifications</a>
            </li>
        </ol>
    </div>
    @include('includes.components.notify')
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="heading mb-0">Notifications</h4>
            </div>
            <div class="col-xl-12">
                <div id="requests" class="tab-pane fade active show" role="tabpanel">
                    <div class="card border-0 pb-0">
                        <div class="card-body p-0">
                            <div id="DZ_W_Todo4" class="widget-media dz-scroll height370 my-4 px-4">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="#unread" data-bs-toggle="tab" class="nav-link active show" aria-selected="false" role="tab" tabindex="-1">Unread
                                            @if (isset($notifications['unread']) && $notifications['unread']->count() > 0)
                                            <span class="badge badge-sm badge-danger  rounded-circle text-white ms-2">{{ $notifications['unread']->count() }}</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#read" data-bs-toggle="tab" class="nav-link " aria-selected="true" role="tab" tabindex="-1">Read
                                            @if (isset($notifications['read']) && $notifications['read']->count() > 0)
                                            <span class="badge badge-sm badge-danger  rounded-circle text-white ms-2">{{ $notifications['read']->count() }}</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#delete" data-bs-toggle="tab" class="nav-link" aria-selected="true" role="tab" tabindex="-1">Delete
                                            @if (isset($notifications['deleted']) && $notifications['deleted']->count() > 0)
                                            <span class="badge badge-sm badge-danger  rounded-circle text-white ms-2">{{ $notifications['deleted']->count() }}</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#history" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">History</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt30">
                                    @include('pages.notifications.components.unread')
                                    @include('pages.notifications.components.read')
                                    @include('pages.notifications.components.delete')
                                    @include('pages.notifications.components.history')
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