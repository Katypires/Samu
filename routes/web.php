<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

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
Route::get('/imprimir-receituario/{id}', function ($id) {
    $pdf = Pdf::loadView('admin.sesau.juridico.sindicancia.pdf.invoice');
    return $pdf->stream();
})->middleware('auth')->name('imprimir-receituario');

Route::get('/imprimir-pdf', function () {
    $pdf = Pdf::loadView('admin.sesau.juridico.sindicancia.pdf.invoice');
    return $pdf->stream();
})->name('imprimir-pdf');


Route::get('/', function () {
    return view('index');
});

Route::get('/semraiva', function () {
    return view('admin.sesau.semraiva.semraiva.index');
});


Route::get('/posts', function () {
    return view('posts.index');
});

Route::get('/ficha', function () {
    return view('admin.sesau.semraiva.ficha.index');
});

Route::get('/samu', function () {
    return view('admin.sesau.samu.samu.index');
});

Route::get('/voluntario', function () {
    return view('admin.sesau.voluntario.index');
});

Route::get('/juridico', function () {
    return view('admin.sesau.juridico.juridicos.index');
});
