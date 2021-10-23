@extends('layouts.app')

@section('content')

<div class="container">
    @include('partial.success')
    @if(Auth::user() && Auth::user()->hasRole('author'))
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('post.create') }}" class="btn btn-success mb-1">Create</a>
        </div>
    </div>
    @endif
    <table class="table table-hover ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (count($posts))
            @foreach ($posts as $post)
            <tr>
                <th>{{ $post->id }}</th>
                <th>{{ $post->title }}</th>
                <th>{{ $post->user->name }}</th>
                <th>
                    @if ($post->status)
                    Published
                    @else
                    Unpublished
                    @endif
                </th>
                <th>
                    <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">View</a>
                </th>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>

@endsection