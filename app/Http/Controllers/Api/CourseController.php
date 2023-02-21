<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseUser;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getDetail($id) 
    {
        $course = Course::find($id);
        
        $parts = [];
        foreach($course->course_parts as $part){
            $parts[] = [
                'name' => $part->name,
                'part' => $part->part,
                'videos' => $part->videos,
            ];
        }
        $data = [
            'name' => $course->name,
            'price' => $course->price,
            'description' => $course->description,
            'category' => $course->category->name,
            'price' => $course->price,
            'photo' => $course->photo,
            'duration' => $course->duration,
            'parts' => $parts,
        ];
        return $this->sendResponse($data, __('admin.message.success'));
        
    }

    public function getList()
    {
        return $this->sendResponse(Course::all(), __('admin.message.success'));
    }

    public function viewCourse(Request $request) {
        $course_id = $request->course_id;
        $user_id = $request->user_id;
        if (!Course::find($course_id) || !User::find($user_id)){
            return $this->sendError(null, __('admin.message.error'));
        }
        $course_user = CourseUser::where('user_id', '=', $user_id)
        ->where('course_id', '=', $course_id)->first();
        if ($course_user) {
            $course_user->is_seen = 1;
            $course_user->save();
        } else {
            $course_user = CourseUser::create([
                'user_id' => $user_id,
                'course_id' => $course_id,
                'is_favo' => 0,
                'is_subcribe' => 0,
                'is_seen' => 1,
            ]);
        }

        return $this->sendResponse($course_user, __('admin.message.success'));
    }

    public function subcribeCourse(Request $request) {
        $course_id = $request->course_id;
        $user_id = $request->user_id;
        if (!Course::find($course_id) || !User::find($user_id)){
            return $this->sendError(null, __('admin.message.error'));
        }
        $course_user = CourseUser::where('user_id', '=', $user_id)
        ->where('course_id', '=', $course_id)->first();
        if ($course_user) {
            $course_user->is_subcribe = 1;
            $course_user->save();
        } else {
            $course_user = CourseUser::create([
                'user_id' => $user_id,
                'course_id' => $course_id,
                'is_favo' => 0,
                'is_subcribe' => 1,
                'is_seen' => 1,
            ]);
        }

        return $this->sendResponse($course_user, __('admin.message.success'));
    }

    public function favoCourse(Request $request) {
        $course_id = $request->course_id;
        $user_id = $request->user_id;
        if (!Course::find($course_id) || !User::find($user_id)){
            return $this->sendError(null, __('admin.message.error'));
        }
        $course_user = CourseUser::where('user_id', '=', $user_id)
        ->where('course_id', '=', $course_id)->first();
        if ($course_user) {
            $course_user->is_favo = 1;
            $course_user->save();
        } else {
            $course_user = CourseUser::create([
                'user_id' => $user_id,
                'course_id' => $course_id,
                'is_favo' => 1,
                'is_subcribe' => 0,
                'is_seen' => 1,
            ]);
        }

        return $this->sendResponse($course_user, __('admin.message.success'));
    }

    public function listView($id) {
        $user = User::find($id);
        $courses = $user->courses->where('pivot.is_seen', '=', '1');
        return $this->sendResponse($courses, __('admin.message.success'));
    }

    public function listSubcribe($id) {
        $user = User::find($id);
        $courses = $user->courses->where('pivot.is_subcribe', '=', '1');
        return $this->sendResponse($courses, __('admin.message.success'));
    }

    public function listFavo($id) {
        $user = User::find($id);
        $courses = $user->courses->where('pivot.is_favo', '=', '1');
        return $this->sendResponse($courses, __('admin.message.success'));
    }
}
