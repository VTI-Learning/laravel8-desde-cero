@extends('layouts.plantilla')

@section('title', 'Usuarios')

@section('content')
    <h1>Monstrando la lista de usuarios.</h1>
    <a href="{{route('users.create')}}">Crear usuario</a>
    <ul>
        @foreach ($users as $user)
            <li>
                <a href="{{route('users.show',$user->slug)}}">{{$user->name}}</a>
            </li>
        @endforeach
    </ul>
    {{$users->links()}}
@endsection
