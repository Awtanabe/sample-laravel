@extends('layouts.helloapp')

@section('title', 'Index')

@section('member')
  @parent
  インデックスページ
@endsection

@section('content')
  <form action="/hellos/add" method="post">
    <table>
      @csrf
      <tr><th>name:</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
      <tr><th>email:</th><td><input type="email" name="mail"></td></tr>
      <tr><th>age:</th><td><input type="number" name="age"></td></tr>
      <tr><th>age:</th><td><input type="submit" value="send"></td></tr>
    </table>
  </form> -->
@endsection


@section('footer')
copyright 2020
@endsection