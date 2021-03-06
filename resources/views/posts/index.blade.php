@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">
        <a type="button" class="btn btn-primary btn-sm" href="/posts/create">New Posts</a>
        <hr>
            <div class="card">

                <div class="card-header">{{ __('Posts') }}</div>

                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td>{{$post->title}}</td>
                            <td>{{$post->description}}</td>
                            <td> <a type="button" href="/posts/{{$post->id}}" class="btn btn-light">View</a></td>

                            <td><a type="button" href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                            <td>
                                <form method="POST" action="{{ route('posts.destroy', $post->id)}}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit"  class="btn btn-danger">Delete </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
