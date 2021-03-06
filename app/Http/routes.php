<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

use Illuminate\Http\Request;



Route::group(['middleware' => ['web']], function () {
    //
	Route::get('/', function () {
	    return view('welcome');
	});

	Route::post('/', function (Request $request) {

	    $validator = Validator::make($request->all(), [
	        'full_name' => 'required|max:255',
	        'email' => 'required'
	    ]);

	    if ($validator->fails()) {
	        return redirect('/')
	            ->withInput()
	            ->withErrors($validator);
	    }


	    // email new task
	    echo $request->full_name;
	    exit();

	    return redirect('/');
	});
});
