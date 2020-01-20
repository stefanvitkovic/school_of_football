<?php

Auth::routes();

Route::get('/','PlayerController@welcome')->name('home');

Route::resource('/players','PlayerController');

Route::resource('/coaches','CoachController');

Route::resource('/categories','CategoryController');

Route::resource('/sponsorships','SponsorsController');

Route::resource('/articles','ArticleController');

Route::resource('/skills','SkillController');

Route::resource('/positions','PositionController');

Route::get('players_panel','CoachController@admin')->middleware('auth');

Route::get('coaches_panel','CoachController@adminc')->middleware('auth');

Route::get('articles_panel','CoachController@admina')->middleware('auth');	


Route::get('test',function(){
    return 'proba';
});
