<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    public function run(): void
    {
        $course = Course::where(
            'slug',
            'dasar-pengembangan-website'
        )->first();

        if (!$course) {
            return;
        }

        $lessons = [
            [
                'title' => 'Pengenalan Website',
                'content' => "Website adalah kumpulan halaman yang dapat diakses melalui browser.\n\nContohnya adalah website pendidikan, toko online, dan portal berita.\n\nDalam pengembangan website, kita akan mengenal HTML untuk struktur halaman, CSS untuk tampilan, dan JavaScript untuk interaksi.",
                'order_number' => 1,
                'duration_minutes' => 10,
                'is_published' => true,
            ],
            [
                'title' => 'Mengenal HTML',
                'content' => "HTML digunakan untuk menyusun struktur halaman website.\n\nElemen HTML dapat digunakan untuk membuat judul, paragraf, tautan, gambar, dan daftar.\n\nContoh elemen dasar: h1 untuk judul, p untuk paragraf, dan a untuk tautan.",
                'order_number' => 2,
                'duration_minutes' => 15,
                'is_published' => true,
            ],
            [
                'title' => 'Dasar CSS',
                'content' => "CSS digunakan untuk mengatur tampilan website.\n\nDengan CSS, kita dapat mengubah warna, ukuran teks, jarak, tata letak, dan latar belakang.\n\nHTML membentuk struktur halaman, sedangkan CSS membuat halaman lebih menarik dan mudah digunakan.",
                'order_number' => 3,
                'duration_minutes' => 15,
                'is_published' => true,
            ],
        ];

        foreach ($lessons as $lesson) {
            Lesson::updateOrCreate(
                [
                    'course_id' => $course->id,
                    'order_number' => $lesson['order_number'],
                ],
                $lesson
            );
        }
    }
}