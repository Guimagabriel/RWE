@extends('Users.home')
@section('content')
    <h2>Usuarios</h2>
    <a href="{{ route('users.create') }}">Cadastrar Usúario</a>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
@endsection
