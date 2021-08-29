<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('welcome', function () {
    return "Xin chào";
});

/* 

Route::get('user/{id}', function ($id) {
    return "User id: $id";
});

*/ 


/*
Route::get('user/{id?}', function ($id = null) {
    if (!$id) {
       return "Bạn hãy nhập vào  id";
    }

    return "User id: $id";
});

*/

Route::get('user/{id}/comment/{commentId}', function ($id, $commentId) {
    return "User id: $id and comment id: $commentId";
});

//thêm tham số mặc định cho biến đầu vào url sử dụng dấu ? 

Route::get('customer/{id?}',function($id = null){
     if(!$id){
        return "Khach hang hãy nhập Id để tra cứu";
     }
      return "Khach hang co id la: ".$id;
});

//định dạng kiểu dữ liệu hay pattern của parameter 


/* cach 1 */ 
/*
Route::get('user/{id}/comment/{commentId}', function ($id, $commentId) {
    return "User id: $id and comment id: $commentId";
})->where('id', '[0-9]+')->where('commentId', '[0-9]+');

*/

/* cach 2 */ 

/* 
Route::get('user/{id}/comment/{commentId}', function ($id, $commentId) {
    return "User id: $id and comment id: $commentId";
})->where(['id' => '[0-9]+', 'commentId' => '[0-9]+'])->name('user-comment');

*/ 

/* route có request trả về */ 

/*
Route::get('user/{id}/comment/{commentId}', function (Request $request, $id, $commentId) {
    return "User id: $id and comment id: $commentId";
})->where(['id' => '[0-9]+', 'commentId' => '[0-9]+'])->name('user-request');

*/


// NHóm route vói refix-> user. + name of route 
/*
Route::prefix('user')->as('user.')->group(function () {
    Route::get('profile', function () {
        //
    })->name('profile');   // user.profile 

    Route::get('post/{id}', function () {
        //
    })->name('show.post'); // user.show.post 
});

*/


// route('home')
// http://example.com/welcome

// route('user.profile')
// http://example.com/user/profile

// route('user.show.post', ['id' => 10]);
// http://example.com/user/post/10

// route('user.profile', ['id' => 10]);

use App\Models\User;

//vói {user} là khóa chính của bảng users tương ứng với đối tượng model User 
Route::get('/users/{user}', function (User $user) {
    return $user->email;
});

Route::get('/home', function () {

    $posts = [
        ['name' => 'Post 1'],
        ['name' => 'Post 2'],
        ['name' => 'Post 3'],
        ['name' => 'Post 4'],
    ];
    $tasks = [
        ['name' => 'Task 1'],
        ['name' => 'Task 2'],
        ['name' => 'Task 3'],
        ['name' => 'Task 4'],
    ];


    return view('home', ['title' => 'hoc.tv', 'tasks' => $tasks, 'body' => 'Học học nữa, học mãi','name' => "Lò Thị Vi Sóng",'alertMessage' => 'Thông báo đây','posts' => $posts]);
})->name('home');





// use Illuminate\Support\Facades\View;  // you must add this library in order to use first function below. 

//return View::first(['custom.admin', 'admin'], $data);

//

/* 
use Illuminate\Support\Facades\View;  //you must add this library in order to use exist function below. 

if (View::exists('home')) {
    // tồn tại
 }
 else 
 {
     //doing something 
 }

 */ 

Route::get('/homepage', function () {
    return view('home.index', ['title' => 'hoc.tv', 'body' => 'Học nữa học mãi']);
})->name('homepage');

Route::get('/homepage', function () {
    return view('home.index');
})->name('homepage');

Route::get('/morning', function (Request $request) {
    return "Path 01: " . $request->path()."<br>"."Path 02: " . $request->url()."<br> Path 03:".$request->fullUrl()."<br> Path: " . $request->fullUrlWithQuery(['name' => 'PHAMNHANTUIEN']).'<br>User Agent: ' . $request->header('user-agent').'<br>Ip của bạn: '. $ipAddress = $request->ip().'<br>Header: ' . $request->header('hoctv', 'Okey bạn ey');;
});

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProvisionServer;

Route::get('/contact', [ContactController::class, 'show']);
Route::get('/server', ProvisionServer::class);
Route::post('/server', ProvisionServer::class);

//study about response 

Route::get('/abc', function () {
    //return 'Xin chào các bạn';
    return response('Xin chào các bạn', 200)->header('Content-Type', 'text/plain');
});

Route::get('/abc123', function () {
    //return [1, 2, 3];
    return response()->json([1, 2, 3, 4, 5]);
})->name('abc123');

Route::get('url', function() {
    return url('abc123');
});


use Illuminate\Support\Facades\URL;

Route::get('/posts/{post}', function($post) {
   // return url("posts/{$post}");

    // Lấy URL hiện tại không bao gồm chuỗi query
     echo url()->current();
     echo "<br>";
     // Lấy URL hiện tại bao gồm chuỗi query
    // echo url()->full();
     echo "<br>";
    // Lấy URL đầy đủ của request trước
     echo url()->previous();

     echo "<br>";
     echo URL::current();

});

Route::get('posts123/{post}', function() {
    //
})->name('post123');


Route::get('/home123', function() {
    echo route('abc123');
    echo"<br>";
    echo route('home123');
    echo"<br>";
    echo route('post123', ['post' => 1]);
})->name('home123');


Route::get('/create', function() {
    return URL::signedRoute('change_password', ['user' => 1]);
});

Route::get('change_password/{user}', function($user) {
    return 'Change password user ' . $user;
})->name('change_password')->middleware('signed');

use Illuminate\Support\Facades\DB;
Route::get('laydulieu', function () {
    $data = DB::table('users')->get();
    print_r($data);
});

use App\Http\Controllers\UserController;

Route::get('/xemuser',[Usercontroller::class, 'index']);

Route::get('/getlistuser',[Usercontroller::class, 'getlist']);