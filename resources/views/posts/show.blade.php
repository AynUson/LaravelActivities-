@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <a type="submit" class="btn btn-primary mb-2" href="/posts">Back</a>
            <div class="card">
                <div class="card-header">{{ __('Posts') }}</div>

                <div class="card-body">

                    <h2>{{$posts->title}}</h2>
                    <p>{{$posts->description}}</p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
