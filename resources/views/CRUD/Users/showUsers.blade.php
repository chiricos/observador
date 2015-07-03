@extends('plantille')

@section('content')

    @include('Complements.Users.message')
    <p>Hay {{$users->lastPage()}} paginas</p>
    <p>Hay {{$users->total()}} registros</p>
    <p>Hay {{$users->count()}} registros</p>
    @include('Complements.Users.table')
    {!!$users->appends(Request::only(['name','type']))->render()!!}

@stop