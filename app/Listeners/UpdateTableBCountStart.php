<?php

namespace App\Listeners;

use App\Events\TableARecordAdded;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateTableBCountStart
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TableARecordAdded $event): void
    {
        $tableA = $event->tableA;
        $starUser = $tableA->user_star;

        $tableB = $tableA->tableB()->firstOrNew();
        $tableB->increment('star_count', $starUser);
    }
}
