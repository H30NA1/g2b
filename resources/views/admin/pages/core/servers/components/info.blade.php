<div id="info" class="tab-pane active show" role="tabpanel">
    <div class="col-xl-6 mb-3">
        <label for="exampleFormControlInputfirst" class="form-label">Name<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="exampleFormControlInputfirst" placeholder="Name" name="name" value="{{ old('name', @$server->name) }}" required>
    </div>
    <div class="col-xl-6 mb-3">
        <label for="exampleFormControlInputfirst" class="form-label">Host<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="exampleFormControlInputfirst" placeholder="Hostname/IP" name="hostname" value="{{ old('hostname', @$server->hostname) }}" required>
    </div>
    <div class="col-xl-6 mb-3">
        <label class="form-label">Assigned to Service<span class="text-danger">*</span></label>
        <select class="form-control" name="service_id" required>
            <option value=""> Select Service</option>
            @foreach($services as $service)
            <option value="{{ $service->id }}" {{ isset($server->service_id) && $service->id == old('service_id', @$server->service_id) ? "selected" : "" }}>{{ @$service->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-xl-6 mb-3">
        <label class="form-label">Status<span class="text-danger">*</span></label>
        <select class="form-control" name="is_active" required>
            <option value=""> Select Status</option>
            <option value="online" {{ isset($server->status) && 'online' == old('status', @$server->status) ? "selected" : "" }}> Online</option>
            <option value="offline" {{ isset($server->status) && 'offline' == old('status', @$server->status) ? "selected" : "" }}> Offline</option>
            <option value="idle" {{ isset($server->status) && 'idle' == old('status', @$server->status) ? "selected" : "" }}> Idle</option>
        </select>
    </div>
    <div class="col-xl-4 mb-3">
        <label for="exampleFormControlInputfirst" class="form-label">Username<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="exampleFormControlInputfirst" placeholder="Username" name="username" value="{{ old('username', @$server->security->username) }}" required>
    </div>
    <div class="col-xl-4 mb-3">
        <label for="exampleFormControlInputfirst" class="form-label">Password @if(!isset($server))<span class="text-danger">*</span>@endif</label>
        <input type="text" class="form-control" id="exampleFormControlInputfirst" placeholder="Password" name="password" {{ !isset($server) ? 'required' : '' }}>
    </div>
    <div class="col-xl-4 mb-3">
        <label for="exampleFormControlInputfirst" class="form-label">Port<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="exampleFormControlInputfirst" placeholder="Port" name="port" value="{{ old('port', @$server->port) }}" required>
    </div>
    <div class="col-xl-12 mb-3">
        <label class="form-label">Description</label>
        <textarea rows="3" class="form-control" name="description">{!! old('description', @$server->description) !!}</textarea>
    </div>
</div>