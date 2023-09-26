<?php

use App\Http\Controllers\articleController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Models\article;
use App\Models\dashboard;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $dashboard = Dashboard::all();
    return view('index', ['dashboard' => $dashboard, 'title' => 'Dashboard']);
});

Route::get('/blog', function () {
    $articles = Article::paginate(10); // Mengambil 10 item per halaman
    return view('blog', ['articles' => $articles, 'title' => 'Blog']);
});

Route::get('/blog/detail/{slug}', function ($slug) {
    $article = article::where('slug', $slug)->first();
    $articles = article::all();
    return view('detail-article', [
        'article' => $article,
        'articles' => $articles,
    ]);
});

Route::get('/detail', function () {
    return view('detail-article');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });
    Route::resource('article', articleController::class);
    Route::resource('dashboard', DashboardController::class);
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/test', function () {
    return view('admin.test');
});
