<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all();
        return view('person.index', ['items' => $items]);
    }

    public function find(Request $request)
    {
        return view('person.find', ['input' => '']);
    }

    public function search(Request $request)
    {
        # スコープメソッドの利用
        $item = Person::nameEqueal($request->input)->first();
        // $item = Person::ageGreaterThan(20)->agelessThan(10)->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('person.find', $param);
    }
}
