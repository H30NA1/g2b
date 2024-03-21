<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class ServerSetting extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'server_id',
        'health_status',
        'notes',
        'virtualized',
        'num_processors',
        'num_cores_per_processor',
        'num_threads_per_core',
        'uptime'
    ];

    public function server()
    {
        return $this->belongsTo(Server::class);
    }
}
