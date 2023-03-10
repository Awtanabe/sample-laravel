<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MyClasses\MyServiceInterface;



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



  public function index(MyServiceInterface $myservice, int $id = -1) {
    $data = ['msg' => 'フォームを入力'];

    $today = \Chronos::today();




    // if (isset($request -> id))
    // {
    //   $param = ['id' => $request -> id];
    //   // /hellos?id=2 で検索可能
    //   $datas = DB::select('select * from people where id = :id', $param);
    // } else {
    //   $datas = DB::select('select * from people');
    // }

    // $data = [
    //   ['name' => 'name1', 'mail' => 'mail1'],
    //   ['name' => 'name2', 'mail' => 'mail2'],
    //   ['name' => 'name3', 'mail' => 'mail3'],
    // ];

    $data = array('aa' => "hoge", 'bb' => "hoge2", 'cc' => "hoge3");

    // $data = [
    //   'msg' => $myservice->say(),
    //   'data' => $myservice->alldata()
    // ];
    return view('hellos.index', ['datas' => $data, 'today' => $today]);
  }

  public function edit(Request $request) {
    $param = ['id' => $request-> id];
    $item = DB::select('select * from people where id = :id', $param);
    return view('hellos.edit', ['form' => $item[0]]);
  }

  public function update(Request $request) {
    $param = [
      'id' => $request-> id,
      'name' => $request -> name,
      'mail' => $request -> mail,
      'age' => $request -> age
    ];
    $item = DB::update('update people set name = :name, mail = :mail, age = :age where id = :id', $param);
    return redirect('/hellos');
  }

  public function add() {
    return view('hellos.add');
  }

  public function create(Request $request) {
    $param = [
      'name' => $request -> name,
      'mail' => $request -> mail,
      'age' => $request -> age,
    ];

    DB::insert('insert into people (name, mail, age) values (:name, :mail, :age)', $param);
    return redirect('/hellos');
  }

  public function del(Request $request) {
    $param = ['id' => $request-> id];
    $item = DB::select('select * from people where id = :id', $param);

    return view('hellos.del', ['form' => $item[0]]);
  }

  public function remove(Request $request) {
    $param = ['id' => $request-> id];

    DB::delete('delete from people where id =:id', $param);

    return redirect('/hellos');
  }

  public function post(Request $request) {

    $validate_rule = [
      'name' => 'required',
      'mail' => 'email',
      'age' => 'numeric|between:0,150'
    ];
    $this->validate($request, $validate_rule);
    return view('hellos.index', ['msg' => '正しく入力されました']);
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

