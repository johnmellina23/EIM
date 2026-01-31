<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/login', 'pages::auth.login');
Route::livewire('/user/dashboard', 'pages::user.dashboard');
Route::livewire('/user/equipments/index', 'pages::user.equipments.index');
