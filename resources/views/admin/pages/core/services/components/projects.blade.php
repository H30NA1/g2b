<div id="projects" class="tab-pane" role="tabpanel">
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card profile-card card-bx m-b30">
                <div class="card-header">
                    <h6 class="title">Projects Setup</h6>
                </div>

                <div class="profile-form">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 m-b30">
                                <label class="form-label">projects</label>
                                <select class="form-control project-multiple" id="project-selected" name="projects[]" multiple="multiple">
                                    <option value="">SELECT Projects</option>
                                    @foreach($projects as $project)
                                    <option value="{{ $project->id }}" {{ in_array($project->id, old('projects', isset($service->projects) ? $service->projects->pluck('project_id')->toArray() : [])) ? 'selected' : '' }}>{{ $project->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="project_container_id">
        @if (isset($service->projects) && $service->projects->count() > 0)
        @foreach($service->projects as $serviceProject)
        <div class="row" id="project-layout-{{ $serviceProject->project_id }}">
            <div class="col-xl-12 col-lg-12">
                <div class="card profile-card card-bx m-b30">
                    <div class="profile-form">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Project name: {{ $serviceProject->project->name }}</label>
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <button class="btn btn-danger" type="button" onclick="removeProject('{{ $serviceProject->project_id }}')">Remove</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 m-b30">
                                    <input type="text" name="auth[{{ $serviceProject->project_id }}][username]" class="form-control" value="{{ old('auth.' . $serviceProject->project_id .'.username', @$serviceProject->username) }}" placeholder="Enter Username" required>
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <input type="password" name="auth[{{ $serviceProject->project_id }}][password]" class="form-control" value="" placeholder="Enter Password" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>