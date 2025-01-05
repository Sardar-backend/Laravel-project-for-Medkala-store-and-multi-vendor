<?php

namespace App\Models;
use Morilog\Jalali\Jalalian;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // use HasFactory;
    public function scopeOfShamsiMonth($query, $year, $month)
    {
        $start = Jalalian::fromFormat('Y-m-d', "$year-$month-01")->toCarbon(); // شروع ماه
        $end = $start->copy()->endOfMonth(); // پایان ماه

        return $query->whereBetween('created_at', [$start, $end]);
    }

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
