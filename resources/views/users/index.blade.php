@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2>Users</h2>

        <table class="table">
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