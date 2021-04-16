@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Posts') }}</div>

                <div class="card-body">
                    <form class="form-inline" method="POST" action="/posts">
                            @csrf
                            <div class="form-group mb-2">
                                <input type="text" class="form-control-plaintext" name="title"  placeholder="Title">
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" class="form-control-plaintext" name="description" placeholder="Description">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Create</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
