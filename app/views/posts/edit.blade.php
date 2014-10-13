@extends('layouts.postsTemplate')

@section('content')
<div class='col-md-8'>
    <h2>Edit a Post</h2>
    <hr>
    {{ Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) }}
    <div class='form-group'>
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', $post->title, ['class' => 'form-control', 'id' => 'title']) }}
        {{ $errors->first('title', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::label('body', 'Body:') }}
        {{ Form::textarea('body', $post->body, ['class' => 'form-control', 'id' => 'body', 'rows' => '5']) }}
        {{ $errors->first('body', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::submit('Update', ['class' => 'btn btn-default']) }}
    </div>
    {{ Form::close() }}
</div>
@stop
