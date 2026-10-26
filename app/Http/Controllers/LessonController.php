<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;

class LessonController extends Controller
{
    public function index(Course $course)
    {
        $lessons = Lesson::where('course_id', $course->id)
            ->where('is_published', true)
            ->orderBy('order_number')
            ->get();

        return view('lessons.index', compact('course', 'lessons'));
    }

    public function show(Course $course, Lesson $lesson)
    {
        abort_unless($lesson->course_id === $course->id, 404);
        abort_unless($lesson->is_published, 404);

        return view('lessons.show', compact('course', 'lesson'));
    }
}