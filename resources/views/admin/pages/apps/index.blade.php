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
                <h5 class="bc-title">App</h5>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('web.index') }}">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Home
                </a>
            </li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Apps</a></li>
        </ol>
    </div>
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            @include('includes.components.notify')
            <h5 class="mb-0">Apps Summary</h5>
            <div class="d-flex align-items-center">
                <a href="#" id="importButton" class="btn btn-primary btn-sm ms-2">+ Import File</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive active-projects task-table">
                            <div class="tbl-caption">
                                <h4 class="heading mb-0">App</h4>
                            </div>
                            <table id="empoloyeestbl2" class="table">
                                <thead>
                                    <tr>
                                        <th>Project</th>
                                        <th>Name</th>
                                        <th>Created By</th>
                                        <th>Created At</th>
                                        <th>Versions</th>
                                        <th>Platform</th>
                                        <th>Latest Version</th>
                                        <th>Updated Environment</th>
                                        <th>Updated By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($apps))
                                    @foreach($apps as $app)
                                    <tr>
                                        <td>
                                            <div>
                                                <div>
                                                    <h6>{{ $app->project->name ?? "" }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div>
                                                    <h6>{{ $app->name ?? "" }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div>
                                                    <h6>{{ $app->user->username ?? "" }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div>
                                                    <h6>{{ $app->created_at ?? "" }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div>
                                                    <h6>{{ $app->versions ? count($app->versions) : "" }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div>
                                                    <h6>{{ $app->platform == "0" ? "Android" : "IOS" }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div>
                                                    <h6>{{ $app->versions ? @$app->versions->sortByDesc('updated_at')->first()->version : "" }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div>
                                                    <h6>{{ $app->versions ? @$app->versions->sortByDesc('updated_at')->first()->environment : "" }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div>
                                                    <h6>{{ $app->versions ? @$app->versions->sortByDesc('updated_at')->first()->user->username : "" }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown c-pointer">
                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right" style="">
                                                    <a class="dropdown-item" onclick="displayQRCode(
                                                        '{!! $app->data !!}', 
                                                        '{{ $app->image }}',
                                                        '{{ $app->title }}')">QR code</a>
                                                    <a class="dropdown-item btn-danger delete-btn" href="javascript:void(0);" data-app-id="{{ $app->id }}">Delete</a>
                                                    <a class="dropdown-item" href="{{ route('web.apps.previous', ['id' => $app->id]) }}" data-app-id="{{ $app->id }}">Previous Build</a>
                                                </div>
                                            </div>
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
@include('includes.modal.delete')
@include('includes.modal.import')
@include('includes.modal.qr-code')
@endsection

@push('js')
<script>
    // Function to open the modal
    function openDeleteModal(appId) {
        // Assuming you are using Bootstrap's modal functionality
        $('#exampleModalCenter').modal('show');

        // Update the form action URL with the employeeId
        let deleteForm = document.getElementById('deleteForm');
        let actionUrl = `{{ route('web.apps.delete', ['id' => 'appId']) }}`;
        actionUrl = actionUrl.replace('appId', appId);
        deleteForm.action = actionUrl;
    }

    function openImportModal() {
        // Assuming you are using Bootstrap's modal functionality
        $('#importModalCenter').modal('show');

        // Update the form action URL with the employeeId
        let importForm = document.getElementById('importForm');
        let actionUrl = `{{ route('web.apps.upload.file') }}`;
        importForm.action = actionUrl;
    }

    // Attach click event to all delete buttons
    document.addEventListener('DOMContentLoaded', function() {
        let deleteButtons = document.querySelectorAll('.btn-danger'); // Assuming delete buttons have the class 'btn-danger'

        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Get the employee ID from the button or any other way you have it
                let appId = button.dataset.appId; // Assuming you have the employee ID in a data attribute
                openDeleteModal(appId);
            });
        });

        $('#importButton').on('click', function() {
            openImportModal()
        })
    });
</script>
<script src="{{ getFileVersion('/assets/js/easy.qrcode.min.js') }}"></script>
<script type="text/javascript">
    function displayQRCode(data, image, title) {
        $('#qrcode').empty();
        $('#QRCodeModalCenter').modal('show');
        // Define a new QR code with the provided data
        new QRCode(document.getElementById("qrcode"), {
            text: data,
            width: 500,
            height: 500,
            logoWidth: 70,
            logoHeight: 70,
            logo: image,
            colorDark: "#000000",
            colorLight: "#ffffff",
            correctLevel: QRCode.CorrectLevel.H,
            quietZone: 30,
            logoBackgroundTransparent: true,
            title: title,
            titleTop: 505,
            titleFont: "17px Arial",
        });
    }
</script>
@endpush