<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class UserTask extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'task_id',
        'lead_id',
        'user_id',
        'progress'
    ];

    /** Remove this when uploading to Production */
    public $timestamps = false;

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function leader()
    {
        return $this->belongsTo(User::class, 'lead_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
