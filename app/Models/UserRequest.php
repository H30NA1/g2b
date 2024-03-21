<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class UserRequest extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'request_handler_id',
        'title',
        'content',
        'destination',
        'type',
        'status',
        'requested_at',
        'approved_at',
        'rejected_at',
        'reverted_at',
    ];

    public function employee()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function requestHandler()
    {
        return $this->belongsTo(User::class, 'request_handler_id', 'id');
    }
}
