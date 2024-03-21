<div class="modal fade" id="importModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-footer">
                <form id="importForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="offcanvas-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <label class="form-label">SELECT FILE</label>
                                    <div class="col-xl-12 mb-3">
                                        <div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
                                            <input type="file" name="url" class="update-flie">
                                            <i class="fa fa-camera"></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-3">
                                        <label class="form-label">Project</label>
                                        <select name="project_id" class="default-select form-control" id="validationCustom05">
                                            @foreach ($projects as $project)
                                            <option value="{{ $project->id }}">{{ $project->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-12 mb-3">
                                        <label class="form-label">Environment</label>
                                        <select name="environment" class="default-select form-control" id="validationCustom05">
                                            <option value="develop">Develop</option>
                                            <option value="staging">Staging</option>
                                            <option value="alpha">Alpha</option>
                                            <option value="release">Release</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>