<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Employee;
use App\Models\Project;
use App\Models\ProjectEmployee;
use App\Models\Task;
use App\Models\TaskEmployee;
use App\Models\User;
use App\Models\UserFinancial;
use App\Models\UserProfessional;
use App\Models\UserProfile;
use App\Models\UserSettings;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Adjust the number of records you want to generate
        $numberOfRecords = 2000;
        $chunkSize = 200; // Adjust the chunk size as needed

        // Disable query log to improve speed
        DB::connection()->disableQueryLog();

        // Generate and insert data using factory in chunks
        $this->insertInChunks('users', $numberOfRecords, $chunkSize, User::factory());
        $this->insertInChunks('user_financials', $numberOfRecords, $chunkSize, UserFinancial::factory());
        $this->insertInChunks('user_professionals', $numberOfRecords, $chunkSize, UserProfessional::factory());
        $this->insertInChunks('user_profiles', $numberOfRecords, $chunkSize, UserProfile::factory());
        $this->insertInChunks('user_settings', $numberOfRecords, $chunkSize, UserSettings::factory());
        $this->insertInChunks('employees', $numberOfRecords, $chunkSize, Employee::factory());
        Project::factory(200)->create();
        $this->insertInChunks('project_employees', $numberOfRecords, $chunkSize, ProjectEmployee::factory());
        $this->insertInChunks('tasks', $numberOfRecords, $chunkSize, Task::factory());
        $this->insertInChunks('task_employees', $numberOfRecords, $chunkSize, TaskEmployee::factory());
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
