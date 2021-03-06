<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAssistantshipRequest;
use App\Models\Assistantship;
use App\Models\CourseVariant;
use App\Models\User;
use Illuminate\Http\Response;

class AssistantshipController extends Controller
{
    public function store(StoreAssistantshipRequest $request)
    {
        $courseVariant = CourseVariant::findOrFail($request->courseVariant);
        $user = User::findOrFail($request->assistant);

        $user->designateAssistantToCourseVariant($courseVariant, $user);

        return back()->with('success', __('You have successfully set that user as an assistant.'));
    }

    public function destroy(Assistantship $assistantship)
    {
        if ($assistantship->courseVariant->course->tutor->id === auth()->user()->id) {
            $assistantship->delete();
            return back()->with('success', __('You have successfully removed that user\'s assistantship.'));
        }

        abort(403, __('You are not the tutor of this course.'));
    }
}
