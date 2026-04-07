@extends('layout')

@section('conteudo')
<h2 class="exercise-title">Exercício 18</h2>
<form method="post" action="/ex18resp">
    @csrf
    <div class="row mt-3">
        <div class="col mb-3">
            <label for="capital" class="form-label fw-bold">Informe o capital:</label>
            <input type="number" id="capital" name="capital" step="0.01" class="form-control" required="">
        </div>
        <div class="col mb-3">
            <label for="taxa" class="form-label fw-bold">Informe a taxa de juros:</label>
            <input type="number" id="taxa" name="taxa" step="0.01" class="form-control" required="">
        </div>
        <div class="col mb-3">
            <label for="periodo" class="form-label fw-bold">Informe a período:</label>
            <input type="number" id="periodo" name="periodo" class="form-control" required="">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

    @isset($montante)
    <div class="result-box">
        <p class="fw">O valor do montante é: <strong> R${{ $montante }} </strong></p>
</div>
    @endisset

@endsection