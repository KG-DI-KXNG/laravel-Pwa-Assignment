<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        // Ordered by course code; data lives in the `courses` DB table
        $courses = Course::orderBy('code')->get();

        return view('pages.courses', compact('courses'));
    }

    public function show(Course $course)
    {
        return view('pages.course-detail', compact('course'));
    }
}
