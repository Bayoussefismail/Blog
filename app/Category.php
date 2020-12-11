<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class Category extends Model
{



  protected $fillable = [
    'name',  'feature', 'slug'
  ];
  public function getFeaturedAttribute($feature)
  {
    return asset($feature);
  }
  public function posts()
  {
      return $this->hasMany('App\Post', 'category_id');
  }
}
