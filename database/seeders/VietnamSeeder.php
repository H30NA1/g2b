<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VietnamSeeder extends Seeder
{
    public function run()
    {
        $scriptPath = public_path('vn_data.sql');
        $sql = file_get_contents($scriptPath);
        DB::unprepared($sql);
    }
}
