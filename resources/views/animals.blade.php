@extends('layouts.app')


@section('main-content')
<div class="col-12">
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Nome comune</th>
            <th scope="col">sesso</th>
            <th scope="col">provenienza</th>
            </tr>
        </thead>

        @foreach ($animals as $animal)
            <tbody>
                <td>{{$animal->id}}</td>
                <td>{{$animal->nome_comune}}</td>
                <td>{{$animal->sesso}}</td>
                <td>{{$animal->provenienza}}</td>

            </tbody>
        @endforeach

    </table>
</div>


@endsection

