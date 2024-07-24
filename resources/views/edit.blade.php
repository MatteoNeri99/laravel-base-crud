@extends('layouts.app')


@section('main-content')

<h1 class="text-center fw-bolder p-5 ">Modifica {{ $animal->nome_comune }}</h1>

<div class="container">
    <div class="row justify-center">
        <form action="{{ route('animal.update', $animal) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-3">

              <label for="nome_comune" class="form-label">Nome Comune</label>

              <input type="nome_comune" class="form-control" id="nome_comune" aria-describedby="nome_comune" name="nome_comune" value="{{$animal->nome_comune}}">

            </div>


            <div class="mb-3">

                <label for="nome_scientifico" class="form-label">Nome scientifico</label>

                <input type="nome_scientifico" class="form-control" id="nome_scientifico" aria-describedby="nome_scientifico" name="nome_scientifico" value="{{$animal->nome_scientifico}}">

              </div>


              <div class="mb-3">

                <label for="specie" class="form-label">Specie</label>

                <input type="specie" class="form-control" id="specie" aria-describedby="specie" name="specie" value="{{$animal->specie}}">

              </div>


              <div class="mb-3">

                <label for="data_di_nascita" class="form-label">Data di nascita</label>

                <input type="data_di_nascita" class="form-control" id="data_di_nascita" aria-describedby="data_di_nascita" name="data_di_nascita" value="{{$animal->data_di_nascita}}">

              </div>

              <div class="mb-3">

                <label for="peso" class="form-label">Peso</label>

                <input type="peso" class="form-control" id="peso" aria-describedby="peso" name="peso" value="{{$animal->peso}}">

              </div>

              <div class="mb-3">

                <label for="altezza" class="form-label">Altezza </label>

                <input type="altezza" class="form-control" id="altezza" aria-describedby="altezza" name="altezza" value="{{$animal->altezza}}">

              </div>

              <div class="mb-3">

                <label for="sesso" class="form-label">Sesso</label>

                <input type="sesso" class="form-control" id="sesso" aria-describedby="sesso" name="sesso" value="{{$animal->sesso}}">

              </div>

              <div class="mb-3">

                <label for="colore" class="form-label">Colore</label>

                <input type="colore" class="form-control" id="colore" aria-describedby="colore" name="colore" value="{{$animal->colore}}">

              </div>

              <div class="mb-3">

                <label for="habitat" class="form-label">Habitat</label>

                <input type="habitat" class="form-control" id="habitat" aria-describedby="habitat" name="habitat" value="{{$animal->habitat}}">

              </div>

              <div class="mb-3">

                <label for="dieta" class="form-label">Dieta</label>

                <input type="dieta" class="form-control" id="dieta" aria-describedby="dieta" name="dieta" value="{{$animal->dieta}}">

              </div>


              <div class="mb-3">

                <label for="stato_di_conservazione" class="form-label">Stato di conservazione</label>

                <input type="stato_di_conservazione" class="form-control" id="stato_di_conservazione" aria-describedby="stato_di_conservazione" name="stato_di_conservazione" value="{{$animal->stato_di_conservazione}}">

              </div>

              <div class="mb-3">

                <label for="provenienza" class="form-label">Provenienza</label>

                <input type="provenienza" class="form-control" id="provenienza" aria-describedby="provenienza" name="provenienza" value="{{$animal->provenienza}}">

              </div>

              <div class="mb-3">

                <label for="microchip_id" class="form-label">Microchip id</label>

                <input type="microchip_id" class="form-control" id="microchip_id" aria-describedby="microchip_id" name="microchip_id"  value="{{$animal->microchip_id}}">

              </div>

              <a href="{{ Route('animal.index') }}" class="btn btn-secondary">Torna alla lista</a>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </div>
</div>

@endsection
