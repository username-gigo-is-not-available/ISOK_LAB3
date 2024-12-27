<?php

namespace App\Observers;

use App\Enums\ReviewStatus;
use App\Models\Review;

class ReviewObserver
{
    /**
     * Handle the Review "creating" event.
     */
    public function creating(Review $review): void
    {
        $review->status = ReviewStatus::PENDING;
    }

    /**
     * Handle the Review "created" event.
     */
    public function created(Review $review): void
    {
        //
    }

    /**
     * Handle the Review "updated" event.
     */
    public function updated(Review $review): void
    {
        //
    }

    /**
     * Handle the Review "deleted" event.
     */
    public function deleted(Review $review): void
    {
        //
    }

    /**
     * Handle the Review "restored" event.
     */
    public function restored(Review $review): void
    {
        //
    }

    /**
     * Handle the Review "force deleted" event.
     */
    public function forceDeleted(Review $review): void
    {
        //
    }
}
