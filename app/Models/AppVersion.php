<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class AppVersion extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    protected $fillable = [
        'app_id',
        'user_id',
        'version',
        'environment',
        'build_number',
        'upload_number',
        'url',
        'url_image',
        'description',
        'devices'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function app()
    {
        return $this->belongsTo(App::class, 'app_id');
    }

    public function details()
    {
        return $this->hasMany(AppVersionDetail::class, 'app_version_id');
    }

    public function permissions()
    {
        return $this->hasOne(AppVersionDetail::class, 'app_version_id')->where('type', 'permission');
    }

    public function activities()
    {
        return $this->hasOne(AppVersionDetail::class, 'app_version_id')->where('type', 'activity');
    }
}
