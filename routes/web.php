<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', function () {
    return view('welcome'); // Pastikan file ini ada di `resources/views/welcome.blade.php`
})->name('home');

Route::get('/arena', function () {
    return view('arena');
})->name('arena');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/home', function () {
    return view('home'); // Pastikan ada file home.blade.php
})->name('home');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->name('password.reset');

// Menampilkan Form Reset Password
Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->name('password.reset');

// Menangani Permintaan Reset Password
Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password),
            ])->save();
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->name('password.update');

// Menampilkan form OTP
Route::get('/verify-otp', function () {
    return view('auth.verify-otp');
})->name('otp.form');

Route::post('/verify-otp', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'otp_code' => 'required|digits:6',
    ]);

    $user = \App\Models\User::where('email', $request->email)
                ->where('otp_code', $request->otp_code)
                ->where('otp_expires_at', '>', now())
                ->first();

    if (!$user) {
        return back()->withErrors(['otp_code' => 'Invalid or expired OTP.']);
    }

    // Reset OTP setelah digunakan
    $user->otp_code = null;
    $user->otp_expires_at = null;
    $user->save();

    Auth::login($user);
    return redirect('/dashboard'); // Redirect setelah sukses login
});
// Menampilkan form lupa password
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

// Menangani permintaan reset password
Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink($request->only('email'));

    return $status === Password::RESET_LINK_SENT
        ? back()->with('status', __($status))
        : back()->withErrors(['email' => __($status)]);
})->name('password.email');

// Menampilkan halaman reset password
Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->name('password.reset');

// Menangani reset password
Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => bcrypt($password),
            ])->save();
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->name('password.update');

// Menampilkan halaman login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Proses login (Tambahkan route ini jika belum ada!)
Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard'); // Redirect setelah login sukses
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
})->name('login.post'); // Nama route ini bisa dipakai di form login

Route::get('/dashboard', function () {
    return view('dashboard'); // Pastikan ada file `dashboard.blade.php`
})->middleware('auth')->name('dashboard');

// Route Logout
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

// Menampilkan halaman register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Proses registrasi user baru

Route::post('/register', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|confirmed', // Konfirmasi password
    ], [
        'password.confirmed' => 'Password confirmation does not match.',
        'password.min' => 'Password must be at least 8 characters.',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('login')->with('success', 'Registration successful! Please login.');
})->name('register.post');



Route::post('/register', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|confirmed',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('login')->with('success', 'Registration successful! Please login.');
})->name('register.post');

Route::post('/register', function (Request $request) {
   

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|confirmed',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('login')->with('success', 'Registration successful! Please login.');
})->name('register.post');

Route::post('/register', function (Request $request) {
    try {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        // Simpan user ke database
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    } catch (\Exception $e) {
        return back()->withErrors(['error' => $e->getMessage()]);
    }
})->name('register.post');