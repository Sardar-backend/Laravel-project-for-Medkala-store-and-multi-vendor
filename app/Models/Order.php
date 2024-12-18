<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // use HasFactory;
    protected $fillable = ['price','status' ,'user_id','address_id','tracking_serial','discount','Discount'];
    public function payment(){
        return $this->hasMany(Payment::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function Addresses(){
        return $this->belongsTo(address::class , 'address_id');
    }
}
