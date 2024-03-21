@extends('layouts.master')

@section('title', 'Server Info')

@push('css')
<!-- Daterange picker -->
<link href="{{ getFileVersion('/assets/vendor/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
<!-- Pick date -->
<link rel="stylesheet" href="{{ getFileVersion('/assets/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}">
@endpush

@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        @include('includes.components.notify')
        <form action="{{ isset($employee) ? route('web.employees.update', ['id' => $employee->id]) : route('web.employees.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <!-- row -->
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="clearfix">
                        <div class="card card-bx profile-card author-profile m-b30">
                            <div class="card-body">
                                <div class="p-5">
                                    <div class="author-profile">
                                        <div class="author-media">
                                            <img id="avatar-preview" src="{{ isset($employee->profile->avatar) ? $employee->profile->avatar : getFileVersion('/assets/images/tab/1.jpg') }}" width="130" height="130" alt="">
                                            <div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
                                                <input type="file" name="avatar" class="update-flie" onchange="previewImage('avatar-preview', this)">
                                                <i class="fa fa-camera"></i>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <h6 class="title">
                                                <input type="text" name="username" class="form-control" value="{{ old('username', @$employee->username) }}" required>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-form">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-12 m-b30">
                                            <input type="text" name="x_url" class="form-control" value="{{ old('x_url', @$employee->profile->x_url) }}" placeholder="X URL">
                                        </div>
                                        <div class="col-xl-12 m-t10 m-b30">
                                            <input type="text" name="facebook_url" class="form-control" value="{{ old('facebook_url', @$employee->profile->facebook_url) }}" placeholder="Facebook URL">
                                        </div>
                                        <div class="col-xl-12 m-t10 m-b30">
                                            <input type="text" name="instagram_url" class="form-control" value="{{ old('instagram_url', @$employee->profile->instagram_url) }}" placeholder="Instagram URL">
                                        </div>
                                        <div class="col-xl-12 m-t10 m-b30">
                                            <input type="text" name="tiktok_url" class="form-control" value="{{ old('tiktok_url', @$employee->profile->tiktok_url) }}" placeholder="TikTok URL">
                                        </div>
                                        <div class="col-xl-12 m-t10 m-b30">
                                            <input type="text" name="youtube_url" class="form-control" value="{{ old('youtube_url', @$employee->profile->youtube_url) }}" placeholder="Youtube URL">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="card profile-card card-bx m-b30">
                        <div class="card-header">
                            <h6 class="title">Account setup</h6>
                        </div>
                        <div class="profile-form">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="first_name" class="form-control" value="{{ old('first_name', @$employee->profile->first_name) }}" maxlength="50" required>
                                    </div>
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">Surname</label>
                                        <input type="text" name="last_name" class="form-control" value="{{ old('last_name', @$employee->profile->last_name) }}" maxlength="50" required>
                                    </div>
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ old('email', @$employee->email) }}" maxlength="50" required>
                                    </div>
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">Birth</label>
                                        <input id="mdate" name="birthday" class="form-control" value="{{ old('birthday', @$employee->profile->birthday) }}">
                                    </div>
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">Phone</label>
                                        <input type="text" name="tel" class="form-control numberOnly" value="{{ old('tel', @$employee->profile->tel) }}" minlength="10" maxlength="11" required>
                                    </div>
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">Address</label>
                                        <input type="text" name="address" class="form-control" value="{{ old('address', @$employee->profile->address) }}">
                                    </div>
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">Gender</label>
                                        <select name="sex" class="default-select form-control" id="validationCustom05">
                                            <option data-display="Select">Please select</option>
                                            <option value="male" {{ old('sex', @$employee->profile->sex) == 'male' ? 'selected' : ''}}>Male</option>
                                            <option value="female" {{ old('sex', @$employee->profile->sex) == 'female' ? 'selected' : ''}}>Female</option>
                                            <option value="other" {{ old('sex', @$employee->profile->sex)  == 'other' ? 'selected' : ''}}>Other</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">Province</label>
                                        <select name="province_id" class=" form-control" id="provinceSelect">
                                            <option value="">Select Province</option>
                                            @if (isset($employee->profile->province))
                                            <option value="{{ $employee->profile->province_id }}" selected>{{ $employee->profile->province->name }}</option>
											@endif
                                        </select>
                                    </div>
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">district</label>
                                        <select name="district_id" class=" form-control" id="districtSelect">
                                            <option value="">Select District</option>
                                            @if (isset($employee->profile->district))
                                            <option value="{{ $employee->profile->district_id }}" selected>{{ $employee->profile->district->name }}</option>
											@endif
                                        </select>
                                    </div>
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">Ward</label>
                                        <select name="ward_id" class="form-control" id="wardSelect">
                                            <option value="">Select Ward</option>
                                            @if (isset($employee->profile->ward))
                                            <option value="{{ $employee->profile->ward_id }}" selected>{{ $employee->profile->ward->name }}</option>
											@endif
                                        </select>
                                    </div>
                                    <div class="col-sm-12 m-b30">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" name="description" id="" cols="30" rows="10" max="1000"> {{ old('description', @$employee->profile->description) }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card profile-card card-bx m-b30">
                        <div class="card-header">
                            <h6 class="title">Professional Setup</h6>
                        </div>
                        <div class="profile-form">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">Specialty</label>
                                        <input type="text" name="specialty" class="form-control" value="{{ old('specialty', @$employee->professional->specialty) }}">
                                    </div>
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">Role</label>
                                        <div class="dropdown bootstrap-select default-select form-control wide">
                                            <select class="default-select form-control wide" tabindex="null" name="role">
                                                @if (isset($employee->settings->role) && $employee->settings->role == 'super_admin')
                                                <option value="super_admin" {{  old('role', isset($employee->settings->role) ? $employee->settings->role : null) == 'super_admin' ? 'selected' : '' }}>Super Admin</option>
                                                @else
                                                <option value="">Please select Role</option>
                                                <option value="admin" {{  old('role', isset($employee->settings->role) ? $employee->settings->role : null) == 'admin' ? 'selected' : '' }}>Admin</option>
                                                <option value="employee" {{  old('role', isset($employee->settings->role) ? $employee->settings->role : null) == 'employee' ? 'selected' : '' }}>Employee</option>
                                                <option value="freelancer" {{  old('role', isset($employee->settings->role) ? $employee->settings->role : null) == 'freelancer' ? 'selected' : '' }}>Freelancer</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">Skills</label>
                                        <div class="dropdown bootstrap-select default-select form-control wide">
                                            <select class="default-select form-control wide skill-multiple" tabindex="null" name="skills[]" multiple="multiple">
                                                <option value="HTML" {{ in_array("HTML", old('skills', isset($employee->professional->skills) ? $employee->professional->skills : [])) ? 'selected' : '' }}>HTML</option>
                                                <option value="CSS" {{  in_array("CSS", old('skills', isset($employee->professional->skills) ? $employee->professional->skills : [])) ? 'selected' : '' }}>CSS</option>
                                                <option value="JavaScript" {{  in_array("JavaScript", old('skills', isset($employee->professional->skills) ? $employee->professional->skills : [])) ? 'selected' : '' }}>JavaScript</option>
                                                <option value="PHP" {{  in_array("PHP", old('skills', isset($employee->professional->skills) ? $employee->professional->skills : [])) ? 'selected' : '' }}>PHP</option>
                                                <option value="REACT" {{  in_array("REACT", old('skills', isset($employee->professional->skills) ? $employee->professional->skills : [])) ? 'selected' : '' }}>REACT</option>
                                                <option value="VUE" {{  in_array("VUE", old('skills', isset($employee->professional->skills) ? $employee->professional->skills : [])) ? 'selected' : '' }}>VUE</option>
                                                <option value="NEXT" {{  in_array("NEXT", old('skills', isset($employee->professional->skills) ? $employee->professional->skills : [])) ? 'selected' : '' }}>NEXT</option>
                                                <option value="NEST" {{  in_array("NEST", old('skills', isset($employee->professional->skills) ? $employee->professional->skills : [])) ? 'selected' : '' }}>NEST</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card profile-card card-bx m-b30">
                        <div class="card-header">
                            <h6 class="title">Password Setup</h6>
                        </div>
                        <div class="profile-form">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">Password Confirmation</label>
                                        <input type="password" name="password_confirmation" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-danger light ms-1" href="{{ route('web.employees.index') }}">Back</a>
                <button type="submit" class="btn btn-primary">{{ isset($employee) ? 'UPDATE' : 'STORE' }}</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
