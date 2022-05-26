<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

// Route::get('/', [StudentController::class, 'index']);
Route::get('/', function(){
    return redirect('home');
});
Route::resource('students', StudentController::class);
// Route::get('posts/{post}',function($slug){
//     return view('post', [
//         'post' => Post::find($slug)
//     ]);
    
// })->where('post','[A-z_\-0-9]+');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
