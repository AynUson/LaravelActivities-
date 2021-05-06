@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a type="submit" class="btn btn-primary mb-2" href="/posts">Back</a>
            <div class="card">
                <div class="card-header">{{ __('Posts') }}</div>

                <div class="card-body">

                    <h2>Title: {{$post->title}}</h2>
                    <br>
                    <p>Description: {{$post->description}}</p>
                    <br>
                    <!-- <p>Image: </p>
                    @if ($post->img)
                        <img src="{{ asset('/storage/img/'.$post->img) }} " alt="{{ $post->img }}"/>
                    @else
                    <h4>Post has no image</h4>
                    @endif -->

                    @include('/posts/comments')


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
