<?php
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {
    // app/Http/routes.php
    Route::get('songs/create', [
        'uses' => 'SongsController@create',
        'as' => 'song.create'
    ]);

    Route::post('songs', [
        'uses' => 'SongsController@store',
        'as' => 'song.store'
    ]);
    
    Route::get('former' , function() {
        return view('former_view');
    });
    
    
});
