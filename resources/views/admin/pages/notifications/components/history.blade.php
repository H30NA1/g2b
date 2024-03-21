<div id="history" class="tab-pane" role="tabpanel">
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userNotifications['all'] as $key => $notification)
                        <tr>
                            <td><strong>{{ $key }}</strong></td>
                            <td>{{ @ucwords($notification->title) }}</td>
                            <td>{{ @ucwords($notification->user->username) }}</td>
                            <td>{{ formatDate($notification->created_at, 'd F Y - h:i A') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
