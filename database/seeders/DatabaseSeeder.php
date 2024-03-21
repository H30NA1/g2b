<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Notification;
use App\Models\Project;
use App\Models\ProjectInformation;
use App\Models\ProjectUser;
use App\Models\Request;
use App\Models\RequestType;
use App\Models\Server;
use App\Models\ServerProject;
use App\Models\Service;
use App\Models\ServiceProject;
use App\Models\ServiceServer;
use App\Models\Task;
use App\Models\User;
use App\Models\UserProfessional;
use App\Models\UserProfile;
use App\Models\UserRequest;
use App\Models\UserRole;
use App\Models\UserSettings;
use App\Models\UserTask;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            SuperAdminSeeder::class,
            PermissionSeeder::class,
            // VietnamSeeder::class
        ]);
        // Adjust the number of records you want to generate
        $numberOfRecords = 200;
        $chunkSize = 50; // Adjust the chunk size as needed

        // Disable query log to improve speed
        DB::connection()->disableQueryLog();

        // Generate and insert data using factory in chunks
        $this->insertInChunks('users', 200, $chunkSize, User::factory());
        $this->insertInChunks('user_professionals', 200, $chunkSize, UserProfessional::factory());
        $this->insertInChunks('user_profiles', 200, $chunkSize, UserProfile::factory());
        $this->insertInChunks('user_settings', 200, $chunkSize, UserSettings::factory());
        $this->insertInChunks('user_roles', 200, $chunkSize, UserRole::factory());
        Project::factory(200)->create();
        Service::factory(20)->create();
        Server::factory(50)->create();
        $this->insertInChunks('project_information', $numberOfRecords, $chunkSize, ProjectInformation::factory());
        $this->insertInChunks('project_users', $numberOfRecords, $chunkSize, ProjectUser::factory());
        $this->insertInChunks('tasks', 200, $chunkSize, Task::factory());
        $this->insertInChunks('user_tasks', 200, $chunkSize, UserTask::factory());
        $this->insertInChunks('user_requests', 200, $chunkSize, UserRequest::factory());
        $this->insertInChunks('notifications', 2000, $chunkSize, Notification::factory());
        $this->insertInChunks('server_projects', 200, $chunkSize, ServerProject::factory());
        $this->insertInChunks('service_projects', 200, $chunkSize, ServiceProject::factory());
        $this->insertInChunks('service_servers', 200, $chunkSize, ServiceServer::factory());
        Artisan::call('passport:install');
        Artisan::call('passport:keys');
        Artisan::call('vendor:publish --tag=passport-config');
    }

    /**
     * Insert data in chunks to the specified table using factory.
     *
     * @param string $table
     * @param int $totalRecords
     * @param int $chunkSize
     * @param \Illuminate\Database\Eloquent\Factories\Factory $factory
     */
    private function insertInChunks(string $table, int $totalRecords, int $chunkSize, $factory): void
    {
        $chunkCount = ceil($totalRecords / $chunkSize);

        for ($i = 0; $i < $chunkCount; $i++) {
            $offset = $i * $chunkSize;
            $limit = min($totalRecords - $offset, $chunkSize);

            $records = $factory->times($limit)->make()->toArray();
            DB::table($table)->insert($records);

            $progress = (($offset + $limit) / $totalRecords) * 100;
            echo "Inserted " . ($offset + $limit) . " records into $table. Progress: $progress%\n";
        }
    }
}
