@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('member')
  @parent
  インデックスページ

@endsection


@section('content')
  <form action="/person/find" method="post">
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="find">
  </form>

  @if(isset($item))
  <table>
    <tr><th>{{$item->getData()}}</th></tr>
  </table>
  @else
    <p>「{{$input}}」では、該当ありませんでした</p>
  @endif
@endsection

@section('footer')
copyright 2020 tuyano
@endsection
