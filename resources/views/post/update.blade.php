@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('partial.error')
        </div>

        <div class="offset-md-2 col-md-8">
            <form method="post" action="{{ route('post.update', $post->id) }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{ $post->user->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $post->user->email }}">
                </div>
                <div class="custom-control custom-checkbox pr-4">
                    <input type="checkbox" class="custom-control-input" id="status" value="{{ $post->status }}">
                    <label class="custom-control-label" for="status">Status</label>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="body">Text</label>
                    <textarea cols="30" rows="5" id="body" name="body" class="form-control">
                    {{ $post->body }}
                    </textarea>
                </div>

                <div class="row d-flex justify-content-end mr-0 mb-3">
                    <a href="{{ route('post.update', $post->id) }}" class="btn btn-primary shadow">Save?</a>
                    <input type="submit" value="Save?" class="btn btn-success ml-1 mr-0">
                </div>
            </form>
        </div>

    </div>
</div>


@endsection