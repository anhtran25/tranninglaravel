<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    $users = [
        [
        'name' => 'Trong Anh',
        'height' => '165cm',
        'weight' =>'55kg',
        'gender' => 'Nam',
        'age' => '27',
        'class' => 'Web16201',
        'id' => '1',
        'avatar' => 'https://scontent.fhan14-1.fna.fbcdn.net/v/t1.18169-9/20621089_275426592861427_3539016159873848006_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=Ixto_utcgyIAX8sGHtp&tn=K6KRstWemgGUiiGB&_nc_ht=scontent.fhan14-1.fna&oh=00_AT96k225f2JHdFJS22uW3QNYnJG6Ja4DFB5levOWS0l3Lg&oe=624D7487',
        ],
        
    ];
    return view('welcome',['users' => $users]);
});
Route::get('/login', function () {
    // dd("login view");
    $email = 'anhttph13025';
    // return view('auth.login')->with('username', 'anhttph13025');
    return view('auth.login', [
        'email' => $email,
    ]);
});

Route::get('/users/{userID?}', function (
    Request $request,
    $userID
    ) {
    dd($userID, $request->all());
});