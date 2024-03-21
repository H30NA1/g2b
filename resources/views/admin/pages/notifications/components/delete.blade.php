<div id="delete" class="tab-pane" role="tabpanel">
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
                            <th><strong>Action</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userNotifications['deleted'] as $key => $notification)
                        <tr>
                            <td><strong>{{ $key }}</strong></td>
                            <td>{{ @ucwords($notification->title) }}</td>
                            <td>{{ @ucwords($notification->user->username) }}</td>
                            <td>{{ formatDate($notification->created_at, 'd F Y - h:i A') }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn light sharp" data-bs-toggle="dropdown">
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
                                        <a class="dropdown-item" href="{{ route('web.notifications.revert', ['id' => $notification->id]) }}">Revert</a>
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