<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Recipe;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $x = 'post.create';
        return view('post.create', compact('x'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materials = [];
        if ($request->unit_1 === '大さじ' || $request->unit_1 === '小さじ') {
            $materials[] = $request->material_1 . ':' . $request->unit_1  . $request->amount_1 . '杯';
        } else {
            $materials[] = $request->material_1 . ':' . $request->amount_1  . $request->unit_1;
        }
        if (isset($request->material_2)) {
            if ($request->unit_2 === '大さじ' || $request->unit_2 === '小さじ') {
                $materials[] = $request->material_2 . ':' . $request->unit_2  . $request->amount_2 . '杯';
            } else {
                $materials[] = $request->material_2 . ':' . $request->amount_2  . $request->unit_2;
            }
            if (isset($request->material_3)) {
                if ($request->unit_3 === '大さじ' || $request->unit_3 === '小さじ') {
                    $materials[] = $request->material_3 . ':' . $request->unit_3  . $request->amount_3 . '杯';
                } else {
                    $materials[] = $request->material_3 . ':' . $request->amount_3  . $request->unit_3;
                }
                if (isset($request->material_4)) {
                    if ($request->unit_4 === '大さじ' || $request->unit_4 === '小さじ') {
                        $materials[] = $request->material_4 . ':' . $request->unit_4  . $request->amount_4 . '杯';
                    } else {
                        $materials[] = $request->material_4 . ':' . $request->amount_4  . $request->unit_4;
                    }
                    if (isset($request->material_5)) {
                        if ($request->unit_5 === '大さじ' || $request->unit_5 === '小さじ') {
                            $materials[] = $request->material_5 . ':' . $request->unit_5  . $request->amount_5 . '杯';
                        } else {
                            $materials[] = $request->material_5 . ':' . $request->amount_5  . $request->unit_5;
                        }
                        if (isset($request->material_6)) {
                            if ($request->unit_6 === '大さじ' || $request->unit_6 === '小さじ') {
                                $materials[] = $request->material_6 . ':' . $request->unit_6  . $request->amount_6 . '杯';
                            } else {
                                $materials[] = $request->material_6 . ':' . $request->amount_6  . $request->unit_6;
                            }
                            if (isset($request->material_7)) {
                                if ($request->unit_7 === '大さじ' || $request->unit_7 === '小さじ') {
                                    $materials[] = $request->material_7 . ':' . $request->unit_7  . $request->amount_7 . '杯';
                                } else {
                                    $materials[] = $request->material_7 . ':' . $request->amount_7  . $request->unit_7;
                                }
                                if (isset($request->material_8)) {
                                    if ($request->unit_8 === '大さじ' || $request->unit_8 === '小さじ') {
                                        $materials[] = $request->material_8 . ':' . $request->unit_8  . $request->amount_8 . '杯';
                                    } else {
                                        $materials[] = $request->material_8 . ':' . $request->amount_8  . $request->unit_8;
                                    }
                                    if (isset($request->material_9)) {
                                        if ($request->unit_9 === '大さじ' || $request->unit_9 === '小さじ') {
                                            $materials[] = $request->material_9 . ':' . $request->unit_9  . $request->amount_9 . '杯';
                                        } else {
                                            $materials[] = $request->material_9 . ':' . $request->amount_9  . $request->unit_9;
                                        }
                                        if (isset($request->material_10)) {
                                            if ($request->unit_10 === '大さじ' || $request->unit_10 === '小さじ') {
                                                $materials[] = $request->material_10 . ':' . $request->unit_10  . $request->amount_10 . '杯';
                                            } else {
                                                $materials[] = $request->material_10 . ':' . $request->amount_10  . $request->unit_10;
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $count = 10 - count($materials);
        for ($i = 1; $i <= $count; $i++) {
            $materials[] = null;
        }

        $image = $request->file('recipe_image')->store('public/image');
        $image = str_replace('public/image/', '', $image);

        $recipe = new Recipe;

        $recipe->creator_id = Auth::id();
        $recipe->recipe_name = $request->recipe_name;
        $recipe->recipe_image = $image;
        $recipe->recipe = $request->recipe;
        $recipe->material_1 = $materials[0];
        $recipe->material_2 = $materials[1];
        $recipe->material_3 = $materials[2];
        $recipe->material_4 = $materials[3];
        $recipe->material_5 = $materials[4];
        $recipe->material_6 = $materials[5];
        $recipe->material_7 = $materials[6];
        $recipe->material_8 = $materials[7];
        $recipe->material_9 = $materials[8];
        $recipe->material_10 = $materials[9];




        // dd($image);
        $recipe->save();
        return redirect(route('recipe.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
