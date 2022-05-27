@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Create Post</h1>
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error )
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('admin.posts.store', 'post' )}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="name" class="form-label">Inserisci titolo:</label>
                        <input type="text" name="title" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Inserisci Autore:</label>
                        <input type="text" name="author" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Inserisci Articolo:</label>
                        <input type="text" name="content" class="form-control" id="name">
                    </div>
                    <div class=" mb-3">
                        <label for="name" class="form-label">Inserisci slug:</label>
                        <input type="text" name="slug" class="form-control" id="name">
                    </div>
                    <div class=" mb-3">
                        <label for="name" class="form-label">Inserisci url immagine:</label>
                        <input type="text" name="image_url" class="form-control" id="name">
                    </div>
                    <div class=" mb-3">
                        <label for="name" class="form-label">Data pubblicazione:</label>
                        <input type="text" name="posted" class="form-control" id="name">
                    </div>
                    <a href="{{ route('admin.posts.index')  }}" class="btn btn-success text-white">Back</a>

                    <input type="submit" class="btn btn-primary">

                </form>
            </div>
        </div>
    </div>
@endsection
