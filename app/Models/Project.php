<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class Project extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'environment',
        'status',
        'visibility',
        'priority',
        'description',
        'summary',
        'deadline_at',
        'began_at',
        'finished_at',
    ];

    public function getBeganAtAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    public function getDeadlineAtAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    public function users()
    {
        return $this->hasMany(ProjectUser::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function information()
    {
        return $this->hasOne(ProjectInformation::class);
    }

    public function completeTasks()
    {
        return $this->hasMany(Task::class)->where('status', 'resolved');
    }

    public function pendingTasks()
    {
        return $this->hasMany(Task::class)->where('status', 'pending');
    }

    public function openTasks()
    {
        return $this->hasMany(Task::class)->whereIn('status', 'open');
    }

    public function confirmTasks()
    {
        return $this->hasMany(Task::class)->whereIn('status', 'confirming');
    }

    public function remainingTasks()
    {
        return $this->hasMany(Task::class)->whereIn('status', ['open', 'progressing', 'testing', 'confirming', 'pending']);
    }
}
