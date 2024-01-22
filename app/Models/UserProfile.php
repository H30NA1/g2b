<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class UserProfile extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'birthday',
        'sex',
        'first_name',
        'last_name',
        'nationality',
        'post_code',
        'address',
        'tel',
        'avatar',
        'description'
    ];

    /** Remove this when uploading to Production */
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
