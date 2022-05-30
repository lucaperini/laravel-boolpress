@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-success">
                        <h4>{{session('message')}}</h4>
                    </div>
                @endif
                <div class="card" style="width: 25rem;">
                    @if(str_starts_with($post->image_url, 'https://') || str_starts_with($post->image_url, 'http://'))
                    <img src="{{ $post->image_url }}" class="card-img-top" alt="image of {{$post->title}}">
                    @else
                    @endif
                    <img src="{{ asset('/storage').'/'. $post->image_url}}" class="card-img-top" alt="image of {{$post->title}}">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase">{{ $post->title }}</h5>
                        <p class="card-subtitle text-muted">Author: {{ $post->user_id }}</p>
                        <p class="card-subtitle text-muted">Published: {{ $post->posted }}</p>
                        <p class="card-text">{{ $post->content }}</p>
                        <a href="{{ route('admin.posts.index')  }}" class="btn btn-success text-white">Back</a>
                        <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-warning">Edit</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
