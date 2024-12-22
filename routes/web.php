<?php

use App\Livewire\HomeComponent;
use App\Livewire\LoginComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\MemberComponent;
use App\Livewire\UserComponent;

Route::get('/', HomeComponent::class)->middleware('auth')->name('home');
Route::get('/user', UserComponent::class)->name('user')->middleware('auth');
Route::get('/member', MemberComponent::class)->name('member')->middleware('auth');


route::get('/login', LoginComponent::class)->name('login');
route::get('/logout',[LoginComponent::class,'keluar'])->name('logout');