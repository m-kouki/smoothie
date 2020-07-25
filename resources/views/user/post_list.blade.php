@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('css/recipe.css')}}">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">

            @foreach ($recipes as $recipe)
                <div class="col-8">
                    <div class="card">
                        <label for="{{$recipe->recipe_name}}">
                            <div class="card-header sticky-top">
                                    <a href="{{route('recipe.detail',['recipe_id' => $recipe->recipe_id])}}">{{$recipe->recipe_name}}</a>
                            </div>
                        </label>
                        <div class="card-body row">
                            <div class="row justify-content-center">
                                <img src="{{asset('storage/image/'.$recipe->recipe_image)}}" alt="{{$recipe->recipe_name}}" id="{{asset($recipe->recipe_image)}}" >
                            </div>
                            
                        </div>        
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection