<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Memo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemoController extends Controller
{
    public function __construct()
    {
    }

    public function store(Request $request)
    {
        $payload = $request->all();
        unset($payload['_token']);
        $payload['user_id'] = Auth::user()->id;

        Memo::query()->create($payload);

        return \Redirect::route('home', [
            'category' => $request->category,
            'page' => $request->page,
            'message' => 'add'

        ]);
    }
    public function delete(Request $request, $id)
    {
        $del_Memo = Memo::find($id);

        $del_Memo->delete();

        return \Redirect::route('home', [
            'category' => $request->category,
            'page' => $request->page,
            'message' => 'del'

        ]);
    }
}
