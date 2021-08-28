@extends('layouts.app')
@section('content')
@if($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            {{ $error }} </br>
        @endforeach
    </div>
@endif
<div class="container">
    <div class="row justify-center-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('post') }}</div>
                <div class="card-body">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }} </br>
                    @endforeach
                    
                    </div>
                    @endif
                    
                    <form action="{{ route('posts.update', ['post' => $post->id ]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="tema" class="col-md-4 col-form-label text-md-right">{{ __('titulo') }}</label>

                            <div class="col-md-6">
                                <input id="tema" type="text" class="form-control " name="title" value="{{  $post->title  }}" autocomplete="email" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('Contenido') }}</label>

                            <div class="col-md-6">
                                <textarea name="content" id="body" cols="40" rows="5">{{ $post->content }}</textarea> 
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection