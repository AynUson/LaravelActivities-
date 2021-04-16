@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Post') }}</div>

                <div class="card-body">
                    <form class="form-inline" method="POST" action="{{ route('post.update', $posts->id)}}">
                           
                            @csrf

                            <div class="form-group mb-2">
                                <input type="text" class="form-control-plaintext" name="title"  value="{{$posts->title}}">
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" class="form-control-plaintext" name="description" value="{{$posts->description}}" >
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
