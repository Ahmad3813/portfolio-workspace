<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/contact', [ContactController::class,'index'])->name('contact.index');

Route::get('/addcontact', [ContactController::class,'create'])->name('contact.addcontact');

Route::get('/viewcontact/{contact}', [ContactController::class, 'show'])->name('contact.view');

Route::get('/editcontact/{contact}', [ContactController::class, 'edit'])->name('contact.edit');

Route::post('/storecontact', [ContactController::class,'store'])->name('storecontact');

Route::put('/updatecontact/{contact}', [ContactController::class,'update'])->name('updatecontact');

Route::delete('deletecontact/{contact}', [ContactController::class,'destroy'])->name('deletecontact');