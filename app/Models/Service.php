<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class Service extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'logo',
        'name',
        'hostname',
        'port',
        'protocol',
        'type',
        'status',
        'deployment_date'
    ];

    public function billing()
    {
        return $this->hasOne(ServiceBilling::class, 'service_id');
    }

    public function contact()
    {
        return $this->hasOne(ServiceContact::class, 'service_id');
    }

    public function credential()
    {
        return $this->hasOne(ServiceCredential::class, 'service_id');
    }

    public function deployment()
    {
        return $this->hasOne(ServiceDeployment::class, 'service_id');
    }

    public function detail()
    {
        return $this->hasOne(ServiceDetail::class, 'service_id');
    }

    public function setting()
    {
        return $this->hasOne(ServiceSetting::class, 'service_id');
    }

    public function projects()
    {
        return $this->hasMany(ServiceProject::class, 'service_id');
    }

    public function servers()
    {
        return $this->hasMany(ServiceServer::class, 'service_id');
    }

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($service) {
            $service->projects()->delete();
            $service->servers()->delete();
            $service->account()->delete();
            $service->servers()->delete();
            $service->billing()->delete();
            $service->contact()->delete();
            $service->credential()->delete();
            $service->deployment()->delete();
            $service->detail()->delete();
            $service->setting()->delete();
        });
    }
}
