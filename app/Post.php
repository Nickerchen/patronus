<?php

namespace App;


class Post extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
