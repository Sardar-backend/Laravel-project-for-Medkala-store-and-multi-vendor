<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{


    public function category() {

        return $this->belongsToMany(productcategory::class);
    }

}
