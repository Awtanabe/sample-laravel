@extends('layouts.helloapp')

@section('title', 'Index')

@section('member')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>{{$msg}}</p>
  @if(count($errors) > 0)
  <div>
    <ul>
      @foreach ($errors -> all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <form action="/hellos" method="post">
    <table>
      @csrf
      <tr><th>name:</th><td><input type="text" name="name"></td></tr>
      <tr><th>email:</th><td><input type="text" name="email"></td></tr>
      <tr><th>age:</th><td><input type="text" name="age"></td></tr>
      <tr><th>age:</th><td><input type="submit" value="send"></td></tr>
    </table>
  </form>
@endsection


@section('footer')
copyright 2020
@endsection