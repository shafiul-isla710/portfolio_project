<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;



//page route
Route::get('/',[HomeController::class, 'HomePage']);
Route::get('/about-page',[HomeController::class, 'AboutPage']);
Route::get('/resume-page',[ResumeController::class,'ResumePage']);
Route::get('/project-page',[ProjectController::class,'ProjectPage']);
Route::get('/contact-page',[ContactController::class,'ContactPage']);


//api route
Route::get('/heroDate',[HomeController::class, 'heroData'])->name('heroData');
Route::get('/aboutDate',[HomeController::class, 'aboutData'])->name('aboutData');
Route::get('/socialData',[HomeController::class, 'socialData'])->name('socialData');

Route::get('/projectData',[ProjectController::class, 'projectData'])->name('projectData');

Route::get('/resumeLink',[ResumeController::class,'resumeLink'])->name('resumeLink');
Route::get('/experienceData',[ResumeController::class,'experienceData'])->name('experienceData');
Route::get('/educationData',[ResumeController::class,'educationData'])->name('educationData');
Route::get('/skillData',[ResumeController::class,'skillData'])->name('skillData');
Route::get('/languageData',[ResumeController::class,'languageData'])->name('languageData');

//contact route
Route::post('/contact',[ContactController::class,'contactRegistration']);

