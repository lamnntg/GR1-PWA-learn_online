<?php

namespace Database\Seeders;

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
        $this->call(CourseSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(QuestionDegreeSeeder::class);
        $this->call(QuestionCategorySeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(QuestionSeeder::class);
    }
}
