<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'Questions';
    public $timestamps = false;

    protected $fillable = ['user_id','Seller_id' , 'product_id' , 'Question' , "Answer"];

    public function user(){
        return $this->belongsTo(User::class );
    }
}
