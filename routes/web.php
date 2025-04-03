<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;

$jobs = Job::with('employer')->latest()->simplePaginate(3);
Route::view('/','home', [
    'jobs' => $jobs ]);

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create')->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store')->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit')->middleware('auth')->can('edit', 'job');
Route::put('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');


Route::view('/contact', 'contact');


Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);


//Ruta para agregar la foto de perfil
Route::get('/perfil', function () {return view('perfil');})->middleware('auth');


//Route::post('/upload/profile', [FileController::class, 'uploadProfilePicture'])->name('upload.profile');
Route::post('/upload/resume', [FileController::class, 'uploadResume'])->name('upload.resume');

//servir imagen de profile
Route::get('/photo/profile/navar', function() {
    
    $user = Auth::user();
    $path = $user->profile_picture;
    //dd($path);
    if(!empty($path)){
        //dd('hay archivo');
        return response()->file(Storage_path('app/private/' . $path));
    }else{
        return response()->file(Storage_path('app/private/photo_profile/default_profile.png'));
        //dd('no hay archivo');
    }
    //dd('ruta', $path);

    
})->name('photo.profile');
