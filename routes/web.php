<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommonController;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");


Route::get('/contact',[HomeController::class,'index'])->name('contact');
Route::post('/contact/store',[HomeController::class,'store'])->name('contact.store');
Route::get('/team',[HomeController::class,'team'])->name('team');
Route::get('/about-us',[CommonController::class,'about'])->name('about');
Route::get('/portfolio',[CommonController::class,'portfolio'])->name('portfolio');
Route::get('/services',[CommonController::class,'service'])->name('service');
Route::get('/Careers',[CommonController::class,'Careers'])->name('Careers');

Route::get('/internal-setup', function () {
    if (request('key') !== env('SETUP_KEY')) {
        abort(404);
    }

    $step = request('step', 'all');

    if ($step === 'migrate' || $step === 'all') {
        Artisan::call('migrate', ['--force' => true]);
        $migrate = trim(Artisan::output());
        return response()->json(['ok' => true, 'step' => 'migrate', 'output' => $migrate]);
    }

    if ($step === 'seed') {
        $seed = 'skipped';
        if (Portfolio::query()->count() === 0) {
            Artisan::call('db:seed', [
                '--class' => 'Database\\Seeders\\PortfolioSeeder',
                '--force' => true,
            ]);
            $seed = trim(Artisan::output());
        }
        return response()->json(['ok' => true, 'step' => 'seed', 'output' => $seed, 'projects' => Portfolio::query()->count()]);
    }

    if ($step === 'status') {
        try {
            $count = Portfolio::query()->count();
            return response()->json(['ok' => true, 'projects' => $count, 'db' => 'connected']);
        } catch (\Exception $e) {
            return response()->json(['ok' => false, 'error' => $e->getMessage()]);
        }
    }

    if ($step === 'admin') {
        try {
            $email = 'admin@hmminfotech.com';
            $password = 'HmmAdmin@2026';
            $user = \App\Models\User::where('email', $email)->first();
            if (!$user) {
                \App\Models\User::create([
                    'name'     => 'Admin',
                    'email'    => $email,
                    'password' => bcrypt($password),
                ]);
                return response()->json(['ok' => true, 'msg' => 'Admin created', 'email' => $email, 'password' => $password]);
            }
            return response()->json(['ok' => true, 'msg' => 'Admin already exists', 'email' => $email]);
        } catch (\Exception $e) {
            return response()->json(['ok' => false, 'error' => $e->getMessage()]);
        }
    }

    return response()->json(['ok' => false, 'msg' => 'Use ?step=migrate, ?step=seed, or ?step=status']);
});
