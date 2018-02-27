@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2>Users create</h2>

        {!! Form::open(['route' => 'user.store']) !!}

        {!! Form::text('lastname', 'Nom') !!}
        {!! Form::text('firstname', 'Prénom') !!}
        {!! Form::email('email', 'jhon@doo.coo') !!}

        {!! Form::close() !!}

    </div>


@endsection