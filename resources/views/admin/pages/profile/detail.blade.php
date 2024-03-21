@extends('layouts.master')

@section('title', 'Server Info')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
	.cover-photo {
		background: url("{{ $user->profile->background_image }}") !important;
		background-size: cover !important;
		background-position: center !important;
		background-repeat: no-repeat !important;
		max-width: 1586px;
		max-height: 250px;
	}
</style>
@endpush

@section('content')
<div class="content-body">
	<div class="page-titles">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
		</ol>
	</div>
	@include('includes.components.notify')
	<div class="container-fluid">
		<form action="{{ route('web.profile.update') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<!-- row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="profile card card-body px-3 pt-3 pb-0">
						<div class="profile-head">
							<div class="photo-content">
								<div id="cover-photo" class="cover-photo rounded" onclick="uploadImage('cover-photo-input')"></div>
								<input type="file" name="background_image" id="cover-photo-input" style="display: none" accept="image/*" onchange="previewImage('cover-photo', this)">
							</div>
							<div class="profile-info">
								<div id="profile-photo" class="profile-photo" onclick="uploadImage('profile-photo-input')">
									<img id="AvatarPreview" src="{{ isset($user->profile->avatar) ? $user->profile->avatar : getFileVersion('/assets/images/profile/profile.png') }}" class="img-fluid rounded-circle" alt="">
								</div>
								<input type="file" name="avatar" id="profile-photo-input" style="display: none" accept="image/*" onchange="previewImage('profile-photo', this)">
								<div class="profile-details">
									<div class="profile-name px-3 pt-2">
										<h4 class="text-primary mb-0">{{ isset($user->profile->first_name) && isset($user->profile->last_name) ? ucwords($user->profile->first_name . ' ' . $user->profile->last_name) : ucwords($user->username) }} </h4>
										<p>{{ ucwords($user->professional->specialty) }}</p>
									</div>
									<div class="profile-email px-2 pt-2">
										<h4 class="text-muted mb-0">{{ $user->email }}</h4>
										<p>Email</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-4">
					<div class="card profile-card card-bx m-b30">
						<div class="card-header">
							<h6 class="title">Social setup</h6>
						</div>
						<div class="profile-form">
							<div class="card-body">
								<div class="row">
									<div class="col-xl-12 m-b30">
										<label class="form-label btn btn-primary" style="background-color: #55acee;">X <i class="fab fa-twitter"></i></label>
										<input type="text" name="x_url" class="form-control" value="{{ @$user->profile->x_url }}" placeholder="X URL">
									</div>
									<div class="col-xl-12 m-t10 m-b30">
										<label class="form-label btn btn-primary" style="background-color: #3b5998;">Facebook <i class="fab fa-facebook-f"></i></label>
										<input type="text" name="facebook_url" class="form-control" value="{{ @$user->profile->facebook_url }}" placeholder="Facebook URL">
									</div>
									<div class="col-xl-12 m-t10 m-b30">
										<label class="form-label btn btn-primary" style="background-color: #ac2bac;">Instagram <i class="fab fa-instagram"></i></label>
										<input type="text" name="instagram_url" class="form-control" value="{{ @$user->profile->instagram_url }}" placeholder="Instagram URL">
									</div>
									<div class="col-xl-12 m-t10 m-b30">
										<label class="form-label btn btn-primary"> TikTok <i class="fab fa-tiktok"></i></label>
										<input type="text" name="tiktok_url" class="form-control" value="{{ @$user->profile->tiktok_url }}" placeholder="TikTok URL">
									</div>
									<div class="col-xl-12 m-t10 m-b30">
										<label class="form-label btn btn-primary" style="background-color: #ed302f;">Youtube <i class="fab fa-youtube"></i></label>
										<input type="text" name="youtube_url" class="form-control" value="{{ @$user->profile->youtube_url }}" placeholder="Youtube URL">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-lg-8">
					<div class="card profile-card card-bx m-b30">
						<div class="card-header">
							<h6 class="title">Profile setup</h6>
						</div>
						<div class="profile-form">
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6 m-b30">
										<label class="form-label">Name</label>
										<input type="text" name="first_name" class="form-control" value="{{ @$user->profile->first_name }}">
									</div>
									<div class="col-sm-6 m-b30">
										<label class="form-label">Surname</label>
										<input type="text" name="last_name" class="form-control" value="{{ @$user->profile->last_name }}">
									</div>
									<div class="col-sm-6 m-b30">
										<label class="form-label">Email</label>
										<input type="email" name="email" class="form-control" value="{{ @$user->email }}">
									</div>
									<div class="col-sm-6 m-b30">
										<label class="form-label">Birth</label>
										<input type="date" name="birthday" class="form-control" value="{{ @$user->profile->birthday }}">
									</div>
									<div class="col-sm-6 m-b30">
										<label class="form-label">Phone</label>
										<input type="number" name="tel" class="form-control" value="{{ @$user->profile->tel }}" minlength="10" maxlength="11">
									</div>
									<div class="col-sm-6 m-b30">
										<label class="form-label">Address</label>
										<input type="text" name="address" class="form-control" value="{{ @$user->profile->address }}">
									</div>
									<div class="col-sm-6 m-b30">
										<label class="form-label">Gender</label>
										<select name="sex" class="default-select form-control" id="validationCustom05">
											<option data-display="Select">Please select</option>
											<option value="male" {{ isset($user->profile->sex) && $user->profile->sex == 'male' ? 'selected' : ''}}>Male</option>
											<option value="female" {{ isset($user->profile->sex) && $user->profile->sex == 'female' ? 'selected' : ''}}>Female</option>
											<option value="other" {{ isset($user->profile->sex) && $user->profile->sex == 'other' ? 'selected' : ''}}>Other</option>
										</select>
									</div>
									<div class="col-sm-6 m-b30">
                                        <label class="form-label">Province</label>
                                        <select name="province" class=" form-control" id="provinceSelect">
                                            <option value="">Select Province</option>
											@if (isset(auth()->user()->profile->province_id))
                                            <option value="{{ auth()->user()->profile->province_id }}">{{ auth()->user()->profile->province->name }}</option>
											@endif
										</select>
                                    </div>
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">district</label>
                                        <select name="district" class=" form-control" id="districtSelect">
                                            <option value="">Select District</option>
											@if (isset(auth()->user()->profile->district_id))
                                            <option value="{{ auth()->user()->profile->district_id }}">{{ auth()->user()->profile->district->name }}</option>
											@endif
                                        </select>
                                    </div>
                                    <div class="col-sm-6 m-b30">
                                        <label class="form-label">Ward</label>
                                        <select name="ward" class="form-control" id="wardSelect">
                                            <option value="">Select Ward</option>
											@if (isset(auth()->user()->profile->ward_id))
                                            <option value="{{ auth()->user()->profile->ward_id }}">{{ auth()->user()->profile->ward->name }}</option>
											@endif
                                        </select>
                                    </div>
									<div class="col-sm-12 m-b30">
										<label class="form-label">Description</label>
										<textarea class="form-control" name="description" id="" cols="30" rows="10" max="1000"> {{ @$user->profile->description }}</textarea>
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
										<input type="text" name="specialty" class="form-control" value="{{ @$user->professional->specialty }}">
									</div>
									<div class="col-sm-6 m-b30">
										<label class="form-label">Skills</label>
										<select class="form-control skill-multiple" name="skills[]" multiple="multiple">
											<option value="HTML" {{ isset($user->professional->skills) && in_array("HTML", $user->professional->skills) ? 'selected' : '' }}>HTML</option>
											<option value="CSS" {{ isset($user->professional->skills) && in_array("CSS", $user->professional->skills) ? 'selected' : '' }}>CSS</option>
											<option value="JavaScript" {{ isset($user->professional->skills) && in_array("JavaScript", $user->professional->skills) ? 'selected' : '' }}>JavaScript</option>
											<option value="PHP" {{ isset($user->professional->skills) && in_array("PHP", $user->professional->skills) ? 'selected' : '' }}>PHP</option>
											<option value="REACT" {{ isset($user->professional->skills) && in_array("REACT", $user->professional->skills) ? 'selected' : '' }}>REACT</option>
											<option value="VUE" {{ isset($user->professional->skills) && in_array("VUE", $user->professional->skills) ? 'selected' : '' }}>VUE</option>
											<option value="NEXT" {{ isset($user->professional->skills) && in_array("NEXT", $user->professional->skills) ? 'selected' : '' }}>NEXT</option>
											<option value="NEST" {{ isset($user->professional->skills) && in_array("NEST", $user->professional->skills) ? 'selected' : '' }}>NEST</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer">
				<a class="btn btn-danger light ms-1" href="{{ route('web.profile.index') }}">Back</a>
				<button type="submit" class="btn btn-primary">UPDATE</button>
			</div>
		</form>
	</div>
