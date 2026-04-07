@extends('layout')

@section('conteudo')
<h2 class="exercise-title">Exercício 7</h2>
<form method="post" action="/ex7resp">
    @csrf
    <div class="row mt-3">
        <div class="col-4 mb-3">
            <label for="temp" class="form-label fw-bold">Digite a temperatura em Fahrenheit:</label>
            <input type="number" id="temp" name="temp" class="form-control" required="">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

    @isset($celsius)
    <div class="result-box">
        <p class="fw">O valor da temperatura em Celsius é: <strong> {{ $celsius }} °C </strong></p>
    </div>
    @endisset

@endsection