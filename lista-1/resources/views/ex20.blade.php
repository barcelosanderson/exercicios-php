@extends('layout')

@section('conteudo')
<h2 class="exercise-title">Exercício 20</h2>

<form method="post" action="/ex20resp">
    @csrf
    <div class="row g-3 mb-3">
        <div class="col-sm-6">
            <label for="distancia" class="form-label">Distância (km)</label>
            <input type="number" id="distancia" name="distancia" class="form-control"
                   step="any" min="0" placeholder="Ex: 150" required
                   value="{{ old('distancia', $distancia ?? '') }}">
        </div>
        <div class="col-sm-6">
            <label for="tempo" class="form-label">Tempo (horas)</label>
            <input type="number" id="tempo" name="tempo" class="form-control"
                   step="any" min="0" placeholder="Ex: 2" required
                   value="{{ old('tempo', $tempo ?? '') }}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

@isset($erroTempo)
    @if($erroTempo)
        <div class="alert-custom">
            ⚠️ O tempo não pode ser zero. Informe um valor válido.
        </div>
    @else
        <div class="result-box">
            Velocidade média = <strong>{{ number_format($velocidade, 2) }} km/h</strong>
        </div>
    @endif
@endisset
@endsection