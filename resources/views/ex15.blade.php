@extends('layout')

@section('conteudo')
<h2 class="exercise-title">Exercício 15</h2>
<form method="post" action="/ex15resp">
    @csrf
    <div class="row mt-3">
        <div class="col mb-3">
            <label for="altura" class="form-label fw-bold">Informe a altura:</label>
            <input type="number" id="altura" name="altura" step="0.01" class="form-control" required="">
        </div>
        <div class="col mb-3">
            <label for="peso" class="form-label fw-bold">Informe o peso</label>
            <input type="number" id="peso" name="peso" step="0.01" class="form-control" required="">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

    @isset($imc)
    <div class="result-box">
        <p class="fw">O IMC é: <strong> {{ $imc }} </strong></p>
</div>
    @endisset

@endsection