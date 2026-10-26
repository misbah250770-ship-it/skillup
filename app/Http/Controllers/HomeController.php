<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $courses = Course::query()
            ->where('is_published', true)
            ->latest()
            ->get();

        return view('home', compact('courses'));
    }
}