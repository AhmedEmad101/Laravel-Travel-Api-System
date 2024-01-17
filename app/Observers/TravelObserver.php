<?php

namespace App\Observers;

use App\Models\Travels;

class TravelObserver
{
    /**
     * Handle the Travels "created" event.
     */
    public function creating(Travels $travels): void
    {
        $travels->Slug = str($travels->Name)->slug();
    }


}
