<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class UserSettings extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'role',
        'status',
        'is_blocked',
        'noti_email',
        'noti_device',
        'plain_password',
    ];

    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
