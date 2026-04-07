<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

//Exercício 1
Route::get('/ex1', function () {
    return view('ex1');
});
Route::post('/ex1resp', function (Request $request) {
    $num1 = floatval($request->input('num1'));
    $num2 = floatval($request->input('num2'));
    $resultado = $num1 + $num2;
    return view('ex1', compact('resultado', 'num1', 'num2'));
});

//Exercício 2
Route::get('/ex2', function () {
    return view('ex2');
});
Route::post('/ex2resp', function (Request $request) {
    $num1 = floatval($request->input('num1'));
    $num2 = floatval($request->input('num2'));
    $resultado = $num1 - $num2;
    return view('ex2', compact('resultado', 'num1', 'num2'));
});

//Exercício 3
Route::get('/ex3', function () {
    return view('ex3');
});
Route::post('/ex3resp', function (Request $request) {
    $num1 = floatval($request->input('num1'));
    $num2 = floatval($request->input('num2'));
    $resultado = $num1 * $num2;
    return view('ex3', compact('resultado', 'num1', 'num2'));
});

//Exercício 4
Route::get('/ex4', function () {
    return view('ex4');
});
Route::post('/ex4resp', function (Request $request) {
    $num1 = floatval($request->input('num1'));
    $num2 = floatval($request->input('num2'));
    $erroDivisao = false;
    $resultado = null;
    if ($num2 == 0) {
        $erroDivisao = true;
    } else {
        $resultado = $num1 / $num2;
    }
    return view('ex4', compact('resultado', 'num1', 'num2', 'erroDivisao'));
});

//Exercício 5
Route::get('/ex5', function () {
    return view('ex5');
});
Route::post('/ex5resp', function (Request $request) {
    $valor1 = floatval($request->input('valor1'));
    $valor2 = floatval($request->input('valor2'));
    $valor3 = floatval($request->input('valor3'));
    $media = ($valor1 + $valor2 + $valor3) / 3;
    return view('ex5', compact('media', 'valor1', 'valor2', 'valor3'));
});

//Exercício 6
Route::get('/ex6', function () { return view('ex6'); });
Route::post('/ex6resp', function (Request $request) {
    $celsius = floatval($request->input('celsius'));
    $temp = $celsius * 1.8 + 32;
    return view('ex6', compact('temp', 'celsius'));
});

//Exercício 7
Route::get('/ex7', function () { return view('ex7'); });
Route::post('/ex7resp', function (Request $request) {
    $fahrenheit = floatval($request->input('fahrenheit'));
    $celsius = ($fahrenheit - 32) / 1.8;
    return view('ex7', compact('celsius', 'fahrenheit'));
});

//Exercício 8
Route::get('/ex8', function () { return view('ex8'); });
Route::post('/ex8resp', function (Request $request) {
    $comp = floatval($request->input('comp'));
    $larg = floatval($request->input('larg'));
    $area = $comp * $larg;
    return view('ex8', compact('area', 'comp', 'larg'));
});

//Exercício 9
Route::get('/ex9', function () { return view('ex9'); });
Route::post('/ex9resp', function (Request $request) {
    $raio = floatval($request->input('raio'));
    $area = M_PI * $raio ** 2;
    return view('ex9', compact('area', 'raio'));
});

//Exercício 10
Route::get('/ex10', function () { return view('ex10'); });
Route::post('/ex10resp', function (Request $request) {
    $comp = floatval($request->input('comp'));
    $larg = floatval($request->input('larg'));
    $perimetro = 2 * ($comp + $larg);
    return view('ex10', compact('perimetro', 'comp', 'larg'));
});

//Exercício 11
Route::get('/ex11', function () { return view('ex11'); });
Route::post('/ex11resp', function (Request $request) {
    $raio = floatval($request->input('raio'));
    $perimetro = 2 * M_PI * $raio;
    return view('ex11', compact('perimetro', 'raio'));
});

//Exercício 12
Route::get('/ex12', function () { return view('ex12'); });
Route::post('/ex12resp', function (Request $request) {
    $base     = floatval($request->input('base'));
    $expoente = intval($request->input('expoente'));
    $resultado = $base ** $expoente;
    return view('ex12', compact('resultado', 'base', 'expoente'));
});

//Exercício 13
Route::get('/ex13', function () { return view('ex13'); });
Route::post('/ex13resp', function (Request $request) {
    $metros = floatval($request->input('metros'));
    $centimetros = $metros * 100;
    return view('ex13', compact('centimetros', 'metros'));
});

//Exercício 14
Route::get('/ex14', function () { return view('ex14'); });
Route::post('/ex14resp', function (Request $request) {
    $km = floatval($request->input('km'));
    $milhas = $km * 0.621371;
    return view('ex14', compact('milhas', 'km'));
});

//Exercício 15
Route::get('/ex15', function () { return view('ex15'); });
Route::post('/ex15resp', function (Request $request) {
    $peso   = floatval($request->input('peso'));
    $altura = floatval($request->input('altura'));
    $imc    = $peso / ($altura ** 2);
    return view('ex15', compact('imc', 'peso', 'altura'));
});

//Exercício 16
Route::get('/ex16', function () { return view('ex16'); });
Route::post('/ex16resp', function (Request $request) {
    $preco    = floatval($request->input('preco'));
    $desconto = floatval($request->input('desconto'));
    $resultado = $preco - ($desconto / 100 * $preco);
    return view('ex16', compact('resultado', 'preco', 'desconto'));
});

//Exercício 17
Route::get('/ex17', function () { return view('ex17'); });
Route::post('/ex17resp', function (Request $request) {
    $capital = floatval($request->input('capital'));
    $taxa    = floatval($request->input('taxa'));
    $periodo = intval($request->input('periodo'));
    $juros   = $capital * ($taxa / 100) * $periodo;
    return view('ex17', compact('juros', 'capital', 'taxa', 'periodo'));
});

//Exercício 18
Route::get('/ex18', function () { return view('ex18'); });
Route::post('/ex18resp', function (Request $request) {
    $capital = floatval($request->input('capital'));
    $taxa    = floatval($request->input('taxa'));
    $periodo = intval($request->input('periodo'));
    $montante = $capital * (1 + $taxa / 100) ** $periodo;
    return view('ex18', compact('montante', 'capital', 'taxa', 'periodo'));
});

//Exercício 19
Route::get('/ex19', function () { return view('ex19'); });
Route::post('/ex19resp', function (Request $request) {
    $dias    = intval($request->input('dias'));
    $horas   = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;
    return view('ex19', compact('horas', 'minutos', 'segundos', 'dias'));
});

//Exercício 20
Route::get('/ex20', function () { return view('ex20'); });
Route::post('/ex20resp', function (Request $request) {
    $distancia  = floatval($request->input('distancia'));
    $tempo      = floatval($request->input('tempo'));
    $erroTempo  = false;
    $velocidade = null;
    if ($tempo == 0) {
        $erroTempo = true;
    } else {
        $velocidade = $distancia / $tempo;
    }
    return view('ex20', compact('velocidade', 'distancia', 'tempo', 'erroTempo'));
});