@extends('layouts.master')

@section('title', 'Server Info')

@push('css')

@endpush

@section('content')
<div class="content-body">
    <!-- row -->
    <div class="page-titles">
        <ol class="breadcrumb">
            <li>
                <h5 class="bc-title">Task</h5>
            </li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Home </a>
            </li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Projects</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Permissions</a></li>
        </ol>
    </div>
    @include('includes.components.notify')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive active-projects task-table">
                            <div class="tbl-caption">
                                <h4 class="heading mb-0">Permissions</h4>
                            </div>
                            <table id="empoloyeestbl2" class="table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th class="text-end">Permission</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($user_project->isNotEmpty())
                                    @foreach($user_project as $user)
                                        <tr>
                                            <td>
                                                <div class="products">
                                                    <div>
                                                        <h6>{{ $user->user->username }}</h6>
{{--                                                        <span>INV-100023456</span>--}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="products">
                                                    <div>
                                                        <h6>{{ $user->user->email }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <select class="permission-select default-select status-select" data-user-id="{{ $user->user_id }}" data-project-id="{{ $project->id }}">
                                                    @foreach(EPermission::PERMISSION_ARRAY as $permission)
                                                        <option {{ $user->permission == $permission ? "selected" : "" }} value="{{ $permission }}">{{ $permission }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('includes.modal.update')

@push('js')
<script>
    $(document).ready(function() {
        $('select').on('change',function (e) {
            e.preventDefault();

            $('#updateModalCenter').modal('show');

            let user_id = parseInt($(this).data('user-id'));
            let project_id = parseInt($(this).data('project-id'));
            let selected_value = $(this).val();
            let updateForm = document.getElementById('updateForm');

            $('<input>',{
                type: 'hidden',
                name: 'user_id',
                value: user_id
            }).appendTo(updateForm);

            $('<input>',{
                type: 'hidden',
                name: 'selected_value',
                value: selected_value
            }).appendTo(updateForm);

            let url = @JSON(route('web.projects.update.permission',['id' => 'changed_id']));
            let actionUrl = url.replace('changed_id',project_id);
            updateForm.action = actionUrl;

        });
    });
</script>
@endpush