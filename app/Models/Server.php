<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class Server extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'service_id',
        'name',
        'hostname',
        'port',
        'location',
        'status',
        'purchase_date',
        'warranty_expiry_date'
    ];

    public function backups()
    {
        return $this->hasMany(ServerBackup::class, 'server_id');
    }

    public function hardware()
    {
        return $this->hasOne(ServerHardware::class, 'server_id');
    }

    public function software()
    {
        return $this->hasOne(ServerSoftware::class, 'server_id');
    }

    public function network()
    {
        return $this->hasOne(ServerNetwork::class, 'server_id');
    }

    public function security()
    {
        return $this->hasOne(ServerSecurity::class, 'server_id');
    }

    public function setting()
    {
        return $this->hasOne(ServerSetting::class, 'server_id');
    }

    public function projects()
    {
        return $this->hasMany(ServerProject::class, 'server_id');
    }

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($server) {
            $server->projects()->delete();
            $server->backups()->delete();
            $server->hardware()->delete();
            $server->software()->delete();
            $server->network()->delete();
            $server->security()->delete();
            $server->setting()->delete();
        });
    }
}
