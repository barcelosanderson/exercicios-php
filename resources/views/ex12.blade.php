@extends('layout')

@section('conteudo')
<h2 class="exercise-title">Exercício 12</h2>
<form method="post" action="/ex12resp">
    @csrf
    <div class="row mt-3">
        <div class="col mb-3">
            <label for="base" class="form-label fw-bold">Informe a base:</label>
            <input type="number" id="base" name="base" class="form-control" required="">
        </div>
        <div class="col mb-3">
            <label for="expoente" class="form-label fw-bold">Informe o expoente</label>
            <input type="number" id="expoente" name="expoente" class="form-control" required="">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

    @isset($resultado)
    <div class="result-box">
        <p class="fw">O resultado é: <strong> {{ $resultado }} </strong></p>
</div>
    @endisset

@endsection