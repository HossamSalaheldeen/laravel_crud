<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $allPosts;

    public function __construct() {
        $this->allPosts = [
            ['id' => 1, 'title' => 'laravel','description'=>'laravel is awsome framework', 'posted_by' => 'Ahmed', 'email'=>'ahmed@gmail.com' ,'created_at' => '2021-03-20'],
            ['id' => 2, 'title' => 'PHP','description'=>'PHP is awsome framework', 'posted_by' => 'Mohamed', 'email'=>'mohamed@gmail.com' , 'created_at' => '2021-04-15'],
            ['id' => 3, 'title' => 'Javascript','description'=>'Javascript is awsome framework', 'posted_by' => 'Ali', 'email'=>'ali@gmail.com' , 'created_at' => '2021-06-01'],
        ];
    }
    public function index()
    {
        
        return view('posts.index', [
            'posts' => $this->allPosts
        ]);
    }

    public function show($postId)
    {
        //dd($this->allPosts[$postId - 1]);
        //$post = ['id' => $postId, 'title' => 'laravel', 'description' => 'laravel is awsome framework', 'posted_by' => 'Ahmed', 'email'=>'ahmed@gmail.com', 'created_at' => '2021-03-20'];
        // $this->allPosts['id'] = $postId;
        
        //dd($this->allPosts);
        return view('posts.show', [
            'post' => $this->allPosts[$postId - 1]
        ]);
    }

    public function edit($postId)
    {
        return view('posts.edit',[
            'post' => $this->allPosts[$postId - 1]
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    

    public function store()
    {
        return redirect()->route('posts.index');
    }
    
    
}
