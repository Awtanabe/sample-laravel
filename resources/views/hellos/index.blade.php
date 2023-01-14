@extends('layouts.helloapp')

@section('title', 'Index')

@section('member')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツ</p>
  <p>必要なだけ記述</p>

  <!-- @include('components.message', ['msg_title' => "msg_title", 'msg_content' => 'msg_title']) -->


  <p>これは、<middleware>google.com</middleware>へのリンクです</p>
  <p>これは、<middleware>yahoo.com</middleware>へのリンクです</p>
  <p> Provider Message: {{$view_message}}</p>
@endsection


@section('footer')
copyright 2020
@endsection