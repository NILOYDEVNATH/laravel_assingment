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
        return redirect('/tweets/create/');
    }

    public function edit($id){
        $tweets = TweetsModel::where('id',$id)->first();
        return view('tweets.tweets_edit',['tweets'=>$tweets]);
    }

    public function update(Request $request, $id){
        $tweets = TweetsModel::where('id',$id)->first();
        $tweets->body = $request->body;
        $tweets->save();
        return redirect('/tweets');
    }

    public function delete($id){
        $tweets = TweetsModel::find($id);
        $tweets->delete();
        return redirect('/tweets');
    }
}
