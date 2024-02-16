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
        'description',
        'is_active'
    ];

    public function associates()
    {
        return $this->hasMany(ServiceAssociate::class);
    }

    public function projects()
    {
        return $this->hasMany(ServiceAssociate::class, 'service_id')->where('type', 'project');
    }

    public function account()
    {
        return $this->hasOne(ServiceAccount::class, 'service_id');
    }

    public function servers()
    {
        return $this->hasMany(ServiceAssociate::class, 'service_id')->where('type', 'server');
    }

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($service) {
            $service->associates()->delete();
            $service->projects()->delete();
            $service->account()->delete();
            $service->servers()->delete();
        });
    }
}
