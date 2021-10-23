@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('partial.error')
        </div>

        <div class="offset-md-2 col-md-8">
            <form method="post" action="{{ route('post.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="body">Text</label>
                    <textarea cols="30" rows="5" id="body" name="body" class="form-control"></textarea>
                </div>
                <input type="submit" value="submit" class="btn btn-success">
            </form>
        </div>
    </div>
</div>

@endsection