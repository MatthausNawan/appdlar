<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (env('APP_ENV' === 'production')) {

        return redirect()->to('https://domesticasdlar.com');
    } else {
        return redirect()->to('/admin/cadastro');
    }
});

Route::get('/admin/cadastro', function () {
    return view('auth.register');
});

Route::post('/admin/cadastro', 'Auth\RegisterController@register')->name('cadastro');
Route::get('refreshcaptcha', 'Auth\RegisterController@refreshCaptcha');

//public routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pagamento', "AdminCmsUsersController@pagseguro");
Route::get('/termos-de-uso', function () {
    return view('termos_de_uso');
});


//solicitacoes routes
Route::get('admin/selecionar/{id}', 'AdminSolicitacoesController@selecionar');
Route::get('admin/remover/{id}', 'AdminSolicitacoesController@remover');
Route::get('admin/finalizar', 'AdminSolicitacoesController@finalizar');
//
