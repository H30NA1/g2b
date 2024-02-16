<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class ProjectInformation extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'project_id',
        'client',
        'cost',
        'description'
    ];



    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public static function totalCost()
    {
        return self::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->sum('cost');
    }

    public static function getTopAndOthers()
    {
        $topIds = self::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->orderBy('cost', 'desc')
            ->take(2)
            ->pluck('id');

        return [
            'top' => self::whereIn('id', $topIds)
                ->get(),

            'others' => self::whereMonth('created_at', now()->month)
                ->whereYear('created_at', now()->year)
                ->whereNotIn('id', $topIds)
                ->sum('cost')
        ];
    }
}
