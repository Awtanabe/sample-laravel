@extends('layouts.helloapp')

@section('title', 'Index')

@section('member')
  @parent
  新規作成スページ
@endsection

@section('content')
  @if (count($errors) > 0)
  <div>
    <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
    </ul>
  </div>
  @endif
  <form action="/person/add" method="post">
    <table>
      @csrf
      <tr><th>name: </th> <td><input type="text" name="name" value="{{old('name')}}"></td></tr>
      <tr><th>mail: </th> <td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
      <tr><th>age: </th> <td><input type="text" name="age" value="{{old('age')}}"></td></tr>
      <tr><td><input type="submit" value="send"></td></tr>
    </table>

  </form>

@endsection


@section('footer')
copyright 2020
@endsection