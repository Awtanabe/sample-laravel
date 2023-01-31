@extends('layouts.helloapp')

@section('title', 'Index')

@section('member')
  @parent
  インデックスページ
@endsection

@section('content')


  <ul>
    @foreach ($datas as $data)
      <li>{{$data}}</li>
    @endforeach
  </ul>
@endsection


@section('footer')
copyright 2020
@endsection