<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class ServiceSetting extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'service_id',
        'response_time_threshold',
        'uptime_threshold',
        'last_incident_time',
        'incident_count',
        'notes'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
