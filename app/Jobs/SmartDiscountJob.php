<?php

namespace App\Jobs;

use App\Models\Product;
use Carbon\Carbon;
use DateTime;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SmartDiscountJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Product $product , public $time , public $discust)
    {

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
            $now = Carbon::now();
            $totalSeconds = $this->time->diffInSeconds($now);
            $this->product->update(['discust' => $this->discust]);
            sleep($totalSeconds);
            $this->product->update(['discust' => 0]);
    }
}
