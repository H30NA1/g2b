<form action="{{route('web.services.store') }}" method="POST" name="form-submit" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="offcanvas-body">
            <div class="container-fluid">
                <div class="row">
                    <label class="form-label">Logo</label>
                    <div class="col-xl-12 mb-3">
                        <img id="avatar-preview" src="{{ getFileVersion('/assets/images/profile/1.jpg') }}" width="460" height="198" alt="">
                        <div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
                            <input type="file" name="logo" class="update-flie" onchange="previewImage('avatar-preview', this)">
                            <i class="fa fa-camera"></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 mb-3">
                        <label for="exampleFormControlInputFirst" class="form-label">Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="exampleFormControlInputFirst" placeholder="Name" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="col-xl-4 mb-3">
                        <label for="exampleFormControlInputFirst" class="form-label">Host<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="exampleFormControlInputFirst" placeholder="Hostname/IP" name="hostname" value="{{ old('hostname') }}">
                    </div>
                    <div class="col-xl-4 mb-3">
                        <label for="exampleFormControlInputSecond" class="form-label">Port<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="exampleFormControlInputSecond" placeholder="Port" name="port" value="{{ old('port') }}">
                    </div>
                    <div class="col-xl-4 mb-3">
                        <label for="exampleFormControlInputThird" class="form-label">Protocol<span class="text-danger">*</span></label>
                        <select class="form-control" name="type" required>
                            <option value=""> Select Protocol</option>
                            <option value="Internal" {{ 'TCP' == old('protocol') ? "selected" : "" }}> TCP</option>
                            <option value="External" {{ 'UDP' == old('protocol') ? "selected" : "" }}> UDP</option>
                        </select>
                    </div>
                    <div class="col-xl-4 mb-3">
                        <label for="exampleFormControlInputFourth" class="form-label">Type<span class="text-danger">*</span></label>
                        <select class="form-control" name="type" required>
                            <option value=""> Select Type</option>
                            <option value="Internal" {{ 'Internal' == old('type') ? "selected" : "" }}> Internal</option>
                            <option value="External" {{ 'External' == old('type') ? "selected" : "" }}> External</option>
                        </select>
                    </div>
                    <div class="col-xl-4 mb-3">
                        <label for="exampleFormControlInputFourth" class="form-label">Status<span class="text-danger">*</span></label>
                        <select class="form-control" name="status" required>
                            <option value=""> Select Status</option>
                            <option value="active" {{ 'active' == old('status') ? "selected" : "" }}> Active</option>
                            <option value="inactive" {{ 'inactive' == old('status') ? "selected" : "" }}> In Active</option>
                        </select>
                    </div>
                    <div class="col-xl-12 mb-3">
                        <label class="form-label">Description</label>
                        <textarea rows="3" class="form-control" name="description">{!! old('description') !!}</textarea>
                    </div>
                </div>
                <div>
                    <a class="btn btn-danger light ms-1" href="{{ route('web.services.index') }}">Back</a>
                    <button type="submit" class="btn btn-primary">STORE</button>
                </div>
            </div>
        </div>
    </div>
</form>