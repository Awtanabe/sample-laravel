@extends('layouts.helloapp')

@section('title', 'Edit')

@section('member')
  @parent
  更新ページ
@endsection

@section('content')

  <form action="/hellos/edit" method="post">
    <table>
        @csrf
        <input type="text" name="id" value="{{$form ->id}}">
        <tr><th>name:</th><td><input type="text" name="name" value="{{$form ->name}}"></td></tr>
        <tr><th>email:</th><td><input type="email" name="mail" value="{{$form ->mail}}"></td></tr>
        <tr><th>age:</th><td><input type="number" name="age" value="{{$form -> age}}"></td></tr>
        <tr><th>age:</th><td><input type="submit" value="send"></td></tr>
    </table>
  </form>
@endsection


@section('footer')
copyright 2020
@endsection