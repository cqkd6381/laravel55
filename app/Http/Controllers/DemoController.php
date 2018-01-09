<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use Gate;

class DemoController extends Controller
{
    public function test1()
    {
    	$user = Auth::loginUsingId(2);
    	$post = Post::findOrFail(1);
    	if (Gate::allows('update-post', $post)) {
		    // 指定用户可以更新博客...
		    echo '恭喜，你可以访问';
		}else{
		    echo '对不起，你不可以访问';
		}
    }

    public function test2()
    {
    	$user = Auth::loginUsingId(1);
    	$post = Post::findOrFail(1);
    	return view('demo',['post'=>$post]);
    }
}
