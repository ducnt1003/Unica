<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::with(['category','user'])->paginate();
        
        return view('admin.pages.index',
        [
            'courses' => $courses,
            'title' => "Course"
        ]);
    }

    public function create()
    {
        $categories = DB::table('categories')->get();
        return view('admin.pages.create', ['title' => "Create Content", 'categories' => $categories]);
    }

    public function store()
    {
        Session::flash('success','Create new course success');
        return $this->index();
    }
}
