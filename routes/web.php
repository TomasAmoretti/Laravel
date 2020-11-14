<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("cursos", function(){
    return "Pagina de cursos";
});

Route::get('cursos/create', function () {
    return "En esta pagina podras crear un curso";
});

/* Route::get("cursos/{curso}", function($curso){
    return "Bienvenido al curso $curso";
}); */

Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    
    if($categoria){
        return "Bienvenido al curso: $curso, de la categoria $categoria";
    }else{
        return "Bienvenido al curso: $curso";
    }
    
});