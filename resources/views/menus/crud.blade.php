use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;

// Halaman Login (gunakan auth Laravel)
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.post');

// Halaman Dashboard Admin (berfungsi setelah login)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});
