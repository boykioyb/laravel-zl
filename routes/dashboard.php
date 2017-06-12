<?php 
/*=====  check  middleware xem có tồn tại auth không. nếu có thì chạy các route bên trong ======*/
Route::group(['middleware' => 'auth'], function(){
	// route trả về view index
	Route::get('/', function(){
		return view('social.index');
	})->name('social');
	// gom nhóm đường dẫn với ban đầu là social
		Route::get('/profile', function() {
			return view('social.profile');
	})->name('profile');
	Route::group(['prefix' => 'user'], function () {
		// vd như route này là social/proflie
		Route::get('/', 'User\UserController@index')->name('list.user');
		Route::get('/remove/{id}', 'User\UserController@remove')->name('user.remove');
		Route::get('/update/{id?}', 'User\UserController@update')->name('user.update');
		Route::post('/saveuser'	 , 'User\UserController@saveuser')->name('user.save');

	});
});
?>