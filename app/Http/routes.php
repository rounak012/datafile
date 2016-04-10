<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('login', ['middleware'=>'login',function()
{
	return view('login');
}]);



Route::post('loginpost',
[
'as'=>'loginpost',
'uses'=>'usercontroller@login',
]
);

Route::post('adminpage',
[
'as'=>'adminpage',
'uses'=>function(){
	return view('adminpage');

}]
);

Route::post('employeepage',
[
'as'=>'employeepage',
'uses'=>function(){
	return view('employeepage');

}]
);

Route::post('adminpost',
[
'as'=>'adminpost',
'uses'=>'usercontroller@adminpost',
]
);



Route::post('employeepost',
[
'as'=>'employeepost',
'uses'=>'usercontroller@employeepost',
]
);
Route::post('logout',
[
'as'=>'logout',
'uses'=>'usercontroller@logout',
	

]
);


Route::get('showall',
[
'as'=>'showall',
'uses'=>'usercontroller@showall',
]
);


Route::post('updatecall',
[
'as'=>'updatecall',
'uses'=>'usercontroller@updatecall',
]
);
Route::post('updateform1',
[
'as'=>'updateform1',
'uses'=>'usercontroller@updateparticular',

]
);



Route::get('show','hammad@show');






Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
