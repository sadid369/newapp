<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
    //   return DB::table('posts')->where('status',0)->get();
      return DB::table('posts')->min('views');
    // DB::table('posts')->insert([
    //     'title'=>'This is test data',
    //     'description'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ipsum facere praesentium laborum quo molestiae consequuntur, vitae repellat molestias rerum.",
    //     'status'=>1,
    //     'publish_date'=> date('Y-m-d'),
    //     'user_id'=>1
    // ]);
    // DB::table('categories')->insert([
    //  [
    //     'name'=>'News',
    //  ],
    //  [
    //     'name'=>'Tech',
    //  ],
    //  [
    //     'name'=>'Education',
    //  ],
        
    // ]);
    // return DB::table('posts')->join('categories','posts.category_id','=','categories.id')
    // ->select('title','id')
    // ->get();
 
    // DB::table('posts')->where('id',54)->delete();
    // dd('success');
       
        // return view('home', ['blogs' => $blogs]);
    }
}
