<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class ServerHardware extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'server_id',
        'cpu',
        'memory',
        'storage',
        'manufacturer',
        'model',
        'serial_number',
        'rack_location'
    ];

    public function server()
    {
        return $this->belongsTo(Server::class);
    }
}
