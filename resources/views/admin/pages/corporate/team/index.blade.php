@extends('admin.layouts.master')

@section('title', 'G2B Admin')

@push('css')

@endpush

@section('content')
<div class="d-flex flex-column flex-column-fluid">
	<!--begin::Toolbar-->
	<div id="kt_app_toolbar" class="app-toolbar pt-10 mb-0">
		<!--begin::Toolbar container-->
		<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
			<!--begin::Toolbar wrapper-->
			<div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
				<!--begin::Page title-->
				<div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
					<!--begin::Title-->
					<h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">Our Team</h1>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							<a href="index.html" class="text-muted text-hover-primary">Home</a>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-500 w-5px h-2px"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">Corporate</li>
						<!--end::Item-->
					</ul>
					<!--end::Breadcrumb-->
				</div>
				<!--end::Page title-->
				<!--begin::Actions-->
				<div class="d-flex align-items-center gap-2 gap-lg-3">
					<a href="#" class="btn btn-sm btn-flex btn-transparent btn-hover-outline" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Save</a>
					<a href="" class="btn btn-sm btn-flex btn-outline btn-active-primary bg-body" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
						<i class="ki-outline ki-eye fs-4"></i>Preview</a>
					<a href="" class="btn btn-sm btn-flex btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">
						<i class="ki-outline ki-exit-up fs-4"></i>Push</a>
				</div>
				<!--end::Actions-->
			</div>
			<!--end::Toolbar wrapper-->
		</div>
		<!--end::Toolbar container-->
	</div>
	<!--end::Toolbar-->
	<!--begin::Content-->
	<div id="kt_app_content" class="app-content flex-column-fluid">
		<!--begin::Content container-->
		<div id="kt_app_content_container" class="app-container container-fluid">
			<!--begin::About card-->
			<div class="card">
				<!--begin::Body-->
				<div class="card-body p-lg-17">
					<!--begin::Meet-->
					<div class="mb-18">
						<!--begin::Wrapper-->
						<div class="mb-11">
							<!--begin::Top-->
							<div class="text-center mb-18">
								<!--begin::Title-->
								<h3 class="fs-2hx text-gray-900 mb-6">Meet Our Team</h3>
								<!--end::Title-->
								<!--begin::Text-->
								<div class="fs-5 text-muted fw-semibold">Save thousands to millions of bucks by using single tool for different
									<br />amazing and outstanding and usefull great and useful admin
								</div>
								<!--end::Text-->
							</div>
							<!--end::Top-->
							<!--begin::Overlay-->
							<div class="overlay">
								<!--begin::Image-->
								<img class="w-100 card-rounded" src="{{ getFileVersion('/assets/admin/media/stock/1600x800/img-1.jpg') }}" alt="" />
								<!--end::Image-->
								<!--begin::Links-->
								<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
									<a href="{{ route('admin.pages.corporate.pricing') }}" class="btn btn-primary">Pricing</a>
									<a href="pages/careers/apply.html" class="btn btn-light-primary ms-3">Join Us</a>
								</div>
								<!--end::Links-->
							</div>
							<!--end::Overlay-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Description-->
						<div class="fs-5 fw-semibold text-gray-600">
							<!--begin::Text-->
							<p class="m-0">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words per minute and your writing skills are sharp. From the seed of the idea to finally hitting “Publish,” you might spend several days or maybe even a week “writing” a blog post, but it’s important to spend those vital hours planning your post and even thinking about
								<a href="pages/blog/post.html" class="link-primary pe-1">Your Post</a>(yes, thinking counts as working if you’re a blogger) before you actually write it.
							</p>
							<!--end::Text-->
						</div>
						<!--end::Description-->
					</div>
					<!--end::Meet-->
					<!--begin::Team-->
					<div class="mb-18">
						<!--begin::Heading-->
						<div class="text-center mb-17">
							<!--begin::Title-->
							<h3 class="fs-2hx text-gray-900 mb-5">Our Great Team</h3>
							<!--end::Title-->
							<!--begin::Sub-title-->
							<div class="fs-5 text-muted fw-semibold">It’s no doubt that when a development takes longer to complete, additional costs to
								<br />integrate and test each extra feature creeps up and haunts most of us.
							</div>
							<!--end::Sub-title=-->
						</div>
						<!--end::Heading-->
						<!--begin::Wrapper-->
						<div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 gy-10">
							<!--begin::Item-->
							<div class="col text-center mb-9">
								<!--begin::Photo-->
								<div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('{{ getFileVersion('/assets/admin/media/avatars/300-1.jpg') }}')"></div>
								<!--end::Photo-->
								<!--begin::Person-->
								<div class="mb-0">
									<!--begin::Name-->
									<a href="pages/user-profile/projects.html" class="text-gray-900 fw-bold text-hover-primary fs-3">Paul Miles</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="text-muted fs-6 fw-semibold">Development Lead</div>
									<!--begin::Position-->
								</div>
								<!--end::Person-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="col text-center mb-9">
								<!--begin::Photo-->
								<div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('{{ getFileVersion('/assets/admin/media/avatars/300-2.jpg') }}')"></div>
								<!--end::Photo-->
								<!--begin::Person-->
								<div class="mb-0">
									<!--begin::Name-->
									<a href="pages/user-profile/projects.html" class="text-gray-900 fw-bold text-hover-primary fs-3">Jania Garnbet</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="text-muted fs-6 fw-semibold">Creative Director</div>
									<!--begin::Position-->
								</div>
								<!--end::Person-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="col text-center mb-9">
								<!--begin::Photo-->
								<div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('{{ getFileVersion('/assets/admin/media/avatars/300-16.jpg') }}')"></div>
								<!--end::Photo-->
								<!--begin::Person-->
								<div class="mb-0">
									<!--begin::Name-->
									<a href="pages/user-profile/projects.html" class="text-gray-900 fw-bold text-hover-primary fs-3">James Nilson</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="text-muted fs-6 fw-semibold">Python Expert</div>
									<!--begin::Position-->
								</div>
								<!--end::Person-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="col text-center mb-9">
								<!--begin::Photo-->
								<div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('{{ getFileVersion('/assets/admin/media/avatars/300-20.jpg') }}')"></div>
								<!--end::Photo-->
								<!--begin::Person-->
								<div class="mb-0">
									<!--begin::Name-->
									<a href="pages/user-profile/projects.html" class="text-gray-900 fw-bold text-hover-primary fs-3">Mia Miles</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="text-muted fs-6 fw-semibold">Project Manager</div>
									<!--begin::Position-->
								</div>
								<!--end::Person-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="col text-center mb-9">
								<!--begin::Photo-->
								<div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('{{ getFileVersion('/assets/admin/media/avatars/300-10.jpg') }}')"></div>
								<!--end::Photo-->
								<!--begin::Person-->
								<div class="mb-0">
									<!--begin::Name-->
									<a href="pages/user-profile/projects.html" class="text-gray-900 fw-bold text-hover-primary fs-3">Sophia Miles</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="text-muted fs-6 fw-semibold">Art Director</div>
									<!--begin::Position-->
								</div>
								<!--end::Person-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="col text-center mb-9">
								<!--begin::Photo-->
								<div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('{{ getFileVersion('/assets/admin/media/avatars/300-9.jpg') }}')"></div>
								<!--end::Photo-->
								<!--begin::Person-->
								<div class="mb-0">
									<!--begin::Name-->
									<a href="pages/user-profile/projects.html" class="text-gray-900 fw-bold text-hover-primary fs-3">Oliver Lucas</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="text-muted fs-6 fw-semibold">Marketing Manager</div>
									<!--begin::Position-->
								</div>
								<!--end::Person-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="col text-center mb-9">
								<!--begin::Photo-->
								<div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('{{ getFileVersion('/assets/admin/media/avatars/300-12.jpg') }}')"></div>
								<!--end::Photo-->
								<!--begin::Person-->
								<div class="mb-0">
									<!--begin::Name-->
									<a href="pages/user-profile/projects.html" class="text-gray-900 fw-bold text-hover-primary fs-3">Amelia Miles</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="text-muted fs-6 fw-semibold">QA Managers</div>
									<!--begin::Position-->
								</div>
								<!--end::Person-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="col text-center mb-9">
								<!--begin::Photo-->
								<div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('{{ getFileVersion('/assets/admin/media/avatars/300-23.jpg') }}')"></div>
								<!--end::Photo-->
								<!--begin::Person-->
								<div class="mb-0">
									<!--begin::Name-->
									<a href="pages/user-profile/projects.html" class="text-gray-900 fw-bold text-hover-primary fs-3">Liam James</a>
									<!--end::Name-->
									<!--begin::Position-->
									<div class="text-muted fs-6 fw-semibold">QA Managers</div>
									<!--begin::Position-->
								</div>
								<!--end::Person-->
							</div>
							<!--end::Item-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Team-->
					<!--begin::Join-->
					<div class="text-center mb-20">
						<!--begin::Top-->
						<div class="mb-13">
							<!--begin::Title-->
							<h3 class="fs-2hx text-gray-900 mb-5">Join Us</h3>
							<!--end::Title-->
							<!--begin::Text-->
							<div class="fs-5 text-muted fw-semibold">Save thousands to millions of bucks by using single tool
								<br />for different amazing and great useful admin
							</div>
							<!--end::Text-->
						</div>
						<!--end::Top-->
						<!--begin::Text-->
						<p class="fs-5 fw-semibold text-gray-600 text-start mb-15">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words per minute and your writing skills are sharp. From the seed of the idea to finally hitting “Publish,” you might spend several days or maybe even a week “writing” a blog post, but it’s important to spend those vital hours planning
							<a href="pages/blog/post.html" class="link-primary pe-1">Your Post</a>(yes, thinking counts as working if you’re a blogger) before you actually write it.
						</p>
						<!--end::Text-->
						<!--begin::Action-->
						<a href="pages/careers/apply.html" class="btn btn-primary mb-5">Apply Now</a>
						<!--end::Action-->
					</div>
					<!--end::Join-->
					<!--begin::Card-->
					<div class="card mb-4 bg-light text-center">
						<!--begin::Body-->
						@include('admin.pages.corporate.includes.icon')
						<!--end::Body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::About card-->
		</div>
		<!--end::Content container-->
	</div>
	<!--end::Content-->
</div>
@endsection

@push('js')

@endpush