@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('css/post.css')}}">
@endsection
@section('content')
<form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
    @csrf
        <h2>レシピ名</h2><input type="text" name="recipe_name"><br>
        <input type="file" name="recipe_image" >
        <h2>作り方</h2><textarea name="recipe" id="" cols="30" rows="5"></textarea>
    <table>
        <tr><th>材料</th><th>分量</th><th>単位</th></tr>
        @for ($i = 1; $i <= 10; $i++)
        <tr>
            <td>
            <input type="text" name="{{'material_'.$i}}">
            </td>
            <td>
                <input type="number" name="{{'amount_'.$i}}">
            </td>   
            <td>
                <select name="{{'unit_'.$i}}">
                    <option value=>未選択</option>
                    <option value="g">g</option>
                    <option value="ml">ml</option>
                    <option value="大さじ">大さじ</option>
                    <option value="小さじ">小さじ</option>
                    <option value="個">個</option>
                </select>
            </td>
        </tr>
        @endfor
    </table>
    <input type="submit" value="投稿">
</form>
@endsection