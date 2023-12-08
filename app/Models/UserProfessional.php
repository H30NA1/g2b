<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class UserProfessional extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'working_experiences',
        'job_title',
        'company_name',
        'company_logo',
        'company_tax_number',
        'company_url',
        'company_address',
        'company_tel',
        'start_working_at',
        'end_working_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
