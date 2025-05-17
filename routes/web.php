<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Http\Controllers\DashboardController;

Route::get('/welcome', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('beranda');
})->name('beranda');

Route::get('/fund', function () {
    return view('fund');
})->name('fund');

Route::get('/gudang', function () {
    return view('gudang');
})->name('gudang');

Route::get('/pamm', function () {
    return view('pamm');
})->name('pamm');

Route::get('/digital', function () {
    return view('digital');
})->name('digital');

Route::get('/transparansi', function () {
    return view('transparansi');
})->name('transparansi');

Route::get('/laporan-tahunan', function () {
    return view('laporan-tahunan');
})->name('laporan-tahunan');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

Route::middleware('auth')->get('/user', function () {
    return view('user.home', [
        'user' => Auth::user()
    ]);
})->name('user.home');
