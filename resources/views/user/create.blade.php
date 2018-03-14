@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2>Users create</h2>

    @include('common.errors')

        {!! Form::model(null, ['route' => 'user.store']) !!}

        {!! Form::text('lastname') !!}
        {!! Form::text('firstname') !!}
        {!! Form::email('email') !!}

        {!! Form::submit('Click Me!') !!}

        {!! Form::close() !!}

    </div>


@endsection