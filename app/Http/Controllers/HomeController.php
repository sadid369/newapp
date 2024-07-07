<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Categories;
use App\Models\MyPost;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    // public function __invoke(Request $request)
    // {
    // //   return DB::table('posts')->where('status',0)->get();
    // // return DB::table('posts')->min('views');
    // // DB::table('posts')->insert([
    // //     'title'=>'This is test data',
    // //     'description'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ipsum facere praesentium laborum quo molestiae consequuntur, vitae repellat molestias rerum.",
    // //     'status'=>1,
    // //     'publish_date'=> date('Y-m-d'),
    // //     'user_id'=>1
    // // ]);
    // // DB::table('categories')->insert([
    // //  [
    // //     'name'=>'News',
    // //  ],
    // //  [
    // //     'name'=>'Tech',
    // //  ],
    // //  [
    // //     'name'=>'Education',
    // //  ],
        
    // // ]);
    // // return DB::table('posts')->join('categories','posts.category_id','=','categories.id')
    // // ->select('title','id')
    // // ->get();
 
    // // DB::table('posts')->where('id',54)->delete();
    // // dd('success');
       
    //     // return view('home', ['blogs' => $blogs]);
    // }
    public function __invoke(Request $request)
    {
    // $posts = Post::where('views',">",100)->get();
     //insert data

    // $post = new Post();
    // $post->title = 'post 4';
    // $post->description = 'This is a description';
    // $post->status = 1;
    // $post->publish_date = date("Y-m-d");
    // $post->user_id= 1;
    // $post->category_id = 1;
    // $post->views = 400;
    // $post->save();

    //update data 
    
    // $post = Post::where('id',57)->first();
    // $post->title = 'this is new title';
    // $post->description = 'this is new des';
    // $post->save();

   //delete data

  //  Post::findOrFail(580)->delete();

  //  Post::where('id','=',57)->delete();
  
  
  // mass assign
  
  // $post = Post::create([
    //   'title' =>'This is form mass assign',
    //   'description'=>'This mass  description',
    //   'status'=>1,
    //   'publish_date'=> date("Y-m-d"),
    //   'user_id'=>1,
    //   'category_id'=>1,
    //   'views'=>500
    // ]);
    
    // mass update
    
    // $post = Post::where('status',1)->update([
      //   'status'=>5,
      // ]);
  // Post::where('id','=',56)->delete();
  // dd('success');

  // return Post::onlyTrashed()->get();
  // Post::withTrashed()->find(56)->restore();
  // Post::withTrashed()->find(56)->forceDelete();

  // $post = Post::all();
  //   return $post;
  //  $users= User::all();
  // $addresses = Address::all();
  //  return view('home',['addresses'=>$addresses]);

  $cat = Categories::find(1)->posts;
  return view('home',compact('cat'));
  return $cat;
    }
}
