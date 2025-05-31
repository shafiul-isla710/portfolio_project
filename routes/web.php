<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use Inertia\Inertia;



//page route
Route::get('/',[HomeController::class, 'HomePage'])->name('homePage');
Route::get('/about',[HomeController::class, 'AboutPage'])->name('aboutPage');
Route::get('/resume',[ResumeController::class,'ResumePage'])->name('resumePage');
Route::get('/project',[ProjectController::class,'ProjectPage'])->name('projectPage');
Route::get('/contact',[ContactController::class,'ContactPage'])->name('contactPage');


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

//cookie practice
Route::post('/cookie',[HomeController::class,'contactRegistration']);