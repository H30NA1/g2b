<div id="request-authorization" class="tab-pane active show" role="tabpanel">
    <div class="card border-0 pb-0">
        <div class="card-body p-0 customCard">
            <div class="table-responsive">
            <table id="example3" class="display table" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th><strong>#</strong></th>
                            <th><strong>Title</strong></th>
                            <th><strong>Employee Name</strong></th>
                            <th><strong>DATE</strong></th>
                            <th><strong>STATUS</strong></th>
                            <th><strong>Action</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userRequests['authorization'] as $key => $request)
                        <tr>
                            <td><strong>{{ $key }}</strong></td>
                            <td>{{ @ucwords($request->title) }}</td>
                            <td>{{ @ucwords($request->employee->username) }}</td>
                            <td>{{ formatDate($request->requested_at, 'd F Y - h:i A') }}</td>
                            <td><span class="badge light badge-{{ match($request->status) {'approved' => 'success', 'rejected' => 'danger', default => 'secondary'} }}">{{ match($request->status) {'approved' => 'Successful', 'rejected' => 'Rejected', default => 'Waiting'} }}</span></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-{{ match($request->status) {'approved' => 'success', 'rejected' => 'danger', default => 'secondary'} }} light sharp" data-bs-toggle="dropdown">
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <circle fill="#000000" cx="5" cy="12" r="2" />
                                                <circle fill="#000000" cx="12" cy="12" r="2" />
                                                <circle fill="#000000" cx="19" cy="12" r="2" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('web.reports.allow', ['id' => $request->id]) }}">Allow</a>
                                        <a class="dropdown-item" href="{{ route('web.reports.reject', ['id' => $request->id]) }}">Reject</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
