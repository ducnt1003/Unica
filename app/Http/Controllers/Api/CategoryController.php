<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list() {
        $categories = Category::all();
        return $this->sendResponse($categories, __('admin.message.success'));
    }

    public function getCateCourse($id) {
        $courses = Course::where('category_id', '=', $id)->get();
        return $this->sendResponse($courses, __('admin.message.success'));
    }
}
