<?php

use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


//Route::get('/', function () {
//    return view('welcome');
//});

Volt::route('/', 'users.index');

Volt::route('/counter', Counter::class);
