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
            <li class="breadcrumb-item"><a href="{{ route('web.servers.index') }}">Servers</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">{{ isset($server) ? 'Edit' : 'create' }} Server</a></li>
        </ol>
    </div>
    @include('includes.components.notify')
    <div class="container-fluid">
        <div class="row">
            <div class="offcanvas-body">
                <div class="container-fluid">
                    @if(isset($server))
                    @include('pages.core.servers.components.edit')
                    @else
                    @include('pages.core.servers.components.create')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('.project-multiple').select2();
</script>
<script>
    // Function to create the layout for each selected option
    function createProjectLayout(option) {
        // Replace this with the actual project data retrieval logic
        let projectName = $('#project-selected option[value="' + option + '"]').text(); // Option name as project name
        let projectActions = `<button class="btn btn-danger" type="button" onclick="removeProject('${option}')">Remove</button>`;

        let projectUsername = ``;
        // Create the layout for each selected option
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

        // Append the created layout to a container (replace 'container-id' with the actual container ID)
        $('#container_id').append(projectLayout);
    }

    // Function to remove a project option
    function removeProject(option) {
        // Remove the option from the dropdown
        $('#project-selected option[value="' + option + '"]').remove();

        // Remove the corresponding layout
        $('#project-layout-' + option).remove();

        // Clear the existing layouts if no options are selected
        if ($('#project-selected').val() === null) {
            $('#container_id').empty();
        }
    }

    // Add on change event listener to dynamically update layouts
    $('#project-selected').on('change', function() {
        // Clear the existing layouts
        $('#container_id').empty();

        // Get the updated selected options and create layouts
        let updatedOptions = $(this).val();
        updatedOptions.forEach(function(option) {
            createProjectLayout(option);
        });
    });
</script>
@endpush