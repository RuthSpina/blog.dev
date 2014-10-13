@extends('layouts.postsTemplate')

@section('content')
<div class="col-md-8"> <!-- Blog Post Column -->

    <article> <!-- Blog Post -->
        <h1>{{{ $post->title }}}</h1>

        <p class="lead">{{ $post->updated_at->format(Post::DATE_FORMAT) }}</p>

        <!-- TO EDIT A POST -->
        <a class='btn btn-default' href={{ action('PostsController@edit', $post->id) }}>Edit</a>

        <!-- TO DELETE A POST -->
        {{ Form::open(['method' => 'DELETE', 'action' => ['PostsController@destroy', $post->id], 'id' => 'delete-form']) }}
        <div class='form-group'>
            {{ Form::submit('Delete Post', ['class' => 'btn btn-danger']) }}
        </div>
        {{ Form::close() }}
        <hr>

        <p class="lead">{{{ $post->body }}}</p>
    </article>
    <hr>

    <!-- Blog Comments -->
    <!-- Comments Form -->
    <div class="well">
        <h4>Leave a Comment:</h4>
        <form role="form">
            <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <hr>
@stop

@section('bottom-script')
<script>
$('#delete-form').submit(function(event) {
    if (!confirm('Are you sure you want to delete this?')) {
        event.preventDefault();
    };
});
</script>
@stop
