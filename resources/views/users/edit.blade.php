@extends('layouts.plantilla')

@section('title', 'Editar Usuario')

@section('content')

    <h1>¿Quieres editar el usuario - {{$user->name}}?</h1>
    <a href="{{route('users.index')}}">Volver a ver usuarios</a>

    <form action="{{route('users.update',$user)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" value="{{old('name',$user->name)}}">
            @error('name')
                <small>*{{$message}}</small>
            @enderror
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" value="{{old('email',$user->email)}}">
            @error('email')
                <small>*{{$message}}</small>
            @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" value="{{old('password',$user->password)}}">
            @error('password')
                <small>*{{$message}}</small>
            @enderror
        </div>
        <div>
            <button type="submit">Send</button>
        </div>
    </form>
    <h2>¿Quieres eliminar el usuario - {{$user->name}}?</h2>
    <form action="{{route('users.destroy',$user)}}" method="POST">
        @csrf
        @method('DELETE')
        <div>
            <button type="submit">Delete</button>
        </div>
    </form>
@endsection
