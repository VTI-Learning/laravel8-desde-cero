@extends('layouts.plantilla')

@section('title', 'Crear Usuario')

@section('content')

    <h1>¿Quieres crear un nuevo usuario?</h1>
    <a href="{{route('users.index')}}">Volver a ver usuarios</a>

    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" value="{{old('name')}}">
            @error('name')
                <small>*{{$message}}</small>
            @enderror
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" value="{{old('email')}}">
            @error('email')
                <small>*{{$message}}</small>
            @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
            @error('password')
                <small>*{{$message}}</small>
            @enderror
        </div>
        <div>
            <button type="submit">Send</button>
        </div>
    </form>
@endsection
