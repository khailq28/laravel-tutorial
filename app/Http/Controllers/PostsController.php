<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index () {

        // Non fluent
        // DB::select(['table' => 'posts', 'where' => ['id' = 1]])

        // fluenet
        // DB::table('posts')->where('id', 1)->get()
        
        // $post = DB::select('select * from posts where id=:id', ['id' => 1]);

        $id = 1;
        // $post = DB::table('posts')->where('id', $id)->get();
        
        // $post = DB::table('posts')->select('body')->get();
        
        // $post = DB::table('posts')
        //     ->where('created_at', '<', now()->subDay())
        //     ->orWhere('title', 'Prof.')
        //     ->get();

        // $post = DB::table('posts')
        //     ->whereBetween('id', [1, 3])
        //     ->get();

        // $post = DB::table('posts')
        //     ->whereNotNull('title')
        //     ->get();
        
        // $post = DB::table('posts')
        //     ->select('title')
        //     ->distinct()
        //     ->get();

        // $post = DB::table('posts')
        //     ->orderBy('title', 'asc')
        //     ->get();

        // ngay tao
        // $post = DB::table('posts')
        //     ->latest()
        //     ->get();

        // $post = DB::table('posts')
        //     ->oldest()
        //     ->get();

        // $post = DB::table('posts')
        //     ->inRandomOrder()
        //     ->get();

        // min('id'), avg('id'), sum('di')
        // $post = DB::table('posts')
        //     ->avg('id');

        // $post = DB::table('posts')
        //     ->insert([
        //         'title' => 'New Posts', 'body' => 'NEW POSTS'
        //     ]);

        // $post = DB::table('posts')
        //     ->where('id', '=', 4)
        //     ->update([
        //         'title' => 'New Postsssss', 'body' => 'NEW POSTSss'
        //     ]);

        $post = DB::table('posts')
            ->where('id', '=', 4)
            ->delete();
        
        dd($post);
        
        // return view('posts/index');
    }
}