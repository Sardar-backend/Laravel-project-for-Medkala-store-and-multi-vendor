<?php

namespace App\Jobs;

use App\Models\fine;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ApplyFineJob implements ShouldQueue
{
    use Queueable;

    public $user;
    public $reason;
    public $price;

    public function __construct(User $user, string $reason, float $price)
    {
        $this->user = $user;
        $this->reason = $reason;
        $this->price = $price;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        if ($this->user->products()->wherecount(0)->count()) {
        fine::create([
            'user_id' => $this->user->id,
            'price' => $this->price,
            'reason' => $this->reason
        ]);
    }
    }
}
