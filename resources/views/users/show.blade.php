@extends('layouts.plantilla')

@section('title', 'Usuario - ' . $user->name)

@section('content')

    <h1>Mostrando el usuario: {{$user->name}}</h1>
    <br/>
    <a href="{{route('users.index')}}">Volver a usuarios</a>
    <br/>
    <p><strong>Email:</strong> {{$user->email}}</p>
    <br/>
    <a href="{{route('users.edit',$user->id)}}">Editar usuario</a>

@endsection
