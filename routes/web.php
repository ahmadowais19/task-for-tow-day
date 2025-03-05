<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\RemoveCoverageElementProcessUncoveredFilesAttribute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//---task1
// Route::get('/tast ', function () {
//     return "ahmad";
// });
// =================================================================================================


// Route::get('/', function (){
//     return view('hello');
    
// });


//
//---task2
// Route::get("/hello", function () {
//     return view('hello');
// });=
// =================================================================================================

//---task3
// Route::get('/age/{age?}', function ($age = null) {
//     if ($age) {
//         return "You are {$age} years old.";
//     } else {
//         return "Age not provided.";
//     }
// });

// -----task4

// use App\Http\Controllers\PostController;

// Route::get("hello", [PostController::class, 'index']);


//task5
// Route::get("/hello",function(){
//     return view("hello");
// })->name('task5');

//task 6 missing
// Route::prefix('main')->group(function () {
//     Route::get('/local', function () {
//         return "Main local Page";
//     });

//     Route::get('/users', function () {
//         return "Main Users Page";
//     });
// });

//task 7 missing

// Route::get('/user/{id}', function ($id) {
//     return "User ID: $id";
// });

//task 8
//  Route::fallback(function () {
//     return 'Page not found.';
// });



//task 9

//  Route::Resource('/task', task9Controller::class);

//task 10

// Route::get('/user/{category}/{id}', function ($category, $id) {
//     return "category: $category, ID: $id";
// });


//task 11

// Route::get('/blog/{page?}', function ($page = 1) {
//     return "view page $page";
// });

//task 12

// Route::redirect('/home', '/welcome');

// task 13
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/ ', function () {
    return view('layout/main');
});