@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Edit Post</h1>
            <div class="col-12">
                <form action="{{route('admin.posts.update', $post)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Inserisci titolo:</label>
                        <input type="text" name="title" class="form-control" id="name" value="{{ $post->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Inserisci Autore:</label>
                        <input type="text" name="author" class="form-control" id="name" value="{{ $post->author}}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Inserisci Articolo:</label>
                        <input type="text" name="content" class="form-control" id="name" value="{{ $post->content}}">
                    </div>
                    <div class=" mb-3">
                        <label for="name" class="form-label">Inserisci url immagine:</label>
                        <input type="text" name="image_url" class="form-control" id="name" value="{{ $post->image_url}}">
                    </div>
                    <a href="{{ route('admin.posts.index')  }}" class="btn btn-success text-white">Back</a>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-primary">Invia</button>

                </form>
            </div>
        </div>
    </div>
@endsection
