<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{
  public function categories () {
    return $this->belongsToMany(Category::class, 'movie_categories','movie_id','category_id');
  }

      public function hours () {
        return $this->belongsToMany(Hour::class, 'movie_hours','movie_id','hour_id');
      }
}
