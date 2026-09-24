<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Skill;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::get('/addcontact', [ContactController::class, 'create'])->name('contact.addcontact');

Route::get('/viewcontact/{contact}', [ContactController::class, 'show'])->name('contact.view');

Route::get('/editcontact/{contact}', [ContactController::class, 'edit'])->name('contact.edit');

Route::post('/storecontact', [ContactController::class, 'store'])->name('storecontact');

Route::put('/updatecontact/{contact}', [ContactController::class, 'update'])->name('updatecontact');

Route::delete('deletecontact/{contact}', [ContactController::class, 'destroy'])->name('deletecontact');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

Route::get('/add', [BlogController::class, 'create'])->name('blog.add');

Route::post('/storeblog', [BlogController::class, 'store'])->name('storeblog');

Route::get('/view/{blog}', [BlogController::class, 'show'])->name('view');

Route::get('/editblog/{blog}', [BlogController::class, 'edit'])->name('editblog');

Route::put('/updateblog/{blog}', [BlogController::class, 'update'])->name('updateblog');

Route::delete('deleteblog/{blog}', [BlogController::class, 'destroy'])->name('deleteblog');

Route::get('skill.index', [SkillController::class, 'index'])->name('skill.index');

Route::get('/skill.add', [SkillController::class, 'create'])->name('skill.add');

Route::post('/storeskill', [SkillController::class, 'store'])->name('storeskill');

Route::get('/viewskill/{skill}', [SkillController::class,'show'])->name('viewskill');

Route::get('/editskill/{skill}', [SkillController::class, 'edit'])->name('editskill');

Route::put('/updateskill/{skill}', [SkillController::class, 'update'])->name('updateskill');

Route::delete('deleteskill/{skill}', [SkillController::class,'destroy' ])->name('deleteskill');

Route::get('/login', [LoginController::class, 'show'])->name('login');

Route::post('login', [LoginController::class,'login'])->name('login.submit');

Route::post('logout', [LoginController::class,'logout'])->name('logout');

