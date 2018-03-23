<?php

namespace App\Listeners;

use App\Events\CreateOrder;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\OrderMessage;

class CreateOrderNotification
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
     * @param  CreateOrder $event
     * @return void
     */
    public function handle(CreateOrder $event)
    {
        $om = new OrderMessage();
        $save['order_serial'] = $event->order->order_serial;
        $save['order_id'] = $event->order->order_id;
        $save['user_id'] = $event->order->user_id;
        $save['om_time'] = $_SERVER['REQUEST_TIME'];
        $om->insert($save);
    }
}
