<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class ServiceAssociate extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'service_id',
        'associate_id',
        'type',
        'username',
        'password',
        'plain_password',
        'prikey',
        'prikey_passphrase'
    ];



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'password' => 'hashed',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function server()
    {
        return $this->belongsTo(Server::class, 'associate_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'associate_id');
    }
}
