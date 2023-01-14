<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  // パラメーターをただ表示したい場合
  //
  // public function index($id) {
  //     $data = ['msg' => 'aaa', 'id' => $id];
  //     return view('hellos.index', $data);
  // }
  // Request利用
  // public function index(Request $request) {
  //   $data = ['id' => $request-> id];
  //   return view('hellos.index', $data);
  // }

  public function index(Request $request) {
    // $data = ['msg' => ''];

    // $data = [
    //   ['name' => 'name1', 'mail' => 'mail1'],
    //   ['name' => 'name2', 'mail' => 'mail2'],
    //   ['name' => 'name3', 'mail' => 'mail3'],
    // ];

    // $data = array('aa' => "hoge", 'bb' => "hoge2", 'cc' => "hoge3");
    return view('hellos.index', ['data' => $request->data]);
  }

  public function post(Request $request) {
    $data = ['msg' =>  $request-> msg];
    return view('hellos.index', $data);
  }
}

// @if ($msg != '')

//   <p>{{$msg}}</p>
// @else
//  <p>何かかいてください</p>
// @endif

// データが普通の配列
// @foreach($data as $item)
//     @if ($loop-> first)
//     <p>データ一覧</p>
//     <ul>
//     @endif
//     <li>NO, {{$loop->iteration}} .{{$item}}</li>
//     @if ($loop-> last)
//     </ul><p>ここままで</p>
//     @endif
// @endforeach

// データが連想配列

