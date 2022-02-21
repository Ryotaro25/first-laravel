@extends('layouts.helloapp')

@section('title', 'user auth')
    
@section('menubar')
    @parent
    User Auth Page
@endsection

@section('content')
    <p>
        {{$message}}
    </p>
    <form action="/hello/auth" method="post">
        <table>
            @csrf
            <tr>
                <th>Mail</th>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="send"></td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')
    copyright 2020 Ryo
@endsection