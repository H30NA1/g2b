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
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Task</a></li>
        </ol>
        <a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1">+ Add Task</a>
    </div>
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            @include('includes.components.notify')
            <h5 class="mb-0">Tasks Summary</h5>
            <div class="d-flex align-items-center">
                <div class="icon-box  icon-box-sm task-tab me-2">
                    <a href="task-summary.html">
                        <svg width="20" height="20" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.50032 3H2.66699V8.83333H8.50032V3Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.6668 3H11.8335V8.83333H17.6668V3Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.6668 12.1667H11.8335V18H17.6668V12.1667Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.50032 12.1667H2.66699V18H8.50032V12.1667Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
                <a href="{{ route('web.tasks.create') }}" class="btn btn-primary btn-sm ms-2">+ Add Task</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row task">
                            <div class="col-xl-2 col-sm-4 col-6">
                                <div class="task-summary">
                                    <div class="d-flex align-items-center">
                                        <h2 class="text-primary count">8</h2>
                                        <span>Not Started</span>
                                    </div>
                                    <p>Tasks assigne</p>
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4 col-6">
                                <div class="task-summary">
                                    <div class="d-flex align-items-center">
                                        <h2 class="text-purple count">7</h2>
                                        <span>In Progress</span>
                                    </div>
                                    <p>Tasks assigne</p>
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4 col-6">
                                <div class="task-summary">
                                    <div class="d-flex align-items-center">
                                        <h2 class="text-warning count">13</h2>
                                        <span>Testing</span>
                                    </div>
                                    <p>Tasks assigne</p>
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4 col-6">
                                <div class="task-summary">
                                    <div class="d-flex align-items-center">
                                        <h2 class="text-danger count">11</h2>
                                        <span>Awaiting</span>
                                    </div>
                                    <p>Tasks assigne</p>
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4 col-6">
                                <div class="task-summary">
                                    <div class="d-flex align-items-center">
                                        <h2 class="text-success count">21</h2>
                                        <span>Complete</span>
                                    </div>
                                    <p>Tasks assigne</p>
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-4 col-6">
                                <div class="task-summary">
                                    <div class="d-flex align-items-center">
                                        <h2 class="text-danger count">16</h2>
                                        <span>pending</span>
                                    </div>
                                    <p>Tasks assigne</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive active-projects task-table">
                            <div class="tbl-caption">
                                <h4 class="heading mb-0">Task</h4>
                            </div>
                            <table id="empoloyeestbl2" class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Deadline</th>
                                        <th>Assigned To</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                        <th class="text-end">Priority</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(!empty($tasks))
                                    @foreach($tasks as $task)
                                        <tr>
                                            <td>
                                                <div class="products">
                                                    <div>
                                                        <h6>{{ $task->name ?? "" }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <select data-task-id="{{ $task->id }}" class="select-change-status default-select status-select">
                                                    <option {{ $task->status == "complete" ? "selected" : "" }} value="complete">Complete</option>
                                                    <option {{ $task->status == "pending" ? "selected" : "" }} value="pending">Pending</option>
                                                    <option {{ $task->status == "testing" ? "selected" : "" }} value="testing">Testing</option>
                                                    <option {{ $task->status == "progress" ? "selected" : "" }} value="progress">In Progress</option>
                                                </select>
                                            </td>
                                            <td><span>{{ formatDate($task->deadline) ?? "" }}</span></td>
                                            <td>
                                                {{ $task->tasks?->user?->username ?? "" }}
                                            </td>
                                            <td>
                                                {{ $task->tasks?->user?->email ?? "" }}
                                            </td>
                                            <td>
                                                <a target="_blank" href="{{ route('web.tasks.detail', ['id' => $task->id]) }}" class="btn btn-secondary btn-sm me-2">Edit</a>
                                            </td>
                                            <td class="text-end">
                                                <select data-task-id="{{ $task->id }}" class="select-change-priority default-select status-select">
                                                    <option {{ $task->priority == "medium" ? "selected" : "" }} value="medium">Medium</option>
                                                    <option {{ $task->priority == "high" ? "selected" : "" }} value="high">High</option>
                                                    <option {{ $task->priority == "low" ? "selected" : "" }} value="low">Low</option>
                                                    <option {{ $task->priority == "urgent" ? "selected" : "" }} value="urgent">Urgent</option>
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
            $('.select-change-status select').on('change',function (e) {
                e.preventDefault();

                $('#updateModalCenter').modal('show');

                let task_id = parseInt($(this).data('task-id'));
                let selected_value = $(this).val();
                let updateForm = document.getElementById('updateForm');

                $('<input>',{
                    type: 'hidden',
                    name: 'status',
                    value: selected_value
                }).appendTo(updateForm);

                let url = @JSON(route('web.tasks.change',['id' => 'changed_id']));
                let actionUrl = url.replace('changed_id',task_id);
                updateForm.action = actionUrl;
            });

            $('.select-change-priority select').on('change',function (e) {
                e.preventDefault();

                $('#updateModalCenter').modal('show');

                let task_id = parseInt($(this).data('task-id'));
                let selected_value = $(this).val();
                let updateForm = document.getElementById('updateForm');

                $('<input>',{
                    type: 'hidden',
                    name: 'priority',
                    value: selected_value
                }).appendTo(updateForm);

                let url = @JSON(route('web.tasks.change',['id' => 'changed_id']));
                let actionUrl = url.replace('changed_id',task_id);
                updateForm.action = actionUrl;
            });
        });
    </script>
@endpush