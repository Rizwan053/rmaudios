<?php

use App\Post;
use App\Category;

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
    
    return view('front.index', compact('posts', 'categories'));
});

Route::get('/category/{id}', function($id){
            $posts = Post::where('category_id','=',$id)->paginate(10);
            $categories = Category::all()->sortByDesc('created_at');
            
            return view('front.category', compact('posts','categories'));
});


// Route::get('post/{id}', ['as' => 'home.post', 'uses' => 'PostController@post']);

Route::get('/post/{slug}', function ($slug) {
    $post = Post::whereSlug($slug)->firstorFail();
    
    $posts = Post::all()->take(3)->sortByDesc('created_at');
    $categories = Category::all()->sortByDesc('created_at');
    

    // $post = Post::whereId($id)->paginate(1);
    return view('front.post', compact('post', 'posts', 'categories'));
});


Route::resource('/search', 'SearchController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin'], function () {
    
    

Route::get('/admin', function () {
    return view('admin.index');
});

Route::resource('/admin/posts', 'PostController');
Route::resource('/admin/categories', 'CategoryController');


});


