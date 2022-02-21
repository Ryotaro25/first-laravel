@extends('layouts.helloapp')

@section('title', 'Show')

@section('menubar')
  @parent
  detail page
    
@endsection

@section('content')
    @if ($items !== null)
        @foreach ($items as $item)
            <table>
                <tr>
                    <th>id: <td>{{$item->id}}</td></th>
                    <th>name: <td>{{$item->name}}</td></th>
                    <th>mail: <td>{{$item->mail}}</td></th>
                    <th>age: <td>{{$item->age}}</td></th>
                </tr>
            </table>
        @endforeach
        
    @endif
    
@endsection

@section('footer')
    copyright 2022 ryo
@endsection