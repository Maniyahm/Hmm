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

    Artisan::call('migrate', ['--force' => true]);
    $migrate = Artisan::output();

    $seed = 'skipped';
    if (Portfolio::query()->count() === 0) {
        Artisan::call('db:seed', [
            '--class' => 'Database\\Seeders\\PortfolioSeeder',
            '--force' => true,
        ]);
        $seed = Artisan::output();
    }

    return response()->json([
        'ok' => true,
        'migrate' => trim($migrate),
        'seed' => is_string($seed) ? trim($seed) : $seed,
        'projects' => Portfolio::query()->count(),
    ]);
});
