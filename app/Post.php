<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{

  use SoftDeletes;


  protected $fillable = [
    'title', 'content', 'category_id', 'feature', 'slug'
  ];
public function getFeaturedAttribute($feature)
{
  return asset($feature);
}
  protected $dates = ['deleted_at'];

    public function tags() {
      return $this->belongsToMany('App\Tag');
    }
    public function category()
     {
          return $this->belongsTo('App\Category');
     }
}
