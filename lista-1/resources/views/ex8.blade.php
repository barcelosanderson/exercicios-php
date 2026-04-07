@extends('layout')

@section('conteudo')
<h2 class="exercise-title">Exercício 8</h2>
<form method="post" action="/ex8resp">
    @csrf
    <div class="row mt-3">
        <div class="col mb-3">
            <label for="comp" class="form-label fw-bold">Informe a largura do retângulo:</label>
            <input type="number" id="comp" name="comp" class="form-control" required="">
        </div>
        <div class="col mb-3">
            <label for="larg" class="form-label fw-bold">Informe o comprimento do retângulo:</label>
            <input type="number" id="larg" name="larg" class="form-control" required="">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

    @isset($area)
    <div class="result-box">
        <p class="fw">O valor da área é: <strong> {{ $area }} </strong></p>
</div>
    @endisset

@endsection