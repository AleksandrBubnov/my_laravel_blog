@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">

        <div class="offset-md-2 col-md-8 ">
            <div class="form-group">
                <label for="author">Author</label>
                <input readonly type="text" class="form-control" id="author" name="author" value="{{ $post->user->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input readonly type="text" class="form-control" id="email" name="email" value="{{ $post->user->email }}">
            </div>
            <div class="form-group">
                <label for="date_creating">Date</label>
                <input readonly type="text" class="form-control" id="date_creating" name="date_creating" value="{{ $post->date }}">
            </div>
            <div class="custom-control custom-checkbox pr-4">
                <input disabled type="checkbox" class="custom-control-input" id="status" value="{{ $post->status }}">
                <label class="custom-control-label" for="status">Status</label>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input readonly type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="body">Text</label>
                <textarea readonly cols="30" rows="5" id="body" name="body" class="form-control">
                {{ $post->body }}
                </textarea>
            </div>

            <div class="row d-flex justify-content-end mr-0 mb-3">
                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary shadow">Редактировать</a>
                <!-- <a href="{{ route('post.destroy', $post->id) }}" class="btn btn-danger shadow ml-1 mr-0">Удалить</a> -->
            </div>
        </div>
    </div>
</div>


@endsection