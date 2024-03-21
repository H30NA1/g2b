<?php

namespace App\Services\Admin;

use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class NotificationService
{
    public function getNotifications($dataRequest)
    {
        $model = Notification::with(['user'])->where('user_id', Auth::user()->id);

        if (isset($dataRequest['limit'])) {
            $model = $model->limit($dataRequest['limit']);
        }

        $notifications = $model->orderByDesc('id')->get();

        if (isset($dataRequest['display']) && $dataRequest['display'] == 'all') {
            return $notifications;
        }

        // Initialize arrays to hold pending requests and counts
        $notificationsCollection = [
            'read' => collect(),
            'unread' => collect(),
            'deleted' => collect(),
        ];

        $unreadCount = 0;

        // Group requests by type and count pending requests
        foreach ($notifications as $notification) {
            if (isset($notification->is_read) && $notification->is_read == 1) {
                $notificationsCollection['read']->push($notification);
            } else if (isset($notification->deleted_at)) {
                $notificationsCollection['deleted']->push($notification);
            } else {
                $notificationsCollection['unread']->push($notification);
                $unreadCount++;
            }
        }
        return [
            'pending' => $unreadCount,
            'read' => $notificationsCollection['read'],
            'unread' => $notificationsCollection['unread'],
            'deleted' => $notificationsCollection['deleted'],
            'all' => $notifications
        ];
    }

    public function read($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->is_read = 1;
        $notification->read_at = now();
        return $notification->save();
    }

    public function revert($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->deleted_at = null;
        return $notification->save();
    }

    public function delete($id)
    {
        $notification = Notification::findOrFail($id);
        return $notification->delete();
    }
}
