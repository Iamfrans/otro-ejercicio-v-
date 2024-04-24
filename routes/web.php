<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagina1;
use App\Http\Controllers\pagina2;
use App\Http\Controllers\pagina3;
use App\Http\Controllers\pagina4;
use App\Http\Controllers\pagina5;


Route::get('/', function() {
    return view('welcome');
});
///
Route::get("/pagina1",[pagina1::class, 'pagina1']);
///
route::get("/pagina2", [pagina2::class, 'pagina2']);
///
route::get("/pagina3", [pagina3::class, 'pagina3']);
///
route::get("/pagina4", [pagina4::class, 'pagina4']);
///
route::get("/pagina5", [pagina5::class, 'pagina5']);