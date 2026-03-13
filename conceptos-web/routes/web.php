<?php

use Illuminate\Support\Facades\Route;

$conceptos = [
    [
        "id" => 1,
        "titulo" => "Calidad de Software",
        "descripcion" => "La calidad de software se refiere al grado en que un sistema cumple con los requisitos funcionales y no funcionales."
    ],
    [
        "id" => 2,
        "titulo" => "Framework",
        "descripcion" => "Un framework es una estructura de desarrollo que proporciona herramientas y librerías para crear aplicaciones."
    ],
    [
        "id" => 3,
        "titulo" => "Laravel",
        "descripcion" => "Laravel es un framework de PHP que facilita la creación de aplicaciones web mediante una estructura organizada."
    ],
    [
        "id" => 4,
        "titulo" => "GitHub",
        "descripcion" => "GitHub es una plataforma que permite almacenar y colaborar en proyectos de software usando Git."
    ]
];

Route::get('/', function () use ($conceptos) {
    return view('inicio', ['conceptos'=>$conceptos]);
});

Route::get('/concepto/{id}', function ($id) use ($conceptos) {

    foreach($conceptos as $concepto){
        if($concepto['id']==$id){
            return view('concepto', ['concepto'=>$concepto]);
        }
    }

    abort(404);

});