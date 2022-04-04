<?php

namespace Database\Seeders;

use App\Models\Attendance;
use App\Models\Classs;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        Classs::factory(2)->create();
        Student::factory(10)->create();
        Attendance::factory(10)->create();
    }
}
