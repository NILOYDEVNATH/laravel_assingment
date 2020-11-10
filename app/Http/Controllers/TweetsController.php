<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TweetsModel;

class TweetsController extends Controller
{
    public function show(){
        $tweets_list = TweetsModel::all();
        return view('tweets.tweets_list',[
            'tweets_list' => $tweets_list
        ]);
    }

    public function index(){
        return view('tweets.create');
    }

    public function store(Request $request){
        $body = $request->body;
        TweetsModel::create([
            'body' => $body
        ]);
        return redirect('tweets');
    }
}
