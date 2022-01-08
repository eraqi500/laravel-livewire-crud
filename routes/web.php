<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowPosts;
use App\Http\Livewire\SecondComponent;
use App\Http\Livewire\ParamComponent ;
use App\Http\Livewire\Registration;
use App\Http\Livewire\Comments;
use App\Http\Livewire\Actions;
use App\Http\Livewire\SimpleCalc;
use App\Http\Livewire\LifeCycle;
use App\Http\Livewire\Forms;
use App\Http\Livewire\CreateForms;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show-post',ShowPosts::class);
Route::get('/second-comp',SecondComponent::class);
Route::get('/param-comp/{param}',ParamComponent::class);
Route::get('/registration',Registration::class);
Route::get('/comments' , Comments::class);
Route::get('/actions' , Actions::class);
Route::get('/calc' , SimpleCalc::class);
Route::get('lifecycle' , LifeCycle::class);
Route::get('/forms', Forms::class);
Route::get('/create' , CreateForms::class);
