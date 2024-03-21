<div id="info" class="tab-pane active show" role="tabpanel">
    <div class="col-xl-12 mb-3">
        <label for="exampleFormControlLogo" class="form-label">Logo<span class="text-danger">*</span></label>
        <img id="avatar-preview" src="{{ isset($service->logo) ? $service->logo : getFileVersion('/assets/images/profile/1.jpg') }}" width="460" height="198" alt="">
        <div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
            <input type="file" id="exampleFormControlLogo" name="logo" class="update-flie" onchange="previewImage('avatar-preview', this)">
            <i class="fa fa-camera"></i>
        </div>
    </div>
    <div class="col-xl-12 mb-3">
        <label for="exampleFormControlInputFirst" class="form-label">Name<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="exampleFormControlInputFirst" placeholder="Name" name="name" value="{{ old('name', @$service->name) }}">
    </div>
    <div class="col-xl-6 mb-3">
        <label for="exampleFormControlInputFirst" class="form-label">Host<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="exampleFormControlInputFirst" placeholder="Hostname/IP" name="hostname" value="{{ old('hostname', @$service->hostname) }}">
    </div>
    <div class="col-xl-6 mb-3">
        <label for="exampleFormControlInputSecond" class="form-label">Port<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="exampleFormControlInputSecond" placeholder="Port" name="port" value="{{ old('port', @$service->port) }}">
    </div>
    <div class="col-xl-4 mb-3">
        <label for="exampleFormControlInputThird" class="form-label">Protocol<span class="text-danger">*</span></label>
        <select class="form-control" name="type" required>
            <option value=""> Select Protocol</option>
            <option value="Internal" {{ isset($service->protocol) && 'TCP' == old('protocol', @$service->protocol) ? "selected" : "" }}> TCP</option>
            <option value="External" {{ isset($service->protocol) && 'UDP' == old('protocol', @$service->protocol) ? "selected" : "" }}> UDP</option>
        </select>
    </div>
    <div class="col-xl-6 mb-3">
        <label for="exampleFormControlInputFourth" class="form-label">Type<span class="text-danger">*</span></label>
        <select class="form-control" name="type" required>
            <option value=""> Select Type</option>
            <option value="Internal" {{ isset($service->type) && 'Internal' == old('type', @$service->type) ? "selected" : "" }}> Internal</option>
            <option value="External" {{ isset($service->type) && 'External' == old('type', @$service->type) ? "selected" : "" }}> External</option>
        </select>
    </div>
    <div class="col-xl-6 mb-3">
        <label for="exampleFormControlInputFourth" class="form-label">Status<span class="text-danger">*</span></label>
        <select class="form-control" name="status" required>
            <option value=""> Select Status</option>
            <option value="active" {{ isset($service->status) && 'active' == old('status', @$service->status) ? "selected" : "" }}> Active</option>
            <option value="inactive" {{ isset($service->status) && 'inactive' == old('status', @$service->status) ? "selected" : "" }}> In Active</option>
        </select>
    </div>
    <div class="col-xl-12 mb-3">
        <label class="form-label">Description</label>
        <textarea rows="3" class="form-control" name="description">{!! old('description', @$service->description) !!}</textarea>
    </div>
</div>