<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BlogSingleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TechnicianController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('frontend.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/* FrontEnd Pages Routes */
Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog_single', [BlogSingleController::class, 'index'])->name('blog_single');
Route::get('/team', [TeamController::class, 'index'])->name('team');

Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

/* Profile Routes */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* Authentication Routes */
require __DIR__.'/auth.php';

/* Admin Routes */
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/technicians', [AdminController::class, 'technicians'])->name('admin.technicians');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');

    Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::resource('services', AdminServiceController::class);

        // Route::get('/admin/services', [AdminServiceController::class, 'index'])->name('admin.services.index');
        // Route::get('/services/create', [AdminServiceController::class, 'create'])->name('services.create');
        // Route::post('/services', [AdminServiceController::class, 'store'])->name('admin.services.store');
        // Route::get('/services/{id}/edit', [AdminServiceController::class, 'edit'])->name('services.edit');
        // Route::put('/services/{id}', [AdminServiceController::class, 'update'])->name('services.update');
        // Route::delete('/services/{id}', [AdminServiceController::class, 'destroy'])->name('services.destroy');
    });
});

/* Technician Routes */
Route::middleware(['auth', 'role:technician'])->group(function () {
    Route::get('/technician/dashboard', [TechnicianController::class, 'TechnicianDashboard'])->name('technician.dashboard');
});

/* Admin Login Route */
Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
