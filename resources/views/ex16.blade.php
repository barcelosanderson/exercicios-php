@extends('layout')

@section('conteudo')
<h2 class="exercise-title">Exercício 16</h2>
<form method="post" action="/ex16resp">
    @csrf
    <div class="row mt-3">
        <div class="col mb-3">
            <label for="preco" class="form-label fw-bold">Informe o preço:</label>
            <input type="number" id="preco" name="preco" step="0.01" class="form-control" required="">
        </div>
        <div class="col mb-3">
            <label for="peso" class="form-label fw-bold">Informe o desconto:</label>
            <input type="number" id="desconto" name="desconto" step="0.01" class="form-control" required="">
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
        <p class="fw">O preço final é: <strong> R${{ $resultado }} </strong></p>
</div>
    @endisset

@endsection