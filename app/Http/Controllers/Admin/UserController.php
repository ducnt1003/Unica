<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // protected $userRepo;

    // public function __construct(UserRepositoryInterface $userRepo)
    // {
    //     $this->userRepo = $userRepo;
    // }

    public function index()
    {
        $users = DB::table('users')->get();
        return view('admin.users.index',[
            'users' => $users,
            'title' => "User",
        ]);
    }
}
