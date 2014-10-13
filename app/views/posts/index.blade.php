@extends('layouts.postsTemplate')

@section('content')
<div class="col-md-8"> <!-- Blog Entries Column -->

    <h1>My Blog</h1>
    <a class='btn btn-default' href={{ action('PostsController@create') }}>New Post</a>
    <hr>

    <article> <!-- Blog Post  -->
        @forelse($posts as $post)
        <h3>{{{ $post->title }}}</h3>

        <p><span class='glyphicon glyphicon-time'></span> {{{ $post->updated_at->format(Post::DATE_FORMAT) }}}</p>

        <img class='img-responsive' src="{{ $post->img }}" alt="">
        {{-- {{ HTML::image($post->img, 'alt text', ['class', 'img-responsive']) }} --}}

        <p>{{{ $post->body }}}</p>

        <a class="btn btn-sm btn-primary" href="posts/{{ $post->id }}">More Info <span class="glyphicon glyphicon-chevron-right"></span></a>

        @empty
        <p>No post</p>
        @endforelse
    </article>
    <hr>

    {{ $posts->links() }} <!-- Paginator -->
</div>
@stop
