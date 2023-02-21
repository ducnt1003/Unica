<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getInfo($id) {
        return $this->sendResponse(User::find($id), __('admin.message.success'));
    }
}
