<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function(){

    /** Formulário de Login */
    Route::get('/', 'AuthController@showLoginForm')->name('login');
    Route::post('login', 'AuthController@login')->name('login.do');

    /** Rotas Protegidas */
    Route::group(['middleware' => ['auth']], function () {

        /** Dashboard Home */
        Route::get('dashboard', 'AuthController@dashboard')->name('dashboard');

        /** Organograma */
        Route::get('organisationchart', 'OrganisationChartController@organisationchart')->name('organisationchart');
        Route::get('orchart', 'OrganisationChartController@orgchart')->name('orgchart');
        Route::get('d3orgchart', 'OrganisationChartController@d3orgchart')->name('d3orgchart');

        /** Usuários */
        Route::resource('users', 'UserController');
    });

    /** Logout */
    Route::get('logout', 'AuthController@logout')->name('logout');
});
