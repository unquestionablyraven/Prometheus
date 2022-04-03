<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            PermissionSeeder::class,
            AwardingBodySeeder::class,
            ExamSessionSeeder::class,
            CourseLevelSeeder::class,
        ]);

        Subject::factory(50)->create();

        $raven = User::factory([
            'name' => 'Raven',
            'email' => 'raven@prometheus.test',
        ])->create();

        $raven->assignRole('Icarus');

        $tutors = User::factory(5)->create();

        foreach ($tutors as $tutor) {
            $tutor->assignRole('Tutor');
        }

        $assistants = User::factory(15)->create();

        foreach ($assistants as $assistant) {
            $assistant->assignRole('Assistant');
        }

        $students = User::factory(250)->create();

        foreach ($students as $student) {
            $student->assignRole('Student');
        }
    }
}
