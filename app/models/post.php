<?php

class Post extends Eloquent
{
    public $rules = array(
    'title'      => 'required|max:100',
    'body'       => 'required|max:10000'
);
        protected $table = 'posts';
}

