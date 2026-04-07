@extends('layout')

@section('conteudo')
<h2 class="exercise-title">Exercício 19</h2>
<form method="post" action="/ex19resp">
    @csrf
    <div class="row mt-3">
        <div class="col-4 mb-3">
            <label for="dias" class="form-label fw-bold">Informe o valor em dias</label>
            <input type="number" id="dias" name="dias" class="form-control" required="">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

    @isset($horas)
    <div class="result-box">
        <p class="fw">Valor em horas: <strong> {{ $horas }} </strong></p>
        <p class="fw">Valor em minutos: <strong> {{ $minutos }} </strong></p>
        <p class="fw">Valor em segundos: <strong> {{ $segundos }} </strong></p>
</div>
    @endisset

@endsection