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
            </ol>
        </div>
        @include('includes.components.notify')
        <div class="container-fluid">
            <div class="row">
                <div class="offcanvas-body">
                    <div class="container-fluid">
                        <form action="{{ route('web.projects.update',['id' => $project->id]) }}" method="POST" name="form-submit">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 mb-3">
                                    <label for="exampleFormControlInputfirst" class="form-label">Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="exampleFormControlInputfirst" placeholder="Name" name="name" value="{{ $project->name ?? "" }}">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label for="exampleFormControlInputthree" class="form-label">Start Date<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="exampleFormControlInputthree" name="began_at" value="{{ $project->began_at ?? "" }}">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label for="exampleFormControlInputfour" class="form-label">End Date<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="exampleFormControlInputfour" name="deadline_at" value="{{ $project->deadline_at ?? "" }}">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Status<span class="text-danger">*</span></label>
                                    <select class="default-select style-1 form-control" name="status">
                                        <option data-display="Select" value="" {{ $project->status == "" ? "selected" : "" }}>Status</option>
                                        <option value="in_progress" {{ $project->status == "in_progress" ? "selected" : "" }}>In Progress</option>
                                        <option value="pending" {{ $project->status == "pending" ? "selected" : "" }}>Pending</option>
                                        <option value="completed" {{ $project->status == "completed" ? "selected" : "" }}>Completed</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Priority<span class="text-danger">*</span></label>
                                    <select class="default-select style-1 form-control" name="priority">
                                        <option data-display="Select" value="" {{ $project->priority == "" ? "selected" : "" }}>Priority</option>
                                        <option value="high" {{ $project->priority == "high" ? "selected" : "" }}>High</option>
                                        <option value="medium" {{ $project->priority == "medium" ? "selected" : "" }}>Medium</option>
                                        <option value="low" {{ $project->priority == "low" ? "selected" : "" }}>Low</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Visibility<span class="text-danger">*</span></label>
                                    <select class="default-select style-1 form-control" name="visibility">
                                        <option data-display="Select" value="" {{ $project->visibility == "" ? "selected" : "" }}>Visibility</option>
                                        <option value="public" {{ $project->visibility == "public" ? "selected" : "" }}>Public</option>
                                        <option value="private" {{ $project->visibility == "private" ? "selected" : "" }}>Private</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Assigned to<span class="text-danger">*</span></label>
                                    <select id="assigned-user-select" class="style-1 form-control" name="assigned_id[]" multiple="multiple">
{{--                                        <option data-display="Select" value="" {{ old('assigned_id') == "" ? "selected" : "" }}>Assigned</option>--}}
{{--                                        @if(!empty($users))--}}
{{--                                            @foreach($users as $user)--}}
{{--                                                <option value="{{ $user->id }}">{{ $user->username }}</option>--}}
{{--                                            @endforeach--}}
{{--                                        @endif--}}
                                    </select>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Permission<span class="text-danger">*</span></label>
                                    <select class="default-select style-1 form-control" name="assigned_permission">
                                        <option data-display="Select" value="" {{ old('assigned_permission') == "" ? "selected" : "" }}>Permission</option>
                                        <option value="admin" {{ $project->users->first()->permission == "admin" ? "selected" : "" }}>admin</option>
                                        <option value="read" {{ $project->users->first()->permission == "read" ? "selected" : "" }}>read</option>
                                        <option value="write" {{ $project->users->first()->permission == "write" ? "selected" : "" }}>write</option>
                                        <option value="create" {{ $project->users->first()->permission == "create" ? "selected" : "" }}>create</option>
                                    </select>
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea rows="3" class="form-control" name="description">{!! nl2br($project->description) !!} </textarea>
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label class="form-label">Summary</label>
                                    <textarea rows="3" class="form-control" name="summary">{!! nl2br($project->summary) !!}</textarea>
                                </div>

                            </div>
                            <div>
                                <a class="btn btn-danger light ms-1" href="{{ route('web.projects.index') }}">Back</a>
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
            $('#assigned-user-select').select2({
                ajax: {
                    url: '{{ route("web.projects.user.permission",['id' => $project->id]) }}',
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                }
            });
        });
    </script>
@endpush