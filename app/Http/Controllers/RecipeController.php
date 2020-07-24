<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();

        // dd($recipes);
        return view('recipe.index', compact('recipes'));
    }

    public function detail(Request $request)
    {
        $recipe = Recipe::where('recipe_id', $request->recipe_id)
            ->first();

        // dd($recipe->recipe_image);
        return view('recipe.detail', compact('recipe'));
    }
}
