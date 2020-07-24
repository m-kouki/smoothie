@extends('layouts.app')

@section('content')
<table>
    <tr>
        <td>
            ユーザー名：{{$user->name}}        
        </td>
    </tr>
    <tr>
        <td>
            メールアドレス:{{$user->email}}
        </td>
    </tr>
</table>
<a href="{{route('user.edit')}}">編集</a>
@endsection