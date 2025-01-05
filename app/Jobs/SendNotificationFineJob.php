<?php

namespace App\Jobs;
use App\Models\User;
use App\Notifications\notificationCode;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendNotificationFineJob implements ShouldQueue
{
    use Queueable;


    public $tries = 3 ;

    public  $backoff = [60,600,60*60];

    /**
     * Create a new job instance.
     */
    public function __construct(public $param , public $phoneNumber , public User $existingUser , public  $template)
    {
        $this->onQueue('Send-Notification-Fine');
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        if ( count($this->existingUser->fines()->get())) {
            # code...
            $this->existingUser->notify(new notificationCode($this->param,$this->phoneNumber , $this->template));
        }
    }
}
