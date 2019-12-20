<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'content', 'user_id', 'publish_at', 'category','image'
    ];

  function likes() {
    $this->hasMany('App\Like');
  }

  public function user()
  {
    return $this->belongsto('App\User');
  }


}
