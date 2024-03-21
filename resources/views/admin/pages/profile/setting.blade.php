@extends('layouts.master')

@section('title', 'Server Info')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
								<div id="cover-photo" class="cover-photo rounded"></div>
							</div>
							<div class="profile-info">
								<div id="profile-photo" class="profile-photo">
									<img src="{{ isset($user->profile->avatar) ? $user->profile->avatar : getFileVersion('/assets/images/profile/profile.png') }}" class="img-fluid rounded-circle" alt="">
								</div>
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
				<a class="btn btn-danger light ms-1" href="{{ route('web.profile.index') }}">Back</a>
				<button type="submit" class="btn btn-primary">UPDATE</button>
			</div>
		</form>
	</div>
</div>
@endsection

@push('js')
<script>
	var url = "{{ @$user->profile->background_image }}";

	if (url) {
		$('.cover-photo').css('background', imageUrl);
	}
</script>
@endpush