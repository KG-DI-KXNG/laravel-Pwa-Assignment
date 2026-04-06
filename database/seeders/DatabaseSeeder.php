<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the courses table.
     * Run: php artisan db:seed
     */
    public function run(): void
    {
        $this->call(StaffSeeder::class);
        $this->call(CourseSeeder::class);
    }
}
