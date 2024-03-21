@extends('layouts.master')

@section('title', 'Server Info')

@push('css')

@endpush

@section('content')
<div class="content-body" style="min-height: 1032px;">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li>
                <h5 class="bc-title">Dashboard</h5>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('web.index') }}">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Home
                </a>
            </li>
            <li class="breadcrumb-item active"><a href="{{ route('web.apps.index') }}">Apps</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Previous Build</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="card-body svg-area card">
                <div class="card-header"> {{ $app->name }}</div>
                <div class="row">
                    @foreach ($app->versions as $build)
                    <div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
                        <div class="svg-icons-ov">
                            <div class="svg-icons-prev">
                                @if ($app->platform == 1)
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
                                    <g fill="#1126e7" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <g transform="scale(5.12,5.12)">
                                            <path d="M15,3c-6.61547,0 -12,5.38453 -12,12v20c0,6.61547 5.38453,12 12,12h20c6.61547,0 12,-5.38453 12,-12v-20c0,-6.61547 -5.38453,-12 -12,-12zM15,5h20c5.53453,0 10,4.46547 10,10v20c0,5.53453 -4.46547,10 -10,10h-20c-5.53453,0 -10,-4.46547 -10,-10v-20c0,-5.53453 4.46547,-10 10,-10zM11.61523,18.06641c-0.703,0 -1.2207,0.50116 -1.2207,1.16016c0,0.65 0.5177,1.15039 1.2207,1.15039c0.703,0 1.22266,-0.50039 1.22266,-1.15039c0,-0.659 -0.51966,-1.16016 -1.22266,-1.16016zM22.03711,18.63672c-3.639,0 -5.92383,2.54853 -5.92383,6.64453c0,4.087 2.24083,6.65234 5.92383,6.65234c3.674,0 5.90625,-2.57434 5.90625,-6.65234c0,-4.087 -2.25025,-6.64353 -5.90625,-6.64453zM34.9668,18.63672c-2.768,0 -4.61523,1.50272 -4.61523,3.76172c0,1.863 1.04584,2.97181 3.33984,3.50781l1.63477,0.39648c1.679,0.395 2.41797,0.97441 2.41797,1.94141c0,1.125 -1.16019,1.94141 -2.74219,1.94141c-1.6951,0 -2.87303,-0.76391 -3.04102,-1.9668h-1.95313c0.141,2.268 2.0298,3.7168 4.8418,3.7168c3.006,0 4.88672,-1.51931 4.88672,-3.94531c0,-1.907 -1.07183,-2.96236 -3.67383,-3.56836l-1.39648,-0.34375c-1.652,-0.387 -2.32031,-0.90555 -2.32031,-1.81055c0,-1.143 1.03775,-1.88867 2.59375,-1.88867c1.477,0 2.49469,0.72748 2.67969,1.89648h1.91602c-0.114,-2.136 -1.99336,-3.63867 -4.56836,-3.63867zM22.03711,20.47266c2.409,0 3.89453,1.86459 3.89453,4.80859c0,2.926 -1.48653,4.81641 -3.89453,4.81641c-2.434,0 -3.91016,-1.88941 -3.91016,-4.81641c0,-2.944 1.51916,-4.80759 3.91016,-4.80859zM10.67578,22.05664v9.57031h1.88086v-9.57031z"></path>
                                        </g>
                                    </g>
                                </svg>
                                @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-android" viewBox="0 0 16 16">
                                    <path d="M2.76 3.061a.5.5 0 0 1 .679.2l1.283 2.352A8.9 8.9 0 0 1 8 5a8.9 8.9 0 0 1 3.278.613l1.283-2.352a.5.5 0 1 1 .878.478l-1.252 2.295C14.475 7.266 16 9.477 16 12H0c0-2.523 1.525-4.734 3.813-5.966L2.56 3.74a.5.5 0 0 1 .2-.678ZM5 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m6 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                </svg>
                                @endif
                            </div>
                            <div class="svg-classname">Version {{ $build->version }}</div>
                            <div class="svg-icon-popup">
                                <a href="javascript:;" data-bs-toggle="modal" onclick="displayQRCode(
                                    '{!! $build->data !!}', 
                                    '{{ $build->image }}',
                                    '{{ $build->title }}')" class="btn btn-sm btn-brand">
                                    <i class="fa-solid fa-image"></i>
                                </a>
                                <a href="javascript:;" data-bs-toggle="modal" onclick="displayQRContent({{ $build->content }})" data-bs-target="#version_modal" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.modal.qr-code')
@include('includes.modal.version-detail')
@endsection

@push('js')

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

    function displayQRContent(data) {
        $('#version_content').empty();
        $('#version_modal').modal('show');
        var permissionObj = JSON.parse(data.permission);
        var activityArr = JSON.parse(data.activity);

        // Create a <div> for permission
        var permissionDiv = $('<div>').addClass('permission-container');
        permissionDiv.append('<h3>Permissions:</h3>');

        // Iterate over permission object and create <p> elements for each permission
        $.each(permissionObj, function(key, value) {
            var permissionText = $('<p>').text(key + ': ' + value.description);
            permissionDiv.append(permissionText);
        });

        // Append permission <div> to the content <div>
        $('#version_content').append(permissionDiv);

        $('#version_content').append('<hr>');

        // Create a <div> for activities
        var activityDiv = $('<div>').addClass('activity-container');
        activityDiv.append('<h3>Activities:</h3>');

        // Iterate over activity array and create <p> elements for each activity
        $.each(activityArr, function(index, activity) {
            var activityText = $('<p>').text('Name: ' + activity.name + ', Launcher: ' + activity.isLauncher);
            activityDiv.append(activityText);
        });

        // Append activity <div> to the content <div>
        $('#version_content').append(activityDiv);
    }
</script>
@endpush