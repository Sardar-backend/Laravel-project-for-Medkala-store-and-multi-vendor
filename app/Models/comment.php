<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public $timestamps = false;
    protected $fillable = ['hosting','subject','id','status','content', 'user_id' , 'parent_id' ,'email','username', 'commenttable_id','commenttable_type'];

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function child (){
        return $this->hasMany(Comment::class,'parent_id','id');
    }

    public function commenttable()
    {
        return $this->morphTo();
    }

}
