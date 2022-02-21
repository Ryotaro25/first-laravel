@extends('layouts.helloapp')
<style>
    .pagination { font-size: 10pt;}
    .pagination li { display: inline-block;}
</style>

@section('title', 'Indextest')

@section('menubar')
  @parent
  index page
    
@endsection

@section('content')
    @if (Auth::check())
        <p>User: {{$user->name . ' (' . $user->email . ')' }}</p>
    @else
        *you need to login( <a href="/login">Login</a>) | <a href="/register">Register</a>
    @endif

    <table>
        <tr>
            <th><a href="/hello?sort=id">ID</a></th>
            <th><a href="/hello?sort=name">Name</a></th>
            <th><a href="/hello?sort=mail">Mail</a></th>
            <th><a href="/hello?sort=age">Age</a></th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
    </table>
    {{$items->appends(['sort' => $sort])->links()}}
@endsection

@section('footer')
    copyright 2022 ryo
@endsection