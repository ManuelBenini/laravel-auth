@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Pagina create della (C)RUD</h1>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('admin.posts.store')}}" method="POST">
            @csrf

            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text"
              value="{{old('title')}}" 
              class="form-control @error('title') is-invalid @enderror" 
              id="title" name="title" 
              placeholder="Titolo">

              @error('title')
                <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="mb-3">
              <label for="title" class="form-label">Contenuto del post</label>
              <textarea class="form-control @error('content') is-invalid @enderror" 
              name="content" id="content" 
              cols="30" rows="10">{{old('content')}}</textarea>

              @error('content')
                <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>
@endsection