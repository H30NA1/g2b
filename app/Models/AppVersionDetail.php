<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class AppVersionDetail extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    protected $fillable = [
        'app_version_id',
        'type',
        'content'
    ];

    public function version()
    {
        return $this->belongsTo(AppVersion::class, 'app_version_id');
    }
}
