<?php

use App\Post;
use App\Category;
use App\Subscriber;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = Post::orderBy('created_at', 'desc')->paginate(10);
    $categories = Category::all()->sortByDesc('created_at');
    $subscribers = Subscriber::all();
    
    
    
    return view('front.index', compact('posts', 'categories', 'subscribers'));
});

Route::get('/category/{id}', function($id){
            $posts = Post::where('category_id','=',$id)->paginate(10);
            $categories = Category::all()->sortByDesc('created_at');
            $subscribers = Subscriber::all();
            
            return view('front.category', compact('posts','categories', 'subscribers'));
});


// Route::get('post/{id}', ['as' => 'home.post', 'uses' => 'PostController@post']);

Route::get('/post/{slug}', function ($slug) {
    $post = Post::whereSlug($slug)->firstorFail();
    
    $posts = Post::all()->take(3)->sortByDesc('created_at');
    $categories = Category::all()->sortByDesc('created_at');
    $subscribers = Subscriber::all();
    

    // $post = Post::whereId($id)->paginate(1);
    return view('front.post', compact('post', 'posts', 'categories', 'subscribers'));
});


Route::resource('/search', 'SearchController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => 'admin'], function () {

Route::get('/admin', function(){

        $posts = Post::all();
        $categories = Category::all();
        $subscribers = Subscriber::all();
        return view('admin.index', compact('posts', 'categories', 'subscribers'));
});
    


Route::resource('/admin/posts', 'PostController');
Route::resource('/admin/subscribers', 'SubscriberController');
Route::resource('/admin/categories', 'CategoryController');


});


