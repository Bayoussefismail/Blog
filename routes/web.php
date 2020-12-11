<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [
  'uses' => 'FrontEndController@index',
  'as' => 'home'
]);
Route::get('/about', function() {
  return view('about')   ->with('title', \App\Setting::first()->site_name)
     ->with('categories', \App\Category::all())
     ->with('first_post', \App\Post::orderBy('created_at', 'desc')->first())
     ->with('posts', \App\Post::orderBy('created_at', 'desc')->get());
});
Route::get('/results', function(){
  $posts = \App\Post::where('title', 'like', '%'. request('query') . '%')->get();
  return view('results')->with('posts', $posts)
                        ->with('title', 'Search results: '. request('query'))
                        ->with('settings', \App\Setting::first())
                        ->with('categories', \App\Category::take(4)->get())
                        ->with('query', request('query'));
});
Route::get('/Contact', [
  'uses' => 'ContactController@Contact',
  'as' => 'Contact'
]);
Route::get('/login', [
  'uses' => 'LoginController@index',
  'as' => 'login'
]);
Route::get('/category/{slug}', [
  'uses' => 'FrontEndController@category',
  'as' => 'category.single'
]);

Route::get('/{slug}', [
  'uses' => 'FrontEndController@singlePost',
  'as' => 'post.single'
]);

Auth::routes();





Route::group(['prefix'=> 'admin', 'middleware' => 'auth'], function(){

Route::get('/home', [
  'uses' => 'HomeController@index',
  'as' => 'home'
]);



  Route::get('/post/create', [
    'uses' => 'PostsController@create',
    'as' => 'post.create'
  ]);

  Route::post('/post/store', [
    'uses' => 'PostsController@store',
    'as' => 'post.store'
  ]);

  Route::get('/category/create', [
    'uses' => 'CategoriesController@create',
    'as' => 'category.create'
  ]);
  Route::get('/category/trashed', [
    'uses' => 'PostsController@trashed',
    'as' => 'posts.trashed'
  ]);
  Route::get('/category/kill/{id}', [
    'uses' => 'PostsController@kill',
    'as' => 'posts.kill'
  ]);
  Route::get('/category/restore/{id}', [
    'uses' => 'PostsController@restore',
    'as' => 'posts.restore'
  ]);
  Route::get('/categories', [
    'uses' => 'CategoriesController@index',
    'as' => 'categories'
  ]);
  Route::post('/category/store', [
    'uses' => 'CategoriesController@store',
    'as' => 'category.store'
  ]);
  Route::get('/category/edit/{id}', [
    'uses' => 'CategoriesController@edit',
    'as' => 'category.edit'
    ] );
    Route::get('/category/delete/{id}', [
      'uses' => 'CategoriesController@destroy',
      'as' => 'category.delete'
      ] );
    Route::post('/category/update/{id}', [
        'uses' => 'CategoriesController@update',
        'as' => 'category.update'
        ] );
        Route::get('/post/delete/{id}', [
            'uses' => 'PostsController@destroy',
            'as' => 'post.delete'
            ] );
            Route::get('/post/edit/{id}', [
                'uses' => 'PostsController@edit',
                'as' => 'post.edit'
                ] );
                Route::post('/post/update/{id}', [
                    'uses' => 'PostsController@update',
                    'as' => 'post.update'
                    ] );
        Route::post('/post/delete/{id}', [
            'uses' => 'PostsController@destroy',
            'as' => 'post.delete'
            ] );
  Route::get('/posts', [
    'uses' => 'PostsController@index',
    'as' => 'posts'
  ]);
  Route::get('/tags', [
    'uses' => 'TagsController@index',
    'as' => 'tags'
  ]);
  Route::get('/tags/edit/{id}', [
    'uses' => 'TagsController@edit',
    'as' => 'tags.edit'
  ]);
  Route::get('/tags/create', [
    'uses' => 'TagsController@create',
    'as' => 'tags.create'
  ]);
  Route::post('/tags/store', [
    'uses' => 'TagsController@store',
    'as' => 'tags.store'
  ]);
  Route::post('/tags/update/{id}', [
    'uses' => 'TagsController@update',
    'as' => 'tags.update'
  ]);
  Route::get('/tags/delete/{id}', [
    'uses' => 'TagsController@destroy',
    'as' => 'tags.delete'
  ]);
  Route::get('/users', [
    'uses' => 'UsersController@index',
    'as' => 'users'
  ]);

  Route::get('/users/admin/{id}', [
    'uses' => 'UsersController@admin',
    'as' => 'users.admin'
  ]);
  Route::get('/users/not-admin/{id}', [
    'uses' => 'UsersController@not_admin',
    'as' => 'users.not.admin'
  ]);
  Route::get('/users/create', [
    'uses' => 'UsersController@create',
    'as' => 'users.create'
  ]);
  Route::get('/users/delete/{id}', [
    'uses' => 'UsersController@destroy',
    'as' => 'users.delete'
  ]);
  Route::get('/users/profile', [
    'uses' => 'ProfileController@index',
    'as' => 'users.profile'
  ]);
  Route::post('/users/profile/update', [
    'uses' => 'ProfileController@update',
    'as' => 'users.profile.update'
  ]);
  Route::post('/users/store', [
    'uses' => 'UsersController@store',
    'as' => 'users.store'
  ]);
  Route::get('/settings', [
    'uses' => 'SettingsController@index',
    'as' => 'settings'
  ]);
  Route::post('/settings/update', [
    'uses' => 'SettingsController@update',
    'as' => 'settings.update'
  ]);
});
