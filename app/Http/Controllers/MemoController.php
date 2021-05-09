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

        $categories = Category::query()
            ->where('user_id', '=', Auth::user()->id)
            ->get();

        $memos = Memo::query()
            ->where('user_id', '=', Auth::user()->id)
            ->where('category_id', '=', $request->category)
            ->with('category')
            ->paginate(10);

        $message = '追加しました。';

        return view('home', compact('categories', 'memos', 'message'));
    }
}
