<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $x = 'user_index';
        $user = Auth::user();

        return view('user.index', compact('user'));
    }
    public function edit()
    {
        $x = 'user_edit';

        return view('user.edit', compact('x'));
    }
    public function post_list()
    {
        $x = 'user_post_list';

        return view('user.post_list', compact('x'));
    }
}
