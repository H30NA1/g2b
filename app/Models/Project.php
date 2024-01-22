<?php

namespace App\Models;

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
        'deadline_at',
        'began_at',
        'finished_at',
    ];

    /** Remove this when uploading to Production */
    public $timestamps = false;

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

    public function setting()
    {
        return $this->hasOne(ProjectSetting::class);
    }
}
