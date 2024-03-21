@if ($errors->any())
<div class="alert alert-danger solid alert-dismissible fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
    </button>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if(Session::has('message'))
<div class="alert alert-success show w90 m0a center mb20" role="alert">
    {{ Session::get('message') }}
</div>
@endif
@if (session('status'))
<div class="alert alert-success w90 m0a center mb20">
    {{ session('status') }}
</div>
@endif
@if(session('error'))
<div class="alert alert-danger solid alert-dismissible fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
    </button>
    {{session('error')}}
</div>
@endif