<!-- momment js is must -->
<script src="{{ getFileVersion('/assets/vendor/moment/moment.min.js') }}"></script>
<script src="{{ getFileVersion('/assets/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ getFileVersion('/assets/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
<script src="{{ getFileVersion('/assets/js/plugins-init/material-date-picker-init.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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

    function loadProvince() {
        const provinceSelect = document.getElementById('provinceSelect');

        fetch("{{ route('web.provinces') }}")
            .then(response => response.json())
            .then(provinces => {
                $('#districtSelect').empty();
                $('#districtSelect').append('<option value="">Select District</option>');
                $('#wardSelect').empty();
                $('#wardSelect').append('<option value="">Select Ward</option>');
                provinces.forEach(province => {
                    const existingOption = provinceSelect.querySelector(`option[value="${province.id}"]`);

                    if (!existingOption) {
                        const option = document.createElement('option');
                        option.value = province.id;
                        option.text = province.name;
                        provinceSelect.appendChild(option);
                    }
                });
            })
            .catch(error => console.error('Error fetching provinces:', error));
    }

    function loadDistricts() {
        const districtSelect = document.getElementById('districtSelect');
        const provinceId = $('#provinceSelect').val();

        if (provinceId !== "") {

            const route = `{{ route('web.districts', ['province_code' => 'provinceValue']) }}`;
            const actualRoute = route.replace('provinceValue', provinceId);

            fetch(actualRoute)
                .then(response => response.json())
                .then(states => {
                    $('#wardSelect').empty();
                    $('#wardSelect').append('<option value="">Select Ward</option>');
                    states.forEach(state => {
                        const existingOption = districtSelect.querySelector(`option[value="${state.id}"]`);

                        if (!existingOption) {
                            const option = document.createElement('option');
                            option.value = state.id;
                            option.text = state.name;
                            districtSelect.appendChild(option);
                        }

                    });
                })
                .catch(error => console.error('Error fetching States:', error));
        }
    }

    function loadWards() {
        const wardSelect = document.getElementById('wardSelect');
        const stateId = $('#districtSelect').val();

        if (stateId !== "") {

            const route = `{{ route('web.wards', ['district_code' => 'districtValue']) }}`;
            const actualRoute = route.replace('districtValue', stateId);

            fetch(actualRoute)
                .then(response => response.json())
                .then(cities => {
                    cities.forEach(city => {
                        const existingOption = wardSelect.querySelector(`option[value="${city.id}"]`);

                        if (!existingOption) {
                            const option = document.createElement('option');
                            option.value = city.id;
                            option.text = city.name;
                            wardSelect.appendChild(option);
                        }

                    });
                })
                .catch(error => console.error('Error fetching Cities:', error));
        }
    }

    // Use the click event instead of click for select elements
    $('#provinceSelect').on('click', loadProvince);
    $('#districtSelect').on('click', loadDistricts);
    $('#wardSelect').on('click', loadWards);
</script>
<script>
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
<script>
    $('.skill-multiple').select2();
</script>
@endpush