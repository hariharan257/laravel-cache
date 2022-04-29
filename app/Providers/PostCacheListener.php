<?php

namespace App\Providers;

use App\Providers\PostCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class PostCacheListener
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
     * @param  \App\Providers\PostCreated  $event
     * @return void
     */
    public function handle(PostCreated $event)
    {
        //
    }
}
