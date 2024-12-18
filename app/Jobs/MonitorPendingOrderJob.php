<?php

namespace App\Jobs;

use App\Models\Order;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class MonitorPendingOrderJob implements ShouldQueue
{
    use Queueable;

    public $tries = 3 ;

    public  $backoff = [60,600,60*60];
    /**
     * Create a new job instance.
     */
    public function __construct(public Order $order)
    {
        $this->onQueue('monitor-pending-order');
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        if ($this->order->status == 'unpaid') {
            # code...
            $this->order->update(['status' => 'cancelled']);

        }else {
            return;
        }
    }
}
