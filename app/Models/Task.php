<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class Task extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'project_id',
        'name',
        'description',
        'priority',
        'status',
        'deadline'
    ];

    public $timestamps = false;

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function tasks()
    {
        return $this->hasOne(UserTask::class);
    }

    public function totalMonthlyResolvedTasks()
    {
        $now = now();
        $month = $now->format('F'); 
        $year = $now->format('Y');

        return $this->whereIn('status', ['resolved', 'closed'])
                    ->whereMonth('created_at', $month)  
                    ->whereYear('created_at', $year)
                    ->count();
    }
}
