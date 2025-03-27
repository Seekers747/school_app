<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        $teachers = [
            ['name' => 'Jan Jansen', 'hobbies' => 'Schaken'],
            ['name' => 'Emma de Vries', 'hobbies' => 'Tekenen'],
            ['name' => 'Lucas Bakker', 'hobbies' => 'Lezen'],
            ['name' => 'Sophie Visser', 'hobbies' => 'Reizen'],
            ['name' => 'Mark Peeters', 'hobbies' => 'Muziek'],
        ];

        foreach ($teachers as $teacher) {
            Teacher::create($teacher);
        }
    }
}
