@extends('layouts.form-layout')

@section('titolo')
aggiungi un animale
@endsection


@section('route')
{{ route('animal.store') }}
@endsection



@section('method')
@method('POST')
@endsection









