<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class App extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;
    
    protected $fillable = [
        'id',
        'user_id',
        'project_id',
        'package_name',
        'platform',
        'environment',
        'url_image',
        'name', 
        'description',
    ];

    /**** Relationship ******/

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function latestVersion()
    {
        return $this->hasOne(AppVersion::class, 'app_id')->latest('updated_at');
    }

    public function versions()
    {
        return $this->hasMany(AppVersion::class, 'app_id')->orderBy('created_at','desc');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    /**** Mutator ******/

    public function getCreatedAtAttribute($value) {
        return Carbon::parse($value)->format('Y-m-d');
    }

}
