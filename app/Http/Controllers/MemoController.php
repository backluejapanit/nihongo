<?php

namespace App\Http\Controllers;

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
        return response()->json($payload)->status(200);
    }
}
