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
        <td>
          <a href="person/edit?id={{$item->id}}">{{$item->getData()}}</a>
          <a href="person/remove?id={{$item->id}}">削除する</a>
        </td>
      </tr>
    @endforeach
  </table>
@endsection

@section('footer')
copyright 2020 tuyano
@endsection