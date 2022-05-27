@extends('layouts.app')

@section('content')
<div class= "d-flex justify-content-center align-items-center m-5 p-2 ">
<h1 class="fw-bold text-center">Gestione editoriale Boolpress</h1>
<a href="{{route('admin.posts.create')}}"class="btn btn-success text-white p-2 mx-3 ">+ Add Post</a>
</div>
<div class="container-fluid p-2">
    <table class="table table-light table-striped table-hover w-100">
        <thead>
            <tr style="width:100%;">
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Posted</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <td><a href="{{route("admin.posts.show", $post)}}">
                            {{ $post->title }}
                        </a>
                    </td>
                    <td>{{ $post->author }}</td>
                    <td>{{ $post->posted }}</td>
                    <td>
                        <form action="{{ route('admin.posts.edit', ['post'=>$post])}}" method="POST">
                        @csrf
                        @method('get')
                        <input class="btn btn-warning py-1" type="submit" value="Edit">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('admin.posts.destroy', $post) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input  class="btn btn-danger text-white p-1" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">
                        No Posts to show
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="col-12">
        {{$posts->links()}}
    </div>
</div>
@endsection
