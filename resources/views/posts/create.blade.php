@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Posts') }}</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{$error}} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                <div class="card-body">
                    <form class="form-inline" method="POST" action="/posts" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-2">
                            <label for='title' class=" col-form-label"> Title </label>
                                <input type="text" class="form-control-plaintext" name="title"  placeholder="enter title">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        {{$message}}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                <label for='description' class=" col-form-label"> Description </label>
                                <input type="text" class="form-control-plaintext" name="description" placeholder="enter description">
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        {{$message}}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                            <label for="img" class="col-md-4 col-form-label text-md-right">{{ __('Upload Image') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control-file @error('img') is-invalid @enderror" name="img" value="{{ old('img') }}"  autocomplete="img">
                            </div>


                        </div>


                            @error('img')
                                <span class="invalid-feedback" role="alert">
                                    {{$message}}
                                </span>
                            @enderror
                            <button type="submit" class="btn btn-primary mb-2">Create</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
