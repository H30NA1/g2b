<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class AdministrativeUnit   extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'full_name_en',
        'short_name',
        'short_name_en',
        'code_name',
        'code_name_en',
    ];

    public function provinces()
    {
        return $this->hasMany(Province::class, 'administrative_unit_id');
    }

    public function districts()
    {
        return $this->hasMany(District::class, 'administrative_unit_id');
    }

    public function wards()
    {
        return $this->hasMany(Ward::class, 'administrative_unit_id');
    }
}
