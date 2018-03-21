@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2>Users create</h2>

    @include('common.errors')

        {!! Form::model(null, ['route' => 'user.store']) !!}

        <div class="row">
            <div class="col">
                <div class="form-group">
                    {!! Form::label('lastname', 'Prénom')!!}
                    {!! Form::text('lastname', null, ['class'=>'form-control' ]) !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('firstname', 'Nom')!!}
                    {!! Form::text('firstname', null,  ['class'=>'form-control']) !!}
                </div>
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('firstname', 'Adresse email')!!}
            {!! Form::email('email', null,  ['class'=>'form-control']) !!}
        </div>

        {!! Form::submit('Click Me!', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}

    </div>


@endsection