@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('css/recipe.css')}}">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
        <img src="{{asset('storage/image/'.$recipe->recipe_image)}}" alt="{{$recipe->recipe_name}}"><br>
        </div>
    </div>

    <h3>材料</h3>
    <div class="row justify-content-left">
        <div class="col">
            <ul>
            <li>{{$recipe->material_1}}</li>
                @if (isset($recipe->material_2))
                <li>{{$recipe->material_2}}</li>
                @endif
                @if (isset($recipe->material_3))
                <li>{{$recipe->material_3}}</li>
                @endif
                @if (isset($recipe->material_4))
                <li>{{$recipe->material_4}}</li>
                @endif
                @if (isset($recipe->material_5))
                <li>{{$recipe->material_5}}</li>
                @endif
            </ul>
        </div>
        <div class="col">
            <ul>
                @if (isset($recipe->material_6))
                <li>{{$recipe->material_6}}</li>
                @endif
                @if (isset($recipe->material_7))
                <li>{{$recipe->material_7}}</li>
                @endif
                @if (isset($recipe->material_8))
                <li>{{$recipe->material_8}}</li>
                @endif
                @if (isset($recipe->material_9))
                <li>{{$recipe->material_9}}</li>
                @endif
                @if (isset($recipe->material_10))
                <li>{{$recipe->material_10}}</li>
                @endif
            </ul>
        </div>
    </div>
    <h3>作り方</h3>
    <div class="row justify-content-left">
        <h5>{{$recipe->recipe}}</h5>
    </div>
</div>
@endsection