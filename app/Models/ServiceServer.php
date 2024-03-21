<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class ServiceServer extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'server_id',
        'service_id',
        'parent_id',
        'status',
        'username',
        'password'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function server()
    {
        return $this->belongsTo(Server::class, 'server_id');
    }

    public function parent()
    {
        return $this->belongsTo(Server::class, 'parent_id');
    }
}