</div>
@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
	function uploadImage(inputId) {
		document.getElementById(inputId).click();
	}

	function previewImage(imageId, input) {
		const file = input.files[0];
		if (file) {
			const reader = new FileReader();
			if (imageId == 'profile-photo') {
				reader.onload = function(e) {
					document.getElementById('AvatarPreview').src = `${e.target.result}`;
					document.getElementById('AvatarPreview').style.backgroundSize = '100% 100%';


				};
			} else {
				reader.onload = function(e) {
					document.getElementById(imageId).style.backgroundImage = `url('${e.target.result}')`;
					document.getElementById(imageId).style.backgroundSize = 'contain';
					document.getElementById(imageId).style.backgroundRepeat = 'no-repeat';
				};
			}
			reader.readAsDataURL(file);
		}
	}

	function loadProvince() {
		const provinceSelect = document.getElementById('provinceSelect');

		const route = `{{ route('web.provinces', ['selectedProvince' => 'provinceValue']) }}`;
		const actualRoute = route.replace('provinceValue', '{{ auth()->user()->profile->province }}');

		fetch(actualRoute)
			.then(response => response.json())
			.then(provinces => {
				$('#districtSelect').empty();
				$('#wardSelect').empty();
				provinces.forEach(province => {
					const existingOption = provinceSelect.querySelector(`option[value="${province.id}"]`);

					if (!existingOption) {
						const option = document.createElement('option');
						option.value = province.id;
						option.text = province.name;
						option.selected = province.selected;
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

			const route = `{{ route('web.districts', ['province_code' => 'provinceValue', 'selectedDistrict' => 'districtValue']) }}`;
			let actualRoute = route.replace('provinceValue', provinceId);
			actualRoute = actualRoute.replace('selectedDistrict', '{{ auth()->user()->profile->district }}');

			fetch(actualRoute)
				.then(response => response.json())
				.then(states => {
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

			const route = `{{ route('web.wards', ['district_code' => 'districtValue', 'selectedWard' => 'wardValue']) }}`;
			let actualRoute = route.replace('districtValue', stateId);
			actualRoute = actualRoute.replace('wardValue', '{{ auth()->user()->profile->ward }}');

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
	$('.skill-multiple').select2()
</script>
<script>
	var url = "{{ @$user->profile->background_image }}";

	if (url) {
		$('.cover-photo').css('background', imageUrl);
	}
</script>
@endpush