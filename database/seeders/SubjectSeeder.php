<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Teacher;

class SubjectSeeder extends Seeder
{
    public function run()
    {
        $subjects = [
            ['name' => 'Wiskunde', 'description' => 'Algebra en meetkunde'],
            ['name' => 'Biologie', 'description' => 'Planten en dieren'],
            ['name' => 'Geschiedenis', 'description' => 'Wereldgeschiedenis'],
            ['name' => 'Aardrijkskunde', 'description' => 'Geografie en topografie'],
            ['name' => 'Scheikunde', 'description' => 'Reacties en stoffen'],
            ['name' => 'Natuurkunde', 'description' => 'Mechanica en elektriciteit'],
            ['name' => 'Engels', 'description' => 'Taal en grammatica'],
            ['name' => 'Nederlands', 'description' => 'Taal en literatuur'],
            ['name' => 'Informatica', 'description' => 'Programmeren en systemen'],
            ['name' => 'Economie', 'description' => 'Markten en geldzaken'],
        ];

        $teachers = Teacher::all();
        $teacherCount = $teachers->count();

        foreach ($subjects as $index => $subject) {
            Subject::create([
                'name' => $subject['name'],
                'description' => $subject['description'],
                'teacher_id' => $teachers[$index % $teacherCount]->id,
            ]);
        }
    }
}
