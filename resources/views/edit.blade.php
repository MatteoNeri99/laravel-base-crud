@extends('layouts.form-layout')

@section('titolo')
Modifica {{ $animal->nome_comune }}
@endsection


@section('route')
{{ route('animal.update', $animal) }}
@endsection



@section('method')
@method('PUT')
@endsection



