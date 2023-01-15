@extends('layouts.helloapp')

@section('title', 'Add')

@section('member')
  @parent
  削除ページ
@endsection

@section('content')
  <form action="/hellos/remove" method="post">
    <table>
      @csrf
      <input type="hidden" name="id" value="{{$form->id}}">
      <tr><th>name:</th><td>{{$form->name}}</td></tr>
      <tr><th>email:</th><td>{{$form->mail}}</td></tr>
      <tr><th>age:</th><td>{{$form->age}}</td></tr>
      <tr><th>削除</th><td><input type="submit" value="send"></td></tr>
    </table>
  </form> -->
@endsection


@section('footer')
copyright 2020
@endsection