@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Pagina index della C(R)UD</h1>

        @if (session('delete_success'))
            <div class="alert alert-danger" role="danger">
                {{session('delete_success')}}
            </div>
        @endif

        <table class="table">

            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>

            <tbody>

                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>
                            <a class="btn btn-success" href="{{route('admin.posts.show', $post)}}">Mostra</a>
                            <a class="btn btn-primary" href="{{route('admin.posts.edit', $post)}}">Modifica</a>

                            <form class="d-inline"
                            action="{{route('admin.posts.destroy', $post)}}"
                            method="POST"
                            onsubmit="return confirm('sei sicuro di voler cancellare il post?')">
                                @csrf
                                @method("DELETE")

                                <button type="submit" class="btn btn-danger">Cancella</button>
                            </form>
                        </td>
                    </tr>   
                @endforeach

            </tbody>

            
        </table>

        {{$posts->links()}}

    </div>
@endsection