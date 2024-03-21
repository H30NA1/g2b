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
            <li class="breadcrumb-item"><a href="javascript:void(0)">Service</a></li>
        </ol>
    </div>

    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="mb-0">Services List</h5>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive active-projects task-table">
                            <div class="tbl-caption">
                                <a href="{{ route('web.services.detail') }}" class="btn btn-primary btn-sm ms-2">+ Add Service</a>
                            </div>
                            <table id="" class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="checkAll" required>
                                                <label class="form-check-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        <th>#</th>
                                        <th>Logo</th>
                                        <th>Name</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($services as $key => $service)
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox11" required>
                                                <label class="form-check-label" for="customCheckBox11"></label>
                                            </div>
                                        </td>
                                        <td><span>{{ $key }}</span></td>
                                        <td>
                                            <div class="products">
                                                <div>
                                                    <img src="{{ isset($service->logo) ? $service->logo : getFileVersion('/assets/images/profile/friends/f1.jpg') }}" class="rounded-circle" alt="" width="100" height="100">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="products">
                                                <div>
                                                    <h6>{{ @$service->name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>{{ formatDate($service->created_at ?? now()) }}</span>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown c-pointer">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right" style="">
                                                    <a class="dropdown-item" href="{{ route('web.services.detail', ['id' => $service->id]) }}">Edit</a>
                                                    <a class="dropdown-item delete-btn" href="javascript:void(0);" data-service-id="{{ $service->id }}">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $services->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@push('js')
<script>
    // Function to open the modal
    function openDeleteModal(serviceId) {
        // Assuming you are using Bootstrap's modal functionality
        $('#exampleModalCenter').modal('show');

        // Update the form action URL with the serverId
        let deleteForm = document.getElementById('deleteForm');
        let actionUrl = `{{ route('web.services.delete', ['id' => 'serverId']) }}`;
        actionUrl = actionUrl.replace('serviceId', serviceId);
        deleteForm.action = actionUrl;
    }

    // Attach click event to all delete buttons
    document.addEventListener('DOMContentLoaded', function() {
        let deleteButtons = document.querySelectorAll('.btn-danger'); // Assuming delete buttons have the class 'btn-danger'

        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Get the service ID from the button or any other way you have it
                let serviceId = button.dataset.serverId; // Assuming you have the service ID in a data attribute
                openDeleteModal(serviceId);
            });
        });
    });
</script>
@endpush