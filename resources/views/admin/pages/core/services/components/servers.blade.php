<div id="servers" class="tab-pane" role="tabpanel">
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card profile-card card-bx m-b30">
                <div class="card-header">
                    <h6 class="title">Servers Setup</h6>
                </div>

                <div class="profile-form">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 m-b30">
                                <label class="form-label">servers</label>
                                <select class="form-control server-multiple" id="server-selected" name="servers[]" multiple="multiple">
                                    <option value="">SELECT Servers</option>
                                    @foreach($servers as $server)
                                    <option value="{{ $server->id }}" {{ in_array($server->id, old('servers', isset($service->servers) ? $service->servers->pluck('server_id')->toArray() : [])) ? 'selected' : '' }}>{{ $server->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="server_container_id">
        @if (isset($service->servers) && $service->servers->count() > 0)
        @foreach($service->servers as $serviceServer)
        <div class="row" id="server-layout-{{ $serviceServer->server_id }}">
            <div class="col-xl-12 col-lg-12">
                <div class="card profile-card card-bx m-b30">
                    <div class="profile-form">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 m-b30">
                                    <label class="form-label">Server name: {{ $serviceServer->server->name }}</label>
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <button class="btn btn-danger" type="button" onclick="removeServer('{{ $serviceServer->server_id }}')">Remove</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 m-b30">
                                    <input type="text" name="auth[{{ $serviceServer->server_id }}][username]" class="form-control" value="{{ old('auth.' . $serviceServer->server_id .'.username', @$serviceServer->username) }}" placeholder="Enter Username" required>
                                </div>
                                <div class="col-sm-6 m-b30">
                                    <input type="password" name="auth[{{ $serviceServer->server_id }}][password]" class="form-control" value="" placeholder="Enter Password" required>
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