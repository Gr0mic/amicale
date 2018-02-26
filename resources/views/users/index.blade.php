@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2>Liste des utilisateurs</h2>

        <a href="{{ route('user.create') }}" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Ajouter un utilisateur</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
        {{ $users->links() }}
    </div>


@endsection