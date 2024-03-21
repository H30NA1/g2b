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
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Tasks</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Update</a></li>
        </ol>
    </div>
    @include('includes.components.notify')
    <div class="container-fluid">
        <div class="row">
            <div class="offcanvas-body">
                <div class="container-fluid">
                    <form action="{{ route('web.tasks.update',['id' => $task->id]) }}" method="POST" name="form-submit">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6 mb-3">
                                <label for="exampleFormControlInputfirst" class="form-label">Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="exampleFormControlInputfirst" placeholder="Name" name="name" value="{{ $task->name ?? "" }}">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Project<span class="text-danger">*</span></label>
                                <select class="default-select style-1 form-control" name="project_id">
                                    @if($projects)
                                        @foreach($projects as $project)
                                            <option value="{{ $project->id }}" {{ $task->project_id == $project->id ? "selected" : "" }}>{{ $project->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label for="exampleFormControlInputthree" class="form-label">Deadline</label>
                                <input type="date" class="form-control" id="exampleFormControlInputthree" name="deadline" value="{{ formatDate($task->deadline) ?? "" }}">
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Status<span class="text-danger">*</span></label>
                                <select class="default-select style-1 form-control" name="status">
                                    <option value="open" {{ $task->status == "open" ? "selected" : "" }}>Open</option>
                                    <option value="progressing" {{ $task->status == "progressing" ? "selected" : "" }}>Progressing</option>
                                    <option value="testing" {{ $task->status == "testing" ? "selected" : "" }}>Testing</option>
                                    <option value="resolved" {{ $task->status == "resolved" ? "selected" : "" }}>Resolved</option>
                                    <option value="confirmation" {{ $task->status == "confirmation" ? "selected" : "" }}>Confirmation</option>
                                    <option value="pending" {{ $task->status == "pending" ? "selected" : "" }}>Pending</option>
                                    <option value="closed" {{ $task->status == "closed" ? "selected" : "" }}>Closed</option>
                                </select>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Priority<span class="text-danger">*</span></label>
                                <select class="default-select style-1 form-control" name="priority">
                                    <option value="low" {{ $task->priority == "low" ? "selected" : "" }}>Low</option>
                                    <option value="medium" {{ $task->priority == "medium" ? "selected" : "" }}>Medium</option>
                                    <option value="high" {{ $task->priority == "high" ? "selected" : "" }}>High</option>
                                    <option value="urgent" {{ $task->priority == "urgent" ? "selected" : "" }}>Urgent</option>
                                </select>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Assigned to<span class="text-danger">*</span></label>
                                <select id="assigned-user-select" class="default-select style-1 form-control" name="assigned_id">
                                    @if(!empty($users))
                                        @foreach($users as $user)
                                            <option {{ $task->tasks?->user?->id == $user->id ? "selected" : "" }} value="{{ $user->id }}">{{ $user->username }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-xl-12 mb-3">
                                <label class="form-label">Description</label>
                                <textarea rows="3" class="form-control" name="description">{!! $task->description ?? "" !!}</textarea>
                            </div>

                        </div>
                        <div>
                            <a class="btn btn-danger light ms-1" href="{{ route('web.tasks.index') }}">Back</a>
                            <button class="btn btn-primary me-1">Update</button>
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
        // $('#assigned-user-select').select2({
        //     allowClear: true,
        //     multiple: true
        // });
        // $('#assigned-user-select').on('change', function(e){
        //     console.log('zzz')
        // });
    });
</script>
@endpush