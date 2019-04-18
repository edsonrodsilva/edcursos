<?php

Route::get('alunos', 'AlunoController@index')->name('alunos');
Route::get('alunos/{email?}/{senha?}', 'LoginController@autenticar')->name('autenticar');

