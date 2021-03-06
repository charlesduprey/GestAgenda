<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titre','contenu','user_id'];

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}