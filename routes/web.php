<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicProfileController;
use App\Http\Controllers\SearchController;

use App\Http\Controllers\CandidateProfileController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\FriendshipController;
use App\Http\Controllers\ApplicationController;

use App\Http\Controllers\JobOfferController;
use App\Http\Controllers\EmployerApplicationController;

use App\Http\Controllers\AdminDashboardController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/users/{user}', [PublicProfileController::class, 'show'])
    ->name('users.show');

Route::get('/search', [SearchController::class, 'index'])
    ->name('search');



Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});



Route::middleware(['auth','role:recreteur'])
    ->get('/recreteur/dashboard', function () {
        return view('Dashboard_recreteur');
    })
    ->name('recreteur.dashboard');


Route::middleware(['auth','role:chercheur'])
    ->get('/chercheur/dashboard', function () {
        return view('Dashboard_chercheur');
    })
    ->name('chercheur.dashboard');



Route::middleware(['auth', 'role:chercheur'])
    ->prefix('chercheur')
    ->name('chercheur.')
    ->group(function () {

        Route::resource('profile', CandidateProfileController::class);

        Route::resource('educations', EducationController::class);
        Route::resource('experiences', ExperienceController::class);
        Route::resource('skills', SkillController::class);


        Route::get('job_offers', [App\Http\Controllers\JobOfferController::class, 'index'])
            ->name('job_offers.index');

        Route::get('/friends', [FriendshipController::class, 'index'])
            ->name('friends.index');


        Route::post('/job_offers/{jobOffer}/apply',
            [ApplicationController::class, 'store']
        )->name('apply');

        Route::get('/applications',
            [ApplicationController::class, 'index']
        )->name('applications.index');

        Route::post('/friends/{user}',
            [FriendshipController::class, 'send']
        )->name('friends.send');

        Route::post('/friends/{user}/accept',
            [FriendshipController::class, 'accept']
        )->name('friends.accept');

        Route::post('/friends/{user}/reject',
            [FriendshipController::class, 'reject']
        )->name('friends.reject');
});



Route::middleware(['auth', 'role:recreteur'])
    ->prefix('recreteur')
    ->name('recreteur.')
    ->group(function () {

        Route::resource('job_offers', JobOfferController::class);

        Route::get('applications',
            [EmployerApplicationController::class, 'index']
        )->name('applications.index');

        Route::post('job-offers/{jobOffer}/close',
            [JobOfferController::class, 'close']
        )->name('job-offers.close');
});



Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard',
            [AdminDashboardController::class, 'index']
        )->name('dashboard');
});


require __DIR__.'/auth.php';
