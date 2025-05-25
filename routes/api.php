<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//api route
Route::get('/heroDate',[HomeController::class, 'heroData'])->name('heroData');
Route::get('/aboutDate',[HomeController::class, 'aboutData'])->name('aboutData');
Route::get('/socialData',[HomeController::class, 'socialData'])->name('socialData');

Route::get('/projectData',[ProjectController::class, 'projectData'])->name('projectData');
Route::get('/contactRegistration',[ContactController::class,'contactRegistration'])->name('contactRegistration');

Route::get('/resumeLink',[ResumeController::class,'resumeLink'])->name('resumeLink');
Route::get('/experienceData',[ResumeController::class,'experienceData'])->name('experienceData');
Route::get('/educationData',[ResumeController::class,'educationData'])->name('educationData');
Route::get('/skillData',[ResumeController::class,'skillData'])->name('skillData');
Route::get('/languageData',[ResumeController::class,'languageData'])->name('languageData');