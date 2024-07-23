@extends('layouts.app')


@section('main-content')
<div class="col-12 container p-5">
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome comune</th>
            <th scope="col">Sesso</th>
            <th scope="col">Provenienza</th>
            <th scope="col">Azioni</th>
            </tr>
        </thead>

        @foreach ($animals as $animal)
            <tbody>
                <td>{{$animal->id}}</td>
                <td>{{$animal->nome_comune}}</td>
                <td>{{$animal->sesso}}</td>
                <td>{{$animal->provenienza}}</td>
                <td> <a href="{{ Route('animal.show', $animal->id) }}" class="btn btn-primary">scopri di più</a> </td>

            </tbody>
        @endforeach

    </table>
</div>


@endsection

