<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'user_id', 
    'title', 
    'body', 
    'status', 
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function user()
    {
    	return $this->belongsTo('App\User');

    }

    public function scopeBlockedUsers($query)
    {
        $query->where('level', '=', 'none')->first();
    }

    public function scopeGetLatestArticles($query, $nr)
    {
        $query
        ->where('status', 'published')                  
        ->orderBy('published_at', 'desc')
        ->take($nr)
        ->get();
    }
}
