<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'plain_password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'password' => 'hashed',
    ];

    public function userToken()
    {
        return $this->hasOne(AccessToken::class);
    }

    public function professional()
    {
        return $this->hasOne(UserProfessional::class);
    }

    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }

    public function settings()
    {
        return $this->hasOne(UserSettings::class);
    }

    public function tasks()
    {
        return $this->hasMany(UserTask::class);
    }

    public function projects()
    {
        return $this->hasMany(ProjectUser::class);
    }

    public function progressingTasks()
    {
        return $this->hasMany(UserTask::class)->where('progress', 'progressing');
    }

    public function pendingTasks()
    {
        return $this->hasMany(UserTask::class)->where('progress', 'pending');
    }

    public function confirmingTasks()
    {
        return $this->hasMany(UserTask::class)->where('progress', 'confirming');
    }

    public function finishedTasks()
    {
        return $this->hasMany(UserTask::class)->where('progress', 'finished');
    }

    public function role()
    {
        return $this->hasOne(UserRole::class)->latest();
    }

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($user) {
            $user->userToken()->delete();
            $user->professional()->delete();
            $user->profile()->delete();
            $user->settings()->delete();
            $user->tasks()->delete();
            $user->role()->delete();
        });
    }
}
