<?php

namespace App\Http\Controllers\ApiTokens;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiTokensController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('apitokens.index');
    }

    public function store(Request $request)
    {
        $token = $request->user()->createToken($request->name);

        return back()->withTokenmessage($token->plainTextToken);
    }
}
