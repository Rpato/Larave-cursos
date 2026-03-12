<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

$cursos = [];

Route::get('/', function () {
    return view('cursos', ['cursos' => []]);
});

Route::post('/agregar-curso', function (Request $request) {

    $curso = $request->input('curso');

    return view('cursos', ['cursos' => [$curso]]);

});