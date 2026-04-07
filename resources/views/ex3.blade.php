@extends('layout')

@section('conteudo')
<h2 class="exercise-title">Exercício 3 <small style="font-size:0.6em;color:#8b949e">— Multiplicação de dois números</small></h2>

<form method="post" action="/ex3resp">
    @csrf
    <div class="row g-3 mb-3">
        <div class="col-sm-6">
            <label for="num1" class="form-label">Primeiro número</label>
            <input type="number" id="num1" name="num1" class="form-control"
                   step="any" placeholder="Ex: 4" required
                   value="{{ old('num1', $num1 ?? '') }}">
        </div>
        <div class="col-sm-6">
            <label for="num2" class="form-label">Segundo número</label>
            <input type="number" id="num2" name="num2" class="form-control"
                   step="any" placeholder="Ex: 7" required
                   value="{{ old('num2', $num2 ?? '') }}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

@isset($resultado)
    <div class="result-box">
        {{ $num1 }} × {{ $num2 }} = <strong>{{ $resultado }}</strong>
    </div>
@endisset
@endsection