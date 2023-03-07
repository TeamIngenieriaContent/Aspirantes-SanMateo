<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AcademicProgramController;

Route::get('',[HomeController::class,'index'])->name('admin.home');
Route::resource('programs', AcademicProgramController::class)->names('admin.programs');

