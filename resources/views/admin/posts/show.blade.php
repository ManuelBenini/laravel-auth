@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Pagina show della C(R)UD</h1>

        <h1>{{$post->title}}</h1>
        <p>{{$post->content}}</p>

        {{-- Bottoni --}}
        <a class="btn btn-primary" href="{{route('admin.posts.index')}}">Torna all'elenco</a>
        <a class="btn btn-success" href="{{route('admin.posts.edit', $post)}}">Modifica</a>

        <form class="d-inline"
        action="{{route('admin.posts.destroy', $post)}}"
        method="POST"
        onsubmit="return confirm('sei sicuro di voler cancellare il post?')">
            @csrf
            @method("DELETE")

            <button type="submit" class="btn btn-danger">Cancella</button>
        </form>

    </div>
@endsection
