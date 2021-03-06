<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnrollmentRequest;
use App\Http\Resources\EnrollmentCollection;
use App\Http\Resources\EnrollmentResource;
use App\Models\CourseVariant;
use App\Models\Enrollment;
use App\Traits\AddsToast;
use Inertia\Inertia;

class EnrollmentController extends Controller
{
    use AddsToast;


    public function index()
    {
        return Inertia::render('Enrollment/Index', [
            'enrollments' => EnrollmentCollection::make(auth()->user()->attendsCourses),
        ]);
    }

    public function show(Enrollment $enrollment)
    {
        return Inertia::render('Enrollment/Show', [
            'enrollment' => EnrollmentResource::make($enrollment),
        ]);
    }

    public function store(StoreEnrollmentRequest $request)
    {
        $request->user()->enrollInCourseVariant(CourseVariant::findOrFail($request->courseVariant));

        $this->addToast('You\'ve been enrolled in this course.');

        return redirect()->route('enrollments.index');
    }

    public function destroy(Enrollment $enrollment)
    {
        if (auth()->user()->attendsCourses->contains($enrollment)) {
            $enrollment->deleteOrFail();

            $this->addToast('You\'ve been withdrawn from this course.');

            return redirect()->route('enrollments.index');
        }

        $this->addToast('You\'re not currently enrolled in this course', 'error');

        return redirect()->route('dashboard');
    }
}
