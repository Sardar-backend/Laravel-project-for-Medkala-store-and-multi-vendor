<?php

namespace App\Jobs;

use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Notifications\notificationCode;

class SendNotificationProductJob implements ShouldQueue
{
    use Queueable;
    public $tries = 3 ;

    public  $backoff = [60,600,60*60];

    /**
     * Create a new job instance.
     */
    public function __construct(public Product $param  , public  $template)
    {
        $this->onQueue('Send-Notification-Product');
    }


    public function handle(): void
    {
        foreach ($this->param->productNotificationUser()->get() as $existingUser ) {
            $existingUser->notify(new notificationCode($this->param->name,$existingUser->phoneNumber , $this->template));
        }


    }
}
