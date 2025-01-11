<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class productNotificationUser extends Model
{
    protected $table = 'product_notification_user';

    protected $fillable = ['product_id', 'user_id'];
}
