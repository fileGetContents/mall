<?php

namespace App\Listeners;

use App\Events\UpdateOrder;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateOrderNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UpdateOrder  $event
     * @return void
     */
    public function handle(UpdateOrder $event)
    {
        //
    }
}
