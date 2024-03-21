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
                                    <option value="{{ $project->id }}" {{ in_array($project->id, old('projects', isset($server->projects) ? $server->projects->pluck('project_id')->toArray() : [])) ? 'selected' : '' }}>{{ $project->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="container_id">
        @if (isset($server->projects) && $server->projects->count() > 0)
        @foreach($server->projects as $serverProject)
        <div class="row" id="project-layout-{{ $serverProject->project_id }}">
            <div class="col-xl-12 col-lg-12">
                <div class="card profile-card card-bx m-b30">
                    <div class="profile-form">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Project name: {{ $serverProject->project->name }}</label>
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <button class="btn btn-danger" type="button" onclick="removeProject('{{ $serverProject->project_id }}')">Remove</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 m-b30">
                                    <input type="text" name="auth[{{ $serverProject->project_id }}][username]" class="form-control" value="{{ old('auth.' . $serverProject->project_id .'.username', @$serverProject->username) }}" placeholder="Enter Username" required>
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <input type="password" name="auth[{{ $serverProject->project_id }}][password]" class="form-control" value="" placeholder="Enter Password" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>