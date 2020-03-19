<?php

namespace App\Listeners\Backend\Auth\Comment;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;


use App\Events\Backend\Auth\Comment\CommentCreated;
use App\Events\Backend\Auth\Comment\CommentSent;
use App\Events\Backend\Auth\Comment\CommentUpdated;


class CommentEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        logger('Comment Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        logger('Comment Updated');
    }

    /**
     * @param $event
     */
    public function onSent($event)
    {
        logger('Comment Sent');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            CommentCreated::class,
            'App\Listeners\Backend\Auth\Comment\CommentEventListener@onCreated'
        );

        $events->listen(
            CommentUpdated::class,
            'App\Listeners\Backend\Auth\Comment\CommentEventListener@onUpdated'
        );

        $events->listen(
            CommentSent::class,
            'App\Listeners\Backend\Auth\Comment\CommentEventListener@onSent'
        );
    }
    // /**
    //  * Create the event listener.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     //
    // }

    // /**
    //  * Handle the event.
    //  *
    //  * @param  object  $event
    //  * @return void
    //  */
    // public function handle($event)
    // {
    // }
}
