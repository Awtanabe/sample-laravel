@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('member')
  @parent
  インデックスページ

@endsection


@section('content')
  <a href="person/find">検索する</a>
  <table>
    <tr><th>Data</th></tr>
    @foreach ($items as $item)
      <tr>
        <td>{{$item->getData()}}</td>
      </tr>
    @endforeach
  </table>
@endsection

@section('footer')
copyright 2020 tuyano
@endsection