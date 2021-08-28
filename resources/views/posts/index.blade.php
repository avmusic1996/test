@extends('layouts.app')
@section('title')
    Listar publicaciones
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">

            <div class="text-center  p-6">
                <h1>Publicaciones</h1>
            </div>
        <div class="text-right">
            <a class="btn btn-primary" href="{{ route('posts.create') }}"> Crear</a>
        </div>
        <table class="table table-striped ">
            <thead>
                <tr class="g-3">
                <th scope="col">Titulos</th>
                <th scope="col">Contenido</th>
                <th scope="col">Opciones</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td><a href="{{ route('posts.edit', ['post' => $post] ) }}">editar</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
    </div>
</div>
</div>
@endsection