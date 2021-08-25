<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Rate extends Model
{
    public function categories(){
    return $this->belongsTo(RateCategory::class, 'id_rate_category');
    }
}
