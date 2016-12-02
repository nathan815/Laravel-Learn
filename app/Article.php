<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Carbon\Carbon;

class Article extends Model
{
    protected $fillable = [
      'title',
      'body',
      'published_at',
      'user_id' // temporary!
    ];

    protected $dates = ['published_at'];

    public function scopePublished($query) 
    {
      $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query) 
    {
      $query->where('published_at', '>', Carbon::now());
    }

    /**
     * An article is owned by a user.
     * @return BelongsTo
     */
    public function user() {
      return $this->belongsTo('App\User');
    }

}
