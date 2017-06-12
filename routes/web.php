<?php
/**
 * Route định tuyến đường đi
 */
/*=====  dường dẫn chỉ đến view thư mục admin/auth.login.blade.php  ======*/

Route::get('/', function () {
	return view('admin.auth.login');
});
/*----------  đường dẫn chỉ đi login  ----------*/

Route::get('login', function($msg = null){
	if (Auth::check()) {
		return redirect(route('social'));
	}
	return view('admin.auth.login');
	
})->name('login');

/*=====  Phương thức gửi dữ liệu từ form login truyền vào LoginController với hàm postlogin xử lý  ======*/
Route::post('login', 'Auth\LoginController@postLogin')->name('login.post');

/*=====  Phương thức gọi ra view đăng ký  ======*/
Route::get('register', function($msg = null){
	return view('admin.auth.register');
})->name('register');

/*=====  Phương thức gửi dữ liệu từ form login truyền vào RegisterController với hàm postRegister xử lý   ======*/
Route::post('register', 'Auth\RegisterController@postRegister')->name('register.post');

/*=====  route logout  ======*/
Route::get('logout', function(){
	\Auth::logout();
	return redirect(route('login'));
})->name('logout');

/*----------  Route được gọi khi sai đường dẫn  ----------*/
Route::get('not-found', function(){
	return view('not-found');
})->name('error.404');

Route::post('/language-chooser', 'LanguageController@index');
Route::post('/language', array(
	'before' => 'csrf',
	'as' =>'language-chooser',
	'uses' => 'LanguageController@index'
	)
);