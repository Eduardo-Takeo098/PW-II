<?php

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

Route::get('/contato','ContatoController@index');
Route::post('/contato','ContatoController@store');
Route::get('/contato/excluir/{idContato}','ContatoController@destroy');

Route::get('/laboratorio','laboratorioController@index');
Route::post('/laboratorio','laboratorioController@store');
Route::get('/laboratorio/excluir/{idLab}','laboratorioController@destroy');

Route::get('/reclamacao','reclamacaoController@index');
Route::post('/reclamacao','reclamacaoController@store');
Route::get('/reclamacao/excluir/{idRec}','reclamacaoController@destroy');