<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserProfessional;
use App\Models\UserProfile;
use App\Models\UserRole;
use App\Models\UserSettings;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'hieu',
            'email' => 'harroncrypto@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'plain_password' => '123456789',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        UserProfessional::create([
            'user_id' => 1,
            'working_experiences' => rand(1, 20),
            'job_title' => 'Hieu Super Admin',
            'company_address' => '3/2 Street',
            'company_tel' => '01234567891',
            'start_working_at' => Carbon::now(),
            'end_working_at' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        UserProfile::create([
            'user_id' => 1,
            'birthday' => Carbon::now(),
            'sex' => 'male',
            'first_name' => 'Lee',
            'last_name' => 'Harron',
            'nationality' => 'JAPAN',
            'post_code' => '1000000',
            'address' => '3/2 Street',
            'tel' => '01234567891',
            'description' => 'G2B Group',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        UserSettings::create([
            'user_id' => 1,
            'role' => 'super_admin',
            'status' => 1,
            'is_blocked' => 0,
            'noti_email' => 1,
            'noti_device' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
