<?php

Route::get('alunos', 'AlunoController@index')->name('alunos');
Route::get('aluno-autenticar/{email?}/{senha?}', 'LoginController@autenticar')->name('autenticar');

