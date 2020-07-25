<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('user.index', compact('user'));
    }
    public function edit()
    {
        $x = 'user_edit';

        return view('user.edit', compact('x'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;

        // dd($user, $user->name, $request->name, $user->email, $request->email);
        $user->save();
        return redirect('/user');
    }
    public function post_list()
    {
        $x = 'user_post_list';

        $recipes = Recipe::where('creator_id', Auth::id())->get();
        // dd($list);
        return view('user.post_list', compact('recipes'));
    }
}
