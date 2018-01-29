<?php

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
    return view('home');
})->name('home');


Route::get('/not_found', function() {
  return view('not_found');
});

Route::get('/About', function () {
    return redirect("/#AboutUs");
});

Route::get('/data_sources', function () {
    return redirect('/#DataSources');
});


Route::get('/documentation', function () {
    return view('home');
})->name('documentation');

Route::get('/atlas', function () {
    return view('home');
})->name('atlas');


Route::get('/wiki/{id}', function ($id) { 
  return view('wiki.show', [ 'curie' => $id ]);
});

Route::get('/literature', function () { 
  return view('literature.show', [ 'terms' => Request::input('terms', []),
                                   'page' => Request::input('page', 1 )
                                 ]);
});

Route::get('/data_space/{curie}', function ($curie) { 
  return view('data_space.show', [ 'curie' => $curie,
                                   'page' => Request::input('page', 1 ),
                                    'terms' => Request::input('terms', [])   
                                ]);
});

Route::get('/search', function() { 
  return view('search.show', [ 'q' => Request::input('q', '0'), 'page' => Request::input('page', 1),
                                'sort' => Request::input('sort', false), 'redirect' => Request::input('redirect', true) ]);
});

Route::get('/categories', function () {
    return view('categories.show');
})->name('categories');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
