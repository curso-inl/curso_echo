<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class accion_patrulla implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $mensaje;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($txt)
    {
        //
        $this->mensaje = $txt;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        //return new Channel('patrulla'.'-'.$this->mensaje->id_comisaria);
        //return new PrivateChannel('patrulla'.'-'.$this->mensaje->id_comisaria);
        return new Channel('patrulla'.'-'.$this->mensaje->id_comisaria);
    }
}
