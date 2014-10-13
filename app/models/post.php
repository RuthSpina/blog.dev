<?php

use Carbon\Carbon;

class Post extends BaseModel
{
    const DATE_FORMAT = 'F jS, Y';

    public static $rules = 
    [
        'title' => 'required | max:255',
        'body' => 'required'
    ];

    protected $table = 'posts';

    public function getCreatedAtAttribute($value)
    {
        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago');
    }
    public function user()
    {
    return $this->belongsTo('User');
    }
}

