<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            [
                'title' => 'Dasar Pengembangan Website',
                'slug' => 'dasar-pengembangan-website',
                'description' => 'Pelajari dasar membangun website dari awal secara bertahap.',
                'category' => 'Pemrograman',
                'level' => 'pemula',
                'is_published' => true,
            ],
            [
                'title' => 'Dasar Desain Digital',
                'slug' => 'dasar-desain-digital',
                'description' => 'Pelajari warna, komposisi, dan dasar desain antarmuka.',
                'category' => 'Desain Digital',
                'level' => 'pemula',
                'is_published' => true,
            ],
            [
                'title' => 'Mengenal Teknologi Digital',
                'slug' => 'mengenal-teknologi-digital',
                'description' => 'Kenali konsep teknologi modern dan penerapannya.',
                'category' => 'Teknologi',
                'level' => 'pemula',
                'is_published' => true,
            ],
            [
                'title' => 'Dasar Bisnis di Era Digital',
                'slug' => 'dasar-bisnis-era-digital',
                'description' => 'Kenali strategi dasar membangun ide bisnis digital.',
                'category' => 'Bisnis Digital',
                'level' => 'pemula',
                'is_published' => true,
            ],
        ];

        foreach ($courses as $course) {
            Course::updateOrCreate(
                ['slug' => $course['slug']],
                $course
            );
        }
    }
}