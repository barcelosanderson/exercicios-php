@extends('layout')

@section('conteudo')
<h2 class="exercise-title">Exercício 4 <small style="font-size:0.6em;color:#8b949e">— Divisão de dois números</small></h2>

<form method="post" action="/ex4resp">
    @csrf
    <div class="row g-3 mb-3">
        <div class="col-sm-6">
            <label for="num1" class="form-label">Dividendo</label>
            <input type="number" id="num1" name="num1" class="form-control"
                   step="any" placeholder="Ex: 20" required
                   value="{{ old('num1', $num1 ?? '') }}">
        </div>
        <div class="col-sm-6">
            <label for="num2" class="form-label">Divisor</label>
            <input type="number" id="num2" name="num2" class="form-control"
                   step="any" placeholder="Ex: 4" required
                   value="{{ old('num2', $num2 ?? '') }}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

@isset($erroDivisao)
    @if($erroDivisao)
        <div class="alert-custom">
            ⚠️ Divisão por zero não é permitida. Informe um divisor diferente de 0.
        </div>
    @else
        <div class="result-box">
            {{ $num1 }} ÷ {{ $num2 }} = <strong>{{ $resultado }}</strong>
        </div>
    @endif
@endisset
@endsection