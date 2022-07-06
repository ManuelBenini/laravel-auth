@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Pagina show della C(R)UD</h1>

        <h1>{{$post->title}}</h1>
        <p>{{$post->content}}</p>

        <a class="btn btn-primary" href="{{route('admin.posts.index')}}">Torna all'elenco</a>
        
    </div>
@endsection