@extends('layouts.master')

@section('title', 'Server Info')

@push('css')
@endpush

@section('content')
<div class="content-body">
    <!-- row -->
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('web.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('web.services.index') }}">Service</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">{{ isset($service) ? 'Edit' : 'create' }} Service</a></li>
        </ol>
    </div>
    @include('includes.components.notify')
    <div class="container-fluid">
        @if(isset($service))
        @include('pages.core.services.components.edit')
        @else
        @include('pages.core.services.components.create')
        @endif
    </div>
</div>
@endsection

@push('js')
<script>
    function previewImage(imageId, input) {
        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById(imageId).src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('.project-multiple').select2();
    $('.server-multiple').select2();
</script>
<script>
    function createProjectLayout(option) {
        let projectName = $('#project-selected option[value="' + option + '"]').text(); // Option name as project name
        let projectActions = `<button class="btn btn-danger" type="button" onclick="removeProject('${option}')">Remove</button>`;

        let projectUsername = ``;
        let projectLayout = `
            <div class="row" id="project-layout-${option}">
                <div class="col-xl-12 col-lg-12">
                    <div class="card profile-card card-bx m-b30">
                        <div class="profile-form">
                            <div class="card-body" >
                                <div class="row">
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">Project name: ${projectName}</label>
                                    </div>
                                    <div class="col-sm-6 m-b30">
                                        ${projectActions}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 m-b30">
                                    <input type="text" name="auth[${option}][username]" class="form-control" value="" placeholder="Enter Username" required>
                                    </div>
                                    <div class="col-sm-6 m-b30">
                                        <input type="password" name="auth[${option}][password]" class="form-control" value=""    placeholder="Enter Password" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `;
        $('#project_container_id').append(projectLayout);
    }

    function removeProject(option) {
        $('#project-selected option[value="' + option + '"]').remove();

        $('#project-layout-' + option).remove();

        if ($('#project-selected').val() === null) {
            $('#project_container_id').empty();
        }
    }

    $('#project-selected').on('change', function() {
        $('#project_container_id').empty();

        let updatedOptions = $(this).val();
        updatedOptions.forEach(function(option) {
            createProjectLayout(option);
        });
    });
</script>
<script>
    function createServerLayout(option) {
        let serverName = $('#server-selected option[value="' + option + '"]').text(); // Option name as project name
        let serverActions = `<button class="btn btn-danger" type="button" onclick="removeServer('${option}')">Remove</button>`;

        let serverUsername = ``;
        let serverLayout = `
            <div class="row" id="server-layout-${option}">
                <div class="col-xl-12 col-lg-12">
                    <div class="card profile-card card-bx m-b30">
                        <div class="profile-form">
                            <div class="card-body" >
                                <div class="row">
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">Server name: ${serverName}</label>
                                    </div>
                                    <div class="col-sm-6 m-b30">
                                        ${serverActions}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 m-b30">
                                    <input type="text" name="auth[${option}][username]" class="form-control" value="" placeholder="Enter Username" required>
                                    </div>
                                    <div class="col-sm-6 m-b30">
                                        <input type="password" name="auth[${option}][password]" class="form-control" value=""    placeholder="Enter Password" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `;

        $('#server_container_id').append(serverLayout);
    }

    function removeServer(option) {
        $('#server-selected option[value="' + option + '"]').remove();

        $('#server-layout-' + option).remove();

        if ($('#server-selected').val() === null) {
            $('#server_container_id').empty();
        }
    }

    $('#server-selected').on('change', function() {
        $('#server_container_id').empty();

        let updatedOptions = $(this).val();
        updatedOptions.forEach(function(option) {
            createServerLayout(option);
        });
    });
</script>
@endpush