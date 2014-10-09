@extends('layouts.master')
<style>
#body{
    padding-top:100px;
    padding-right:100px;
    padding-left:100px;
}
</style>
}
@section('content')
<div id="body">
    {{$posts->links()}}

<form action="{{{action('PostsController@store')}}}" method="POST">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{{ Input::old('title') }}}" placeholder="Title"> 

   <label for="entry">Blog Entry</label>
    <textarea class="form-control" rows="3" id="entry" name="entry" placeholder="Submit New Entry">{{{ Input::old('entry') }}}</textarea>
</div>
<button type="submit" class="btn btn-default">Submit</button>
</form>

</div>

