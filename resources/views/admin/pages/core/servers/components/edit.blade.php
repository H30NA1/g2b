<form action="{{ route('web.servers.update', ['id' => $server->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- row -->
    <div class="row">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="heading mb-0">{{ $server->name }}</h4>
        </div>
        <div class="col-xl-12">
            <div id="requests" class="tab-pane fade active show" role="tabpanel">
                <div class="card border-0 pb-0">
                    <div class="card-body p-0">
                        <div id="DZ_W_Todo4" class="widget-media dz-scroll height370 my-4 px-4">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#info" data-bs-toggle="tab" class="nav-link active show" aria-selected="true" role="tab" tabindex="-1">Info </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#projects" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">Projects</a>
                                </li>
                            </ul>
                            <div class="tab-content mt30">
                                @include('pages.core.servers.components.info')
                                @include('pages.core.servers.components.projects')
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