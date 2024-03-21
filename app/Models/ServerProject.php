<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class ServerProject extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'project_id',
        'server_id',
        'status',
        'username',
        'password'
    ];

    public function server()
    {
        return $this->belongsTo(Server::class, 'server_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